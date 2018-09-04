<?php

namespace app\api\controller;
use think\Controller;

class Base extends  Controller
{
    public function _initialize()
    {   
        $this->token = input("token", '');
        if($this->token) {
			$userinfo = getUserInfo($this->token);//解析令牌
			if($userinfo){
				$this->uid = intval($userinfo['uid']);
			}
		}
    }

    public function get_error($msg){
        return json(['code'=>0,'msg'=>$msg]);
    }

    public function get_success($msg){
        return json(['code'=>1,'msg'=>$msg]);
    }

    public function data($data,$code,$msg){
        return json(['data'=>$data,'code'=>$code,'msg'=>$msg]);
    }
}