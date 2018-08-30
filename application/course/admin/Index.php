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
class Index extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        //dump(2112);exit;
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        if(!empty(I('pid'))){
            $map['pid'] = I('pid');
        }


        $map['id|title'] = array(
            $condition,
        );
        //dump($map);exit;
        // 获取所有配置
     
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('MerchantMember');
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
                ->addTopButton("delete",array('model'=>'cms/cms_article'))  // 添加删除按钮
                //->addSearchItem('pid', 'select', '分类','分类',$data)
                ->search_form_items('pid', 'select', '分类','分类',$data)
                //->addSearchItem('keyword', 'text', '关键字','ID/文章标题')
                //->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "机构名称")
                ->addTableColumn("linkman", "联系人")
                ->addTableColumn("contact_mobile", "联系电话")
                ->addTableColumn("point", "积分")
                //->addTableColumn("authen_status", "审核状态",'callback','authen_type')
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'cms/cms_article'))  // 添加删除按钮
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
            $data = D("MerchantMember")->create();
            // dump($data);exit;
            if ($data) {
                if (D("MerchantMember")->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error(D("MerchantMember")->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
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

    /**
     * 课程分类
     */
    public function cate(){
        //搜索
        $keyword         = I('keyword', '', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        $map['id|title'] = array(
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有导航
        $map['status'] = array('egt', '0');
        $data_list     = D('CourseCategory')
            ->where($map)
            ->order('id asc')
            ->select();
        // 给文章列表类型加上链接
        foreach ($data_list as &$val) {
            if ($val['type'] == 'post') {
                $val['title'] = '<a href="' . U('Admin/Post/index', array('cid' => $val['id'])) . '">' . $val['title'] . '</a>';
            }
        }
        // 转换成树状列表
        $tree      = new Tree();
        $data_list = $tree->array2tree($data_list);
        // 设置Tab导航数据列表
        $nav_group_list = C('NAV_GROUP_LIST'); // 获取分类分组
        foreach ($nav_group_list as $key => $val) {
            $tab_list[$key]['title'] = $val;
            $tab_list[$key]['href']  = U('index', array('group' => $key));
        }

        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('导航列表') // 设置页面标题
            ->addTopButton('addnew', array('href' => U('add_cate', array('group' => $group)))) // 添加新增按钮
            ->addTopButton('resume') // 添加启用按钮
            ->addTopButton('forbid') // 添加禁用按钮
            ->addTopButton('delete') // 添加删除按钮
            ->setSearch('请输入ID/导航名称', U('index', array('group' => $group)))
            ->addTableColumn('id', 'ID')
            ->addTableColumn('icon', '图标', 'image')
            ->addTableColumn('title_show', '标题')
            ->addTableColumn('pid', '父级','callback','pidname')
            ->addTableColumn('status', '状态', 'status')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($data_list) // 数据列表
            ->addRightButton('edit', array('href' => U('edit', array('group' => $group, 'id' => '__data_id__')))) // 添加编辑按钮
            ->addRightButton('forbid') // 添加禁用/启用按钮
            ->addRightButton('delete') // 添加删除按钮
            ->display();
    }

    /**
     * 分类添加
     */
    public function add_cate(){
        if (request()->isPost()) {
            $nav_object = D('CourseCategory');
            $data       = $nav_object->create();
            //dump($nav_object);exit;
            if ($data) {
                $id = $nav_object->add($data);
                if ($id) {
                    $this->success('新增成功', U('cate', array('group' => $group)));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($nav_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增分类') // 设置页面标题
                ->setPostUrl(U('', array('group' => $group))) // 设置表单提交地址
                ->addFormItem('group', 'hidden', '导航分组', '导航分组')
                ->addFormItem('pid', 'select', '上级分类', '上级分类', select_list_as_tree('Course/CourseCategory','', '顶级分类'))
                ->addFormItem('icon', 'picture', '图标', '切换图片')
                ->addFormItem('title', 'text', '分类标题', '分类标题')
                ->display();
        }
    }
}