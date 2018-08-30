<?php
namespace app\api\model;
use think\Model;
class User extends Model
{	
	/**
	 * 修改用户令牌token
	 * 
	 */
	public function updateToken($uid,$rand,$token){
		$result = db('app_user')->where('id',$uid)->update(['rand'=> $rand,'token'=>$token]);
		if($result >= 0){
			return true;
		}
		return false;
	}

	/**
	 * 用户注册
	 * @param  [type] $mobile   [description]
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function user_register($mobile,$password)
	{   
		$user = db('app_user')->where(['mobile'=>$mobile])->find();
		if($user){
			return 2;//该手机号已注册
		}
		$password = user_md5($password);
		$id = db('app_user')->insertGetId(['user_name'=>$mobile,'nikname'=>$mobile,'mobile'=>$mobile,'password'=>$password,'status'=>1,'create_time'=>time()]);
		if($id){
			$rand = rand_string(6);
			
			$token = init_token($id,$rand);

			if(!empty($token)){
				$this->updateToken($id,$rand,$token);
			}
			$userinfo = db('app_user')->where(['id'=>$id])->find();
			return $userinfo;
		}else{
			return false;
		}
		
	}

	/**
	 * 获取用户信息
	 */
	public function get_user_info($where){
		$info = db('app_user')->where($where)->find();
		if($info){
			$info['province'] =  model('tool')->get_district_name($info['province']);
			$info['city'] =  model('tool')->get_district_name($info['city']);
			$info['district	'] =  model('tool')->get_district_name($info['district']);
		}
		return $info;
	}

	/**
	 * 用户登录
	 */
	public function login($mobile,$password){
		$info = $this->get_user_info(['mobile'=>$mobile,'password'=>$password]);
		if($info){
			$rand = rand_string(6);
			$token = init_token($info['id'],$rand);
			if(!empty($token)){
				$this->updateToken($info['id'],$rand,$token);
			}
			if ($info['status']==0) {
				return 3;
			}
		}
		return $info;
	}


	/**
	 * 重置密码
	 */
	public function reset_password($mobile,$password){
		$info = $this->get_user_info(['mobile'=>$mobile]);
		if ($info) {
			$password = user_md5($password);
			$data = db('app_user')->where(['id'=>$info['id']])->update(['password'=>$password]);
			if($data){
				return 1;//修改密码成功
			}else{
				return 2;//重置密码失败  
			}
		}else{
			return 3;//账号不存在   
		}
	}

}