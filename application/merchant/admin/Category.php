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

namespace app\cms\Admin;
use app\admin\controller\Admin;
/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Category extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $data_list=D('CmsCategory')->treelists();
      
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                // ->addTopButton("resume",array('model'=>'cms/cms_category'))  // 添加启用按钮
                // ->addTopButton("forbid",array('model'=>'cms/cms_category'))  // 添加禁用按钮
                ->addTopButton("delete",array('model'=>'cms/cms_category'))  // 添加删除按钮
                ->addTableColumn("id", "ID")
                ->addTableColumn("title_show", "标题")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("sort", "排序")
                ->addTableColumn("status", "状态", "status")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list) // 数据列表
                ->addRightButton("edit")           // 添加编辑按钮
                //->addRightButton("forbid",array('model'=>'cms/cms_category'))  // 添加禁用/启用按钮
                ->addRightButton("delete",array('model'=>'cms/cms_category'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $data = D("CmsCategory")->editcat(false);
            // dump($model_object);exit;
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            $data_list=D('CmsCategory')->treelists();
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem('pid', 'select', '上级分类', '上级分类', $datalist)
                    ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->addFormItem('thumb', 'picture', '图片', '切换图片')
                    ->addFormItem('description', 'textarea', '分类描述', '分类描述')
                    ->addFormItem('advurl', 'text', '外链URL地址', '支持http://格式或者TP的U函数解析格式')
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $data = D("CmsCategory")->editcat(true);
            if ($data) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败");
            }
        } else {
            $data_list=D('CmsCategory')->treelists();
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("修改")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('pid', 'select', '上级分类', '上级分类', $datalist)
                    ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->addFormItem('thumb', 'picture', '图片', '切换图片')
                    ->addFormItem('description', 'textarea', '分类描述', '分类描述')
                    ->addFormItem('advurl', 'text', '外链URL地址', '支持http://格式或者TP的U函数解析格式')
                    ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                    ->setFormData(D("CmsCategory")->find($id))
                    ->display();
        }
    }
}