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

namespace app\Merchant\store;
use app\store\controller\Store;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Teacher extends Store {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $map = array();
        $keyword         = I('keyword', '', 'string');
        $map['id|teach_name']       = array('like', '%' . $keyword . '%');
        $map['merch_id'] = $this->merch_id;
        $p = $_GET["p"] ? : 1;
        $model_object = D("AppUser");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                    ->where($map)
                   ->order("id desc")
                   ->select();
     
        $page = new Page(
           M('AppUser')->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
       
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->setSearch("请输入ID/分类", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("teach_name", "教师名")
                ->addTableColumn("mobile", "电话")
                ->addTableColumn("email", "邮箱")
                ->addTableColumn("create_time", "创建时间", "time")
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
            $merch_id = $this->merch_id;
            $info = db('app_user')->where(['mobile'=>$_POST['mobile']])->find();
            if($info){
                $re = db('app_user')->where(['id'=>$info['id']])->update(['type'=>2,'merch_id'=>$merch_id,'teach_name'=>$_POST['teach_name'],'des'=>$_POST['des']]);
                if($re){
                    $this->success("绑定成功", U("index"));
                }
            }else{
                $model_object = D("AppUser");
                $data = $model_object->create(format_data());
                if ($data) {
                    $data['merch_id'] = $merch_id;
                    $data['user_name'] = $data['mobile'];
                    $data['nikname'] = $data['mobile'];
                    $data['password'] = user_md5($data['password']);
                    //dump($data);exit;
                    $id = $model_object->add($data);
                    if ($id) {
                        $this->success("新增成功", U("index"));
                    } else {
                        $this->error("新增失败".$model_object->getError());
                    }
                } else {
                    $this->error($model_object->getError());
                }
            }
        } else {
            
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))
                    ->addFormItem("teach_name", "text", "教师名", "教师名")
                    ->addFormItem("password", "password", "密码", "密码")
                    // ->addFormItem('avatar',"picture",'头像','头像')
                    ->addFormItem('mobile',"text",'电话','电话')
                    // ->addFormItem('email',"text",'邮箱','邮箱')
                    ->addFormItem("des", 'textarea',"介绍","介绍")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $re = db('app_user')->where(['id'=>$id])->update(['teach_name'=>$_POST['teach_name'],'des'=>$_POST['des']]);
            if($re){
                $this->success("修改成功", U("index"));
            }else{
                $this->error("修改失败", U("/"));
            }
            // $data = db('app_user')->where(['id'=>$id])->update(['teach_name'=>$_POST['teach_name'],'des'=>$_POST['des']]);
            // dump($data);exit;
            // if ($data) {
            //     //dump($data);exit;
            //     $id = $model_object->save($data);
            //     if ($id !== false) {
            //         $this->success("更新成功", U("index"));
            //     } else {
            //         $this->error("更新失败".$model_object->getError());
            //     }
            //} 
            // else {
            //     $this->error($model_object->getError());
            // }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("teach_name", "text", "教师名", "教师名")
                    ->addFormItem("mobile", "hidden", "密码", "密码")
                    ->addFormItem("password", "password", "密码", "密码")
                    ->addFormItem("des", 'textarea',"介绍","介绍")
                    ->setFormData(D("AppUser")->find($id))
                    ->display();
        }
    }
}