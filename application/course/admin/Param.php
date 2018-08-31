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

namespace app\course\Admin;
use app\admin\controller\Admin;
use yfthink\Page;
use yfthink\Tree;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Param extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function cate() {
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        $type = I('type');
        if(!empty(I('type'))){
            $map['type'] = I('type');
        }


        $map['id|title'] = array(
            $condition,
        );
        // 获取所有配置
     
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('CourseParam');
        $data_list     = $access_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('id desc')
            ->select();
        $page = new Page(
            $access_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
        switch ($type) {
            case '1':
                $title = '课程类型';
                break;
            case '2':
                $title = '课程级别';
                break;
            case '3':
                $title = '开课类型';
                break;
            default:
                $title = '名称';
                break;
        }
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton('addnew', array('href' => U('add_cate', array('type' => $type)))) // 添加新增按钮
                ->addTopButton("delete",array('model'=>'cms/cms_article'))  // 添加删除按钮
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", $title)
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'course/course_param'))  // 添加删除按钮
                ->display();
    }


    public function edit($id){
        $data1 = D('CourseParam')->find($id);
        if (request()->isPost()) {
            $data = D("CourseParam")->create();
            if ($data) {
                if (D("CourseParam")->save($data)) {
                    $this->success('更新成功', U('cate',array('type'=>$data1['type'])));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error(D("CourseParam")->getError());
            }
        } else {
            switch ($data1['type']) {
                case '1':
                    $title = '课程类型';
                    break;
                case '2':
                    $title = '课程级别';
                    break;
                case '3':
                    $title = '开课类型';
                    break;
                default:
                    $title = '名称';
                    break;
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem('id', 'hidden', 'ID', 'ID')
                     ->addFormItem("title", "text", $title, $title)
                    ->setFormData($data1)
                    ->display();
        }
    }

   
    /**
     * 分类添加
     */
    public function add_cate(){
        $type = I('type');
        if (request()->isPost()) {
            $nav_object = D('CourseParam');
            $data       = $nav_object->create();
            if ($data) {
                $data['type'] = $type;//课程类型
                $id = $nav_object->add($data);
                if ($id) {
                    $this->success('新增成功', U('cate', array('type' => $type)));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($nav_object->getError());
            }
        } else {
            switch ($type) {
                case '1':
                    $title = '课程类型';
                    break;
                case '2':
                    $title = '课程级别';
                    break;
                case '3':
                    $title = '开课类型';
                    break;
                default:
                    $title = '名称';
                    break;
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增分类') // 设置页面标题
                ->setPostUrl(U('', array('type' => $type))) // 设置表单提交地址
                ->addFormItem('title', 'text', $title,$title)
                ->display();
        }
    }
}