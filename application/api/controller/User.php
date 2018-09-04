<?php

namespace app\api\controller;
/**
 * 用户类
 */
class User extends Base{
	
	/**
	 * 用户注册
	 * @return [type] [description]
	 */
	public function register(){
		$mobile = input('mobile',0);
		$verification_code = input('verification_code','');
		$password = input('password','');
		$password_again = input('password_again','');
		if(!is_mobile($mobile)){
			return $this->get_error('请输入正确手机号码');
		}
		if(!$password){
			return $this->get_error('请输入正确密码');
		}
		if($password != $password_again){
			return $this->get_error('两次密码不一致');
		}
		if(!$verification_code){
			return $this->get_error('请输入验证码');
		}
		$result = model('sms')->auth_code($mobile,$verification_code);
	 	if($result == 1) return $this->get_error('验证码过期');
		$result = model('user')->user_register($mobile,$password);
		
		if($result){
			if($result == 2){
				return $this->data([],4,'手机号已注册');
			}else{
				return $this->data($result,1,'注册成功');
			}
		}else{
			return $this->get_error('注册失败');
		}
	}


	/**
	 * 用户登录
	 */
	public function login(){
		$mobile = input('mobile');
		$password = input('password');
		if(!$mobile){
			return $this->get_error('请输入账号');
		}
		if(!$password){
			return $this->get_error('请输入正确密码');
		}else{
			$info = model('user')->get_user_info(['mobile'=>$mobile]);
			if($info){
				if(user_md5($password)!=$info['password']){
					return $this->get_error('密码错误');
			    }
			}else{
				return $this->data([],2,'该账号还未注册,请选注册');
			}
		}
		$result = model('user')->login($mobile,user_md5($password));
		if($result){
			if($result == 3){
				return $this->get_error('用户被禁用');
			}
			return $this->data($result,1,'登录成功');
		}else{
			return $this->get_error('登录失败');
		}
	}
	

	/**
	 * 重置密码
	 */
	public function reset_password(){
		$mobile = input('mobile','');
		$verification_code = input('verification_code','');
		$password = input('password','');
		$password_again = input('password_again','');
		if(!is_mobile($mobile)){
			return $this->get_error('请输入正确手机号码');
		}
		if(!$password){
			return $this->get_error('请输入正确密码');
		}
		if($password != $password_again){
			return $this->get_error('两次密码不一致');
		}
		if(!$verification_code){
			return $this->get_error('请输入验证码');
		}
		$result = model('sms')->auth_code($mobile,$verification_code);
	 	if($result == 1) return $this->get_error('验证码过期');
		$data = model('user')->reset_password($mobile,$password);
		switch ($data) {
			case '1':
			  return $this->get_success('重置密码成功');
			break;
			case '2':
			  return $this->get_error('重置密码失败');
			break;
			case '3':
			  return $this->get_error('该账户不存在');
			break;
			default:
			break;
		}
		
	}
}