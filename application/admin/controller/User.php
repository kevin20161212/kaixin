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
namespace app\admin\controller;

use yfthink\Page;

/**
 * 用户控制器
 * @author <youfai@youfai.cn>
 */
class User extends Admin
{
    /**
     * 用户列表
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
        // 搜索
        $keyword                                  = I('keyword', '', 'string');
        $condition                                = array('like', '%' . $keyword . '%');
        $map['id|username|nickname|email|mobile'] = array(
            $condition,
            $condition,
            $condition,
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有用户
        $map['status'] = array('egt', '0'); // 禁用和正常状态
        $map['is_success'] = 0;
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $user_object   = D('User');
        $data_list     = $user_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('id desc')
            ->select();
        $page = new Page(
            $user_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
         $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('user/del', array('id' => '__data_id__','modal'=>'user'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('用户列表') // 设置页面标题
            ->addTopButton('addnew') // 添加新增按钮
            // ->addTopButton('resume') // 添加启用按钮
            // ->addTopButton('forbid') // 添加禁用按钮
            // ->addTopButton('delete') // 添加删除按钮
            ->setSearch('请输入ID/用户名／邮箱／手机号', U('index'))
            ->addTableColumn('id', 'UID')
            ->addTableColumn('avatar', '头像', 'picture')
            ->addTableColumn('nickname', '昵称')
            ->addTableColumn('username', '用户名')
            ->addTableColumn('email', '邮箱')
            ->addTableColumn('mobile', '手机号')
            ->addTableColumn('create_time', '注册时间', 'time')
            ->addTableColumn('status', '状态', 'status')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($data_list) // 数据列表
            ->setTableDataPage($page->show()) // 数据列表分页
            ->addRightButton('edit') // 添加编辑按钮
            // ->addRightButton('forbid') // 添加禁用/启用按钮
             ->addRightButton("self",$attr) 
            ->display();
    }
     public function del(){
        $id = I('id');
        $res = D('User')->where(array('id'=>$id))->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    /**
     * 新增用户
     * @author <youfai@youfai.cn>
     */
    public function add()
    {
        if (request()->isPost()) {
            $user_object = D('User');
            $data        = $user_object->create();
            if ($data) {
                $id = $user_object->add($data);
                if ($id) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($user_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增用户') //设置页面标题
                ->setPostUrl(U('add')) //设置表单提交地址
                ->addFormItem('reg_type', 'hidden', '注册方式', '注册方式')
                ->addFormItem('nickname', 'text', '昵称', '昵称')
                ->addFormItem('username', 'text', '用户名', '用户名')
                ->addFormItem('password', 'password', '密码', '密码')
                ->addFormItem('email', 'text', '邮箱', '邮箱')
                ->addFormItem('email_bind', 'radio', '邮箱绑定', '手机绑定', array('1' => '已绑定', '0' => '未绑定'))
                ->addFormItem('mobile', 'text', '手机号', '手机号')
                ->addFormItem('mobile_bind', 'radio', '手机绑定', '手机绑定', array('1' => '已绑定', '0' => '未绑定'))
                ->addFormItem('avatar', 'picture', '头像', '头像')
                ->setFormData(array('reg_type' => 'admin'))
                ->display();
        }
    }

    /**
     * 编辑用户
     * @author <youfai@youfai.cn>
     */
    public function edit($id)
    {
        if (request()->isPost()) {
            // 密码为空表示不修改密码
            if ($_POST['password'] === '') {
                unset($_POST['password']);
            }

            // 是否禁止修改超级管理员帐号
            if (FORBID_EDIT_ADMIN_PWD === true && $id === '1' && $_POST['password']) {
                $this->error('不允许修改超级管理员密码');
            }

            // 提交数据
            $user_object = D('User');
            $data        = $user_object->create();
            if ($data) {
                $result = $user_object
                    ->field('id,nickname,username,password,email,email_bind,mobile,mobile_bind,gender,avatar,update_time')
                    ->save($data);
                if ($result) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败', $user_object->getError());
                }
            } else {
                $this->error($user_object->getError());
            }
        } else {
            // 获取账号信息
            $info = D('User')->find($id);
            unset($info['password']);

            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('编辑用户') // 设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->addFormItem('nickname', 'text', '昵称', '昵称')
                ->addFormItem('username', 'text', '用户名', '用户名')
                ->addFormItem('password', 'password', '密码', '密码')
                ->addFormItem('email', 'text', '邮箱', '邮箱')
                ->addFormItem('email_bind', 'radio', '邮箱绑定', '手机绑定', array('1' => '已绑定', '0' => '未绑定'))
                ->addFormItem('mobile', 'text', '手机号', '手机号')
                ->addFormItem('mobile_bind', 'radio', '手机绑定', '手机绑定', array('1' => '已绑定', '0' => '未绑定'))
                ->addFormItem('avatar', 'picture', '头像', '头像')
                ->setFormData($info)
                ->display();
        }
    }

    /**
     * 设置一条或者多条数据的状态
     * @author <youfai@youfai.cn>
     */
    public function setStatus($model = '', $strict = null)
    {
        if ('' == $model) {
            $model = request()->controller();
        }
        $ids = I('request.ids');
        if (is_array($ids)) {
            if (in_array('1', $ids)) {
                $this->error('超级管理员不允许操作');
            }
        } else {
            if ($ids === '1') {
                $this->error('超级管理员不允许操作');
            }
        }
        parent::setStatus($model);
    }
}
