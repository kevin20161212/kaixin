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

namespace app\Topic\Admin;
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
       
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("delete",array('model'=>'cms/cms_article'))  // 添加删除按钮
                ->addSearchItem('pid', 'select', '分类' ,'分类', $data)
                ->addSearchItem('keyword', 'text', '关键字','ID/文章标题')
                ->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("thumb", "图片","picture")
                ->addTableColumn("pid", "分类")
                ->addTableColumn("title", "文章标题")
                ->addTableColumn("laiyuan", "来源")
                ->addTableColumn("zuoze", "作者")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList()     // 数据列表
                ->setTableDataPage()  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'cms/cms_article'))  // 添加删除按钮
                ->display();
    }

}