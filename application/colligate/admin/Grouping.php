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
class Grouping extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $map = array();
        $keyword         = I('keyword', '', 'string');
        $map['id|title']       = array('like', '%' . $keyword . '%');
        $p = $_GET["p"] ? : 1;
        $model_object = D("Colligate_grouping");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                   ->where($map)
                   ->order("id desc")
                   ->select();
        $page = new Page(
            $model_object->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
       
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("delete",array('model'=>'colligate/Colligate_grouping'))  // 添加删除按钮
                ->setSearch("请输入ID/分组名称", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "分组名称")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'colligate/Colligate_grouping'))  // 添加删除按钮
                ->display();
    }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("Colligate_grouping");
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
            $list = D("colligate_list")->order('id desc')->select();
            foreach($list as $k=>$v){ 
                if($v['type']==1){
                    $zongguan[$v['id']] = $v['username'];
                }else if($v['type']==2){
                    $baojie[$v['id']] = $v['username'];
                }else if($v['type']==3){
                    $weixiu[$v['id']] = $v['username'];
                }else if($v['type']==4){
                    $kefu[$v['id']] = $v['username'];
                }
            }
            
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("添加")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "分组名称", "请输入分组名称")
                    ->addFormItem("zongguan", "checkbox", "总管列表", '', $zongguan)
                    ->addFormItem("baojie", "checkbox", "保洁列表", '', $baojie)
                    ->addFormItem("weixiu", "checkbox", "维修列表", '',$weixiu)
                    ->addFormItem("kefu", "checkbox", "客服列表", '',$kefu)
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
           
            $model_object = D("Colligate_grouping");
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
           $list = D("colligate_list")->order('id desc')->select();
            foreach($list as $k=>$v){ 
                if($v['type']==1){
                    $zongguan[$v['id']] = $v['username'];
                }else if($v['type']==2){
                    $baojie[$v['id']] = $v['username'];
                }else if($v['type']==3){
                    $weixiu[$v['id']] = $v['username'];
                }else if($v['type']==4){
                    $kefu[$v['id']] = $v['username'];
                }
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "分组名称", "请输入分组名称")
                    ->addFormItem("zongguan", "checkbox", "总管列表", '', $zongguan)
                    ->addFormItem("baojie", "checkbox", "保洁列表", '', $baojie)
                    ->addFormItem("weixiu", "checkbox", "维修列表", '',$weixiu)
                    ->addFormItem("kefu", "checkbox", "客服列表", '',$kefu)
                    ->setFormData(D('Colligate_grouping')->find($id))
                    ->display();
        }
    }
    public function order(){
         $data = array();
        $res = D('room/room_list')->field('dateprice')->select();
        foreach($res as $k=>$v){
            $res[$k]['dateprice'] = json_decode($v['dateprice'],true);
           
            // dump($k);
             // unset($k);
        }
        foreach($res as $ks=>$vs){
            foreach($vs['dateprice'] as $kk=>$cc){
               foreach($cc as $kv=>$vv){
                foreach($vv as $bb => $dd){
                    $data[$ks][$kk][] = array_merge(array('time'=>$kk.$kv.$bb,'type'=>$dd['type'],'total'=>$dd['total']));
                }
               }
            }
        }

        
        dump($data);die;
    }

    


    
}