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

namespace app\merchant\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Teacher extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        $map['id|name'] = array(
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有配置
     
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('merchant_teacher');
        $data_list     = $access_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('id desc')
            ->select();
        $page = new Page(
            $access_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("delete",array('model'=>'Merchant/merchant_teacher'))  // 添加删除按钮
                //->addSearchItem('keyword', 'text', '关键字','ID/标题')
                //->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("name", "姓名")
                ->addTableColumn("mobile", "电话")
                ->addTableColumn("create_time", "创建时间")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'Merchant/merchant_teacher'))  // 添加删除按钮
                ->display();
    }

    public function add(){
        if (request()->isPost()) {
            $data = D("merchant_teacher")->create();
            dump(session('user_auth'));
            dump($data);exit;
            if ($data) {
                if (D("merchant_teacher")->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error(D("cms_notice")->getError());
            }
        } else {
          
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("name", "text", "教师名", "教师名")
                    ->addFormItem('avatar',"picture",'头像','头像')
                    ->addFormItem('mobile',"text",'电话','电话')
                    ->addFormItem('email',"text",'邮箱','邮箱')
                    ->addFormItem("des", 'textarea',"介绍","介绍")
                    //->addFormItem('create_time', 'date', '时间', '时间')
                    ->display();
        }
    }

    public function edit($id){
        if (request()->isPost()) {
            $data = D("cms_apply")->create();
           
            if ($data) {
                if (D("cms_apply")->save($data)) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error(D("cms_apply")->getError());
            }
        } else {
           
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem('id', 'hidden', 'ID', 'ID')
                    ->addFormItem("name", "text", "姓名", "姓名")
                    ->addFormItem('mobile',"text",'电话','电话')
                    ->addFormItem('create_time', 'date', '时间', '时间')
                    ->setFormData(D('cms_apply')->find($id))
                    ->display();
        }
    }

}