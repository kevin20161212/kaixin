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
 * 管理员控制器
 * @author <youfai@youfai.cn>
 */
class Fenxiao extends Admin
{
    /**
     * 管理员列表
     * @param $tab 配置分组ID
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
       
        // 搜索
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        $map['id|uid'] = array(
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有配置
        // 
        $map['status'] = array('egt', '0'); // 禁用和正常状态
        $map['is_success'] = 1;
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('Access');
        $data_list     = $access_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('sort asc,id asc')
            ->select();
        $page = new Page(
            $access_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
            $time = date('Ymd',time());
        // 设置Tab导航数据列表
        $group_object = D('Group');
        $user_object  = D('User');
        foreach ($data_list as $key => &$val) {
            $val['nickname']    = $user_object->getFieldById($val['uid'], 'nickname');
            $val['username']    = $user_object->getFieldById($val['uid'], 'username');
            $val['group_title'] = $group_object->getFieldById($val['group'], 'title');
            $val['mobile'] = $user_object->getFieldById($val['uid'], 'mobile');
            $nian = $user_object->getFieldById($val['uid'], 'nian');
            $day = $nian*365;
             $san = $day - 2;
             $er = $day -1;
            $dt = date('Y',$val['create_time']);
            if($time == date('Ymd',strtotime("$dt+$san day"))){
                $val['daoqi_time'] = '<span style="color:red;">还有3天到期，请及时联系</span>';
            }else if($time == date('Ymd',strtotime("$dt+$er day"))){
                $val['daoqi_time'] = '<span style="color:red;">还有2天到期，请及时联系</span>';
            }else if($time == date('Ymd',strtotime("$dt+$day day"))){
                $val['daoqi_time'] = '<span style="color:red;">还有1天到期，请及时联系</span>';
            }else if($time >= date('Ymd',strtotime("$dt+$nian year"))){
                 $val['daoqi_time'] = '<span style="color:red;">已到期，请及时联系</span>';
            }else{
                $val['daoqi_time'] = date('Y-m-d H:i',strtotime("$dt+$nian year"));
            }
           
           
        }

        // dump($data_list);die;
        $right_button['no']['title']     = '超级管理员无需操作';
        $right_button['no']['attribute'] = 'class="label label-warning" href="#"';
        $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('fenxiao/del', array('id' => '__data_id__','modal'=>'fenxiao'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('管理员列表') // 设置页面标题
            ->addTopButton('addnew') // 添加新增按钮
            // ->addTopButton('resume') // 添加启用按钮
            // ->addTopButton('forbid') // 添加禁用按钮
            // ->addTopButton('delete') // 添加删除按钮
            ->setSearch('请输入ID/分校名称', U('index'))
            ->addTableColumn('id', 'ID')
            ->addTableColumn('nickname', '分校名称')
            ->addTableColumn('username', '登录账号')
            ->addTableColumn('mobile', '手机号')
            ->addTableColumn('create_time', '创建时间','time')
            ->addTableColumn('daoqi_time', '到期时间')
            ->addTableColumn('status', '状态', 'status')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($data_list) // 数据列表
            ->setTableDataPage($page->show()) // 数据列表分页
            ->addRightButton('edit') // 添加编辑按钮
            // ->addRightButton('forbid') // 添加禁用/启用按钮
            ->addRightButton("self",$attr) 
            ->alterTableData( // 修改列表数据
                array('key' => 'id', 'value' => '1'),
                array('right_button' => $right_button)
            )
            ->display();
    }
    public function del(){
        $id = I('id');
        $uid =  D('Access')->where(array('id'=>$id))->getField('uid');
                D('user')->where(array('id'=>$uid))->delete();
        $res = D('Access')->where(array('id'=>$id))->delete();
       
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    /**
     * 新增
     * @author <youfai@youfai.cn>
     */
    public function add()
    {
        if (request()->isPost()) {

            $user_object = D('User');
            $data        = $user_object->create();

            if ($data) {
                $data['is_success'] = 1;
                $id = $user_object->add($data);
                if ($id) {
                    $res['uid'] = $id;
                    $res['group'] = 6;
                    $res['create_time'] = time();
                    $res['status'] = 1;
                    $res['is_success'] = 1;
                    M('admin_access')->add($res);
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
                ->addFormItem('nickname', 'text', '分校名称', '分校名称')
                ->addFormItem('username', 'text', '登录账号', '登录账号')
                ->addFormItem('password', 'password', '密码', '密码')
                ->addFormItem('mobile', 'text', '手机号', '手机号')
                ->addFormItem('nian', 'text', '有效期', '默认有效期为1年')
                ->addFormItem('avatar', 'picture', '头像', '头像')
                ->setFormData(array('reg_type' => 'admin'))
                ->display();
        }
    }

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
                $id = $user_object->save($data);
                if ($id) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败', $user_object->getError());
                }
            } else {
                $this->error($user_object->getError());
            }
        } else {
            // 获取账号信息
             $uid =  D('Access')->where(array('id'=>$id))->getField('uid');
            $info = D('User')->find($uid);
            unset($info['password']);

            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('编辑用户') // 设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
               ->addFormItem('nickname', 'text', '分校名称', '分校名称')
                ->addFormItem('username', 'text', '登录账号', '登录账号')
                ->addFormItem('password', 'password', '密码', '密码')
                ->addFormItem('mobile', 'text', '手机号', '手机号')
                ->addFormItem('nian', 'text', '有效期', '默认有效期为1年')
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
