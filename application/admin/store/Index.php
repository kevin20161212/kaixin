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

namespace app\Admin\Store;
// use app\admin\controller\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Index extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {

       
        // // dump();
        // 获取列表
        $map = array();
        $map["status"] = array("egt", "0");  // 禁用和正常状态
        $p = $_GET["p"] ? : 1;
        $model_object = D("Index");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                   ->where($map)
                   ->order("sort desc,id desc")
                   ->select();
        $page = new Page(
            $model_object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );

        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("resume")  // 添加启用按钮
                ->addTopButton("forbid")  // 添加禁用按钮
                ->setSearch("请输入ID/标题", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "标题")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("sort", "排序")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid")  // 添加禁用/启用按钮
                ->addRightButton("delete")  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("Index");
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
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "标题", "标题")
                    ->addFormItem("content", "kindeditor", "内容", "内容")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("Index");
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
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "标题", "标题")
                    ->addFormItem("content", "kindeditor", "内容", "内容")
                    ->addFormItem("sort", "num", "排序", "用于显示的顺序")
                    ->setFormData(D("Index")->find($id))
                    ->display();
        }
    }
}