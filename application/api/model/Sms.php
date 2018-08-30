<?php
namespace app\api\model;
use think\Model;
/**
	 *验证码生成检测
	 * 
	 */
class Sms extends Model
{	
	
	public function auth_code($mobile,$verification_code){
		$map['mobile'] = $mobile;
		$map['code'] = $verification_code;
		$expire_time = time()-60;
		$map['create_time'] = array('>',$expire_time);
		$data = db('app_send_code')->where($map)->order('id desc')->find();
		if($data){
			db('app_send_code')->where(['id'=>$data['id']])->delete();
			return $data['code'];
		}else{
			return 1;//验证码过期
		}
	}

	/**
	 * 生成验证码
	 * @param  [type] $mobile [description]
	 * @return [type]         [description]
	 */
	public function get_code($mobile,$length = 6){
		$min = pow(10 , ($length - 1));
        $max = pow(10, $length) - 1;
        $code = rand($min, $max);
        $data = [
        	'code' => $code,
        	'mobile' => $mobile,
        	'create_time' => time(),
        ];
        $re = db('app_send_code')->insert($data);
        if($re){
        	return $code;
        }else{
        	return 1;//重新生成验证码
        }
	}
	
}