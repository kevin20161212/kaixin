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

namespace app\Workman\Controller;
use app\weixin\controller\Baselogin;
// use app\common\controller\Controller;
use yfthink\Page;
use think\worker\Server;
/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Index extends Baselogin{
    
   public function kefu(){
   		$user = session('wxuser');
         // dump($user);die;
   		$member = array(
   			'nickname' => $user['nickname'],
   			'avatar'=>$user['headimgurl'],
   			'id'=>$user['id']
   		);

         // dump($member);die;
   	// dump(session('wxuser'));die;
   		$this->assign('member',$member);
   		$this->display();
   }

   public function index(){
   	$this->display();
   }


   public function indexs(){
      $user = session('wxuser');
      $this->assign([
            'id' => $user['id'],
            'name' =>$user['nickname'],
            'group' => 1,
            'avatar' => $user['headimgurl'],
        ]);
   	$this->display();
   }
}