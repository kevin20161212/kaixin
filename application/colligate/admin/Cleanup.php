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

namespace app\Colligate\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Cleanup extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $map = array();
        $map['type'] = 2;
        $keyword         = I('keyword', '', 'string');
        $map['id|username|mobile']       = array('like', '%' . $keyword . '%');
        $p = $_GET["p"] ? : 1;
        $model_object = D("ColligateList");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                   ->where($map)
                   ->order("id desc")
                   ->select();
        $page = new Page(
            $model_object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
        foreach($data_list as $k=>$v){
             $data_list[$k]['nickname'] = M('member_list')->where(array('id'=>$v['uid']))->getField('nickname');
        }
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("delete",array('model'=>'colligate/colligate_list'))  // 添加删除按钮
                ->setSearch("请输入ID/姓名/手机号", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("nickname", "微信昵称")
                ->addTableColumn("username", "姓名")
                ->addTableColumn("mobile", "手机号")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'colligate/colligate_list'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("ColligateList");
            $_POST['type'] = 2;
            $data = $model_object->create(format_data());
            if ($data) {
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
            $builder->setMetaTitle("添家房东")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("uid", "choice", "微信用户", "请选择微信用户")
                    ->addFormItem("username", "text", "真实姓名", "请输入真实姓名")
                    ->addFormItem("mobile", "text", "联系电话", "请输入联系电话")
                    // ->addFormItem("title", "password", "登录密码", "请输入登录密码")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
             // 密码为空表示不修改密码
            if ($_POST['password'] === '') {
                unset($_POST['password']);
            }
            $_POST['type'] = 2;
            $model_object = D("ColligateList");
            $data = $model_object->create(format_data());
            if ($data) {
                $id = $model_object->save($data);
                if ($id !== false) {
                    $this->success("更新成功", U("index"));
                } else {
                    $this->error("更新失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            $info = D('ColligateList')->find($id);
            $info['ui']['uid'] = $info['uid'];
            $info['ui']['nickname'] =M('member_list')->where(array('id'=>$info['uid']))->getField('nickname');;
         
            unset($info['password']);
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                   ->addFormItem("ui", "choice", "微信用户", "请选择微信用户")
                    ->addFormItem("username", "text", "真实姓名", "请输入真实姓名")
                    ->addFormItem("mobile", "text", "联系电话", "请输入联系电话")
                    // ->addFormItem("title", "password", "登录密码", "请输入登录密码")
                    ->setFormData($info)
                    ->display();
        }
    }
}