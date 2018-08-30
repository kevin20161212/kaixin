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
class Coupon extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {

        // $label = D('room/room_label')->select();
        // $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        // foreach($letter as $k=>$v){
        //     $letters[$v]= D('room/room_label')->where(array('letter'=>$v))->field('id,title')->select();
        // }
        // // dump($letters);die;
        // dump(array_filter($letters));die;
        




        // 获取列表
        $map = array();
        $keyword         = I('keyword', '', 'string');
        $map['id|title']       = array('like', '%' . $keyword . '%');
        $p = $_GET["p"] ? : 1;
        $model_object = D("colligate_coupon");
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
            if($v['type'] == 1){
                $data_list[$k]['type'] = '<a class="btn btn-info btn-xs">满减</a>';
                $data_list[$k]['miaoshu'] = '<a class="btn btn-danger btn-xs">满'.$v['mj_price'].'减'.$v['mj_hui'].'元</a>';
            }else{
                $data_list[$k]['type'] = '<a class="btn btn-success btn-xs">折扣</a>';
                $data_list[$k]['miaoshu'] = '<a class="btn btn-danger btn-xs">购买享'.$v['zhekou'].'折</a>';
            }
            
        }


        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton('resume',array('model'=>'colligate/colligate_coupon')) // 添加启用按钮
                ->addTopButton('forbid',array('model'=>'colligate/colligate_coupon')) // 添加禁用按钮
                ->addTopButton("delete",array('model'=>'colligate/colligate_coupon'))  // 添加删除按钮
                ->setSearch("请输入ID/优惠券名称", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "优惠券名称")
                ->addTableColumn("type", "优惠券类型")
                ->addTableColumn("miaoshu", "描述")
                ->addTableColumn("create_time", "开始时间", "time")
                ->addTableColumn("datetime", "到期时间", "time")
                ->addTableColumn("status", "状态",'status')
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton('forbid',array('model'=>'colligate/colligate_coupon')) // 添加禁用/启用按钮
                ->addRightButton("delete",array('model'=>'colligate/colligate_coupon'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("colligate_coupon");
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
                    ->addFormItem("title", "text", "优惠券名称", "请输入优惠券名称")
                    ->addFormItem("type", "coupon", "优惠券类型", "",array('1'=>'满减','2'=>'折扣'))
                    ->addFormItem("datetime", "datetime", "到期时间")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            
            $model_object = D("colligate_coupon");
            $data = $model_object->create(format_data());
            // dump($data);die;
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
            $info = D('colligate_coupon')->find($id);
            $data['info']['type'] = $info['type'];
            $data['info'] = $info;
            $data['title'] = $info['title'];
            $data['id'] = $info['id'];
            $data['datetime'] = $info['datetime'];
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "优惠券名称", "请输入优惠券名称")
                    ->addFormItem("info", "coupon", "优惠券类型", "",array('1'=>'满减','2'=>'折扣'))
                    ->addFormItem("datetime", "datetime", "到期时间")
                    ->setFormData($data)
                    ->display();
        }
    }
}