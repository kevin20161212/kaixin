<?php

namespace app\api\controller;
use think\Controller;

class Base extends  Controller
{   
    public $uid;
    public $userinfo;
    public $is_check = array();
    public $controller;
    public $action;
    public function _initialize()
    {   
        $private_key=file_get_contents($_SERVER['HTTP_HOST']."/rsa_private_key.pem");
        dump($private_key);exit;
        $hex_encrypt_data = trim($_POST['password']); //十六进制数据
        $encrypt_data = pack("H*", $hex_encrypt_data);//对十六进制
        openssl_private_decrypt($encrypt_data, $decrypt_data, $private_key);
        $time = input('param.time');
        $sign = input('param.sign');
        $signature = md5(C('signature').$time);
        //dump($signature);exit;
        $this->controller = request()->controller();
        $this->controller = request()->action();
        if($signature != $sign){
            json(array("code"=>"0","msg"=>"请求不合法"))->send();
            exit();
        }
        if(($time/100) < time()-180){
            json(array("code"=>"0","msg"=>"网络请求超时！"))->send();
            exit();
        }
        $this->token = input("token", '');
        if($this->token) {
			$userinfo = getUserInfo($this->token);//解析令牌
			if($userinfo){
				$this->uid = intval($userinfo['uid']);
                $this->userinfo = $userinfo;
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