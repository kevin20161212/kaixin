<?php 

// +----------------------------------------------------------------------
// | 有范科技
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.youfai.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 有范科技 <youfai@youfai.cn>
// +----------------------------------------------------------------------
// | 版权申明：YFTHINK不是一个自由软件，是有范科技官方推出的商业源码，严禁在未经许可的情况下
// | 拷贝、复制、传播、使用山东有范科技的任意代码，如有违反，请立即删除，否则您将面临承担相应
// | 法律责任的风险。如果需要取得官方授权，请联系官方http://www.youfai.cn
// +----------------------------------------------------------------------

namespace app\weixin\controller;
use app\wechat\stores\service\WechatService;
use app\common\controller\Controller;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Baselogin extends controller{

	public function _initialize(){
		
		// header("Content-Type:text/html;charset=UTF-8"); 
		
		$this->appid = WechatService::getAppid();
		$this->appSecret = WechatService::getAppSecret();
		// session('wxuser',null);
		// dump(session('wxuser'));
		// die;
		// 
		if(!session('wxuser')){
		
			if($_GET['state']=='123'){
				//网页获取openid第二步，获取用户openid
			    $codeurl='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->appid.'&secret='.$this->appSecret.'&code='.$_GET['code'].'&grant_type=authorization_code';
			     
			    $resulta=$this->curlpost($codeurl);
			    // dump($resulta);die;
			    $openidarr= json_decode($resulta, true);
			   
				//第二步结束，返回数据$openidarr
			    $openid= $openidarr["openid"];
		        $where['openid']=$openid;
		        // 第三步end
		        $userlist=M('member_list')->where($where)->find();
		        $userinfourl='https://api.weixin.qq.com/sns/userinfo?access_token='.$openidarr['access_token'].'&openid='.$openid.'&lang=zh_CN';
	            $resultd=$this->curlpost($userinfourl);
	            $openidarr= json_decode($resultd, true);
		        if($userlist){
		        	$where['nickname']=$openidarr['nickname'];
		        	$where['headimgurl']=$openidarr['headimgurl'];
		        	M('member_list')->where($where)->save($data);
		            //用户以在数据库列表中，直接登录
		            session('wxuser',$userlist);
		        }else{
		            // 第四步end，将用户写入数据库，并进行登录
		            $where['openid']=$openidarr['openid'];
		            $where['nickname']=$openidarr['nickname'];
		            $where['sex']=$openidarr['sex'];
		            $where['headimgurl']=$openidarr['headimgurl'];
		            $where['address']=$openidarr['city'];
		            $where['create_time']=time();
					session('wxuser',$openidarr);
					//dump($openidarr);exit;
		            $userlist=M('member_list')->add($where);
		            $where['user_id']=$userlist;
		            session('wxuser',$where);
		            unset($where);
		        }
			   unset($userlist);
			}else{
				$url=urlencode("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

				header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$this->appid."&redirect_uri=".$url."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect");
				exit;
			}
		}

	}

	 public function curlpost($url,$data){
    // 二维码尺寸255*255
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}
?>