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

namespace app\Topic\Store;
// use app\admin\controller\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Teacher extends Admin {

	public function index(){
                 //搜索
                $keyword         = I('keyword', '', 'string');
                $condition       = array('like', '%' . $keyword . '%');
                $map['id|username|mobile'] = array(
                    $condition,
                    $condition,
                    '_multi' => true,
                );
                $map['uid'] = is_login();
                $user_object   = D('Teacher');
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
                $attr['href']  = U('teacher/del', array('id' => '__data_id__','modal'=>'teacher'));
        	$builder = new \yfthink\builder\ListBuilder();
                $builder->setMetaTitle('教师列表') // 设置页面标题
                    ->addTopButton('addnew', array('href' => U('add'))) // 添加新增按钮
                    // ->setSearch('请输入ID/姓名/手机号码', U('index'))
                    ->setTabNav($tab_list, $group) // 设置页面Tab导航
                    ->addTableColumn('id', 'ID')
                    ->addTableColumn('username', '姓名')
                    ->addTableColumn('mobile', '手机号')
                    ->addTableColumn('create_time', '添加时间', 'time')
                    ->addTableColumn('right_button', '操作', 'btn')
                    ->setTableDataList($data_list) // 数据列表
                    ->setTableDataPage($page->show()) // 数据列表分页
                    ->addRightButton('edit') // 添加编辑按钮
                    ->addRightButton("self",$attr) 
                    ->display();
	}
        public function del(){
                $id = I('id');
                $res = D('Teacher')->where(array('id'=>$id))->delete();
                if($res){
                    $this->success('删除成功');
                }else{
                    $this->error('删除失败');
                }
        }


	public function add(){
                if (request()->isPost()) {
                    $model_object = D("Teacher");
                    $data = $model_object->create(format_data());
                    
                    
                    if ($data) {
                        $data['uid'] = is_login();
                       
                        $id = $model_object->add($data);
                        if ($id) {
                            $this->success("新增成功", U("index"));
                        } else {
                            $this->error("新增失败".$model_object->getError());
                        }
                    } else {
                        $this->error($model_object->getError());
                    }
                } else {
                    // 使用FormBuilder快速建立表单页面
                    $builder = new \yfthink\builder\FormBuilder();
                    $builder->setMetaTitle("新增")  // 设置页面标题
                            ->setPostUrl(U("add"))      // 设置表单提交地址
                            ->addFormItem("username", "text", "姓名", "姓名")
                            ->addFormItem("mobile", "text", "手机号码", "用户登录账号")
                            ->addFormItem("password", "text", "登录密码", "登录密码")
                            ->addFormItem('sex', 'radio', '性别', '性别', array('0' => '男', '1' => '女'))
                            ->display();
                }
	}

	public function edit($id){
                if (request()->isPost()) {
                      // 密码为空表示不修改密码
                    if ($_POST['password'] === '') {
                        unset($_POST['password']);
                    }

                   
                    // 提交数据
                    $user_object = D('Teacher');
                    $data        = $user_object->create();
                    if ($data) {        
                        $result = $user_object
                            ->field('id,username,password,mobile,sex')
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
                        $info = D('Teacher')->find($id);
                        unset($info['password']);
                        // 使用FormBuilder快速建立表单页面
                        $builder = new \yfthink\builder\FormBuilder();
                        $builder->setMetaTitle("编辑")  // 设置页面标题
                            ->setPostUrl(U("edit"))      // 设置表单提交地址
                            ->addFormItem('id', 'hidden', 'ID', 'ID')
                            ->addFormItem("username", "text", "姓名", "姓名")
                            ->addFormItem("mobile", "text", "手机号码", "用户登录账号")
                            ->addFormItem("password", "text", "登录密码", "登录密码")
                            ->addFormItem('sex', 'radio', '性别', '性别', array('0' => '男', '1' => '女'))
                             ->setFormData($info)
                            ->display();
                }
	}

}