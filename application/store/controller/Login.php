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
namespace app\store\controller;

use app\common\controller\Controller;
use yfthink\Verify;

/**
 * 后台唯一不需要权限验证的控制器
 * @author <youfai@youfai.cn>
 */
class Login extends Controller
{
    /**
     * 后台登陆
     * @author <youfai@youfai.cn>
     */
    public function login()
    {
        if (is_login()) {
            $this->redirect('Store/Index/index');
        }
        if (request()->isPost()) {
            $username = I('username');
            $password = I('password');

            // 验证用户名密码是否正确
            $user_object = D('Store/Member');
            $user_info   = $user_object->login($username, $password);
            if (!$user_info) {
                $this->error($user_object->getError());
            }

            // 验证管理员表里是否有该用户
            $account_object = D('Store/Access');
            $where['uid']   = $user_info['id'];
            $account_info   = $account_object->where($where)->find();
            if (!$account_info) {
                $this->error('该用户没有管理员权限' . $account_object->getError());
            }

            // 设置登录状态
            $uid = $user_object->auto_login($user_info);

            // 跳转
            if (0 < $account_info['uid'] && $account_info['uid'] === $uid) {
                $this->success('登录成功！', U('Store/Index/index'));
            } else {
                $this->logout();
            }
        } else {
            
            $this->assign('meta_title', '管理员登录');
            $this->display();
        }
    }

    /**
     * 注销
     * @author <youfai@youfai.cn>
     */
    public function logout()
    {
        session('user_auth', null);
        session('user_auth_sign', null);
        $this->success('退出成功！', U('login'));
    }

    /**
     * 图片验证码生成，用于登录和注册
     * @author <youfai@youfai.cn>
     */
    public function verify($vid = 1)
    {
        $verify         = new Verify();
        $verify->length = 4;
        $verify->entry($vid);
    }

    /**
     * 检测验证码
     * @param  integer $id 验证码ID
     * @return boolean 检测结果
     */
    protected function checkVerify($code, $vid = 1)
    {
        $verify = new Verify();
        return $verify->check($code, $vid);
    }
}
