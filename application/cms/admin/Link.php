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

namespace app\Cms\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Link extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        $map['id|title'] = array(
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有配置
     
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('cms_link');
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
                ->addTopButton("delete",array('model'=>'cms/cms_link'))  // 添加删除按钮
                ->addSearchItem('keyword', 'text', '关键字','ID/标题')
                ->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "标题")
                 ->addTableColumn("thumb", "图片","picture")
                ->addTableColumn("url", "链接")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'cms/cms_link'))  // 添加删除按钮
                ->display();
    }

    public function add(){
        if (request()->isPost()) {
            $data = D("cms_link")->create();
            // dump($model_object);exit;
            if ($data) {
                if (D("cms_link")->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error(D("cms_link")->getError());
            }
        } else {
          
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "名称", "名称")
                    ->addFormItem('thumb', 'picture', '图片', '图片')
                    ->addFormItem('url', 'text', '链接', '支持http://格式或者TP的U函数解析格式')
                    ->display();
        }
    }

    public function edit($id){
        if (request()->isPost()) {
            $data = D("cms_link")->create();
           
            if ($data) {
                if (D("cms_link")->save($data)) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error(D("cms_link")->getError());
            }
        } else {
           
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem('id', 'hidden', 'ID', 'ID')
                    ->addFormItem("title", "text", "幻灯片标题", "幻灯片标题")
                    ->addFormItem('thumb', 'picture', '幻灯片图片', '切换图片')
                    ->addFormItem('url', 'text', '幻灯片链接', '支持http://格式或者TP的U函数解析格式')
                    ->setFormData(D('cms_link')->find($id))
                    ->display();
        }
    }

}