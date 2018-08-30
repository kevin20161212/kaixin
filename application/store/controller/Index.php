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

namespace app\store\controller;
use app\store\controller\Store;

use app\common\controller\Controller;
use yfthink\Page;
/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Index extends Store {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $index_count['module'] = D('Admin/Module')->count();
        $index_count['addon']  = D('Admin/Addon')->count();
        $index_count['users']  = D('Admin/User')->count();

        // 查询今天注册用户
        $start_date         = strtotime(date('Y-m-d', time())); //今天
        $end_date           = $start_date + 86400;
        $map['create_time'] = array(
            array('egt', $start_date),
            array('lt', $end_date),
        );
        $index_count['today'] = D('Admin/User')->where($map)->count();

        // 查询实时在线用户
        $con                   = array();
        $con['update_time']    = array('gt', time() - 180);
        $con['uid']            = array('gt', 0);
        $index_count['online'] = M('admin_session')->where($con)->count();
        // 模板赋值
        $this->assign('index_count', $index_count);
        $this->assign('meta_title', "首页");
        $this->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("topic_category");
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
                    ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("topic_category");
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
                     ->addFormItem("title", "text", "分类名称", "分类名称")
                    ->setFormData(D("topic_category")->find($id))
                    ->display();
        }
    }
}