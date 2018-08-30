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

namespace app\merchant\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class User extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        if(!empty(I('pid'))){
            $map['pid'] = I('pid');
        }


        $map['id|nikname'] = array(
            $condition,
        );
    
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('AppUser');
        $data_list     = $access_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('id desc')
            ->select();
        $page = new Page(
            $access_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
        $attr['name']  = '查看';
        $attr['title'] = '查看';
        $attr['class'] = 'label label-primary-outline label-pill';
        $attr['href']  = U('audit', array('id' => '__data_id__','modal'=>true));
        $attr['data-toggle']  = 'modal';
        $attr['data-target']  = '#myModal';
        $attr['data-keyboard']  = 'true';
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->addTopButton("delete",array('model'=>'merchant/app_user'))  // 添加删除按钮
                //->addSearchItem('pid', 'select', '分类','分类',$data)
                //->search_form_items('pid', 'select', '分类','分类',$data)
                //->addSearchItem('keyword', 'text', '关键字','ID/文章标题')
                //->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("user_name", "用户名")
                ->addTableColumn("nikname", "昵称")
                ->addTableColumn("mobile", "联系电话")
                ->addTableColumn("score", "积分")
                //->addTableColumn("authen_status", "审核状态",'callback','authen_type')
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'merchant/app_user'))  // 添加删除按钮
                ->addRightButton('self',$attr)  // 添加审核按钮
                ->display();
    }

    public function audit(){
        $id = input('param.id');
        if(IS_POST){
            $re = db('cms_article')->where(['id'=>$id])->update(['authen_status'=>1,'authen_time'=>time()]);
            if($re){
            	$code = 1;
            	$msg = '审核通过';
            }else{
            	$code = 0;
            	$msg = '审核失败';
            }
            return json(['code'=>$code,'msg'=>$msg]);
        }
        $data = db('cms_article')->where(['id'=>$id])->find();
        //dump($data);exit;
        $this->assign($data);
        return view('wdwd');
    }

    public function unaudit(){
        $id = input('param.id');
        $name = input('param.name');
        $re = db('cms_article')->where(['id'=>$id])->update(['reason'=>$name,'authen_status'=>2,'authen_time'=>time()]);
        if($re){
        	$code = 1;
        	$msg = '';
        }else{
        	$code = 0;
        	$msg = '';
        }
        return json(['code'=>$code,'msg'=>$msg]);
    }

    public function add(){
        if (request()->isPost()) {
            $data = D("AppUser")->create();
            // dump($data);exit;
            if ($data) {
                if (D("AppUser")->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error(D("AppUser")->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("user_name", "text", "用户名", "用户名")
                    ->addFormItem('password', 'password', '用户密码', '用户密码')
                    ->addFormItem('avatar', 'picture', '用户头像', '用户头像')
                    ->addFormItem('nikname', 'text', '昵称', '昵称')
                    ->addFormItem('email', 'text', "邮箱", '邮箱')
                     ->addFormItem('merch_password','password', "账户密码", '账户密码')
                    ->addFormItem('province_id', 'district', '城市', '城市')
                    ->addFormItem('merch_address', 'text', '地址', '地址')
                    ->addFormItem('bank_name', 'select', '银行机构', '银行机构',array('中国工商银行','中国人民银行','中国建设银行','中国交通银行'))
                    ->addFormItem('bank_num', 'text', '银行卡号', '银行卡号')
                    ->addFormItem('score', 'text', '积分', '积分')
                    ->addFormItem('level', 'text', '等级', '等级')
                    ->display();
        }
    }
    public function edit($id){
        if (request()->isPost()) {
            $data = D("MerchantMember")->create();
            if ($data) {
                if (D("MerchantMember")->save($data)) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error(D("MerchantMember")->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem('id', 'hidden', 'ID', 'ID')
                     ->addFormItem("title", "text", "机构名称", "机构名称")
                    ->addFormItem('logo', 'picture', '机构logo', '机构logo')
                    ->addFormItem('describe', 'textarea', '描述', '描述')
                    ->addFormItem('merch_name', 'text', "账户名", '账户名')
                     ->addFormItem('merch_password','password', "账户密码", '账户密码')
                    ->addFormItem('linkman', 'text', '联系人', '联系人')
                    ->addFormItem('contact_mobile', 'num', '联系人电话', '联系人电话')
                    ->addFormItem('province_id', 'district', '城市', '城市')
                    ->addFormItem('merch_address', 'text', '机构地址', '机构地址')
                    ->addFormItem('merch_mobile', 'num', '机构电话', '机构电话')
                    ->addFormItem('merch_lng', 'text', '经度', '经度')
                    ->addFormItem('merch_lat', 'text', '纬度', '纬度')
                    ->addFormItem('bank_name', 'select', '银行机构', '银行机构',array('中国工商银行','中国人民银行','中国建设银行','中国交通银行'))
                    ->addFormItem('bank_num', 'text', '银行卡号', '银行卡号')
                    ->addFormItem('level', 'text', '等级', '等级')
                    ->setFormData(D('MerchantMember')->find($id))
                    ->display();
        }
    }

}