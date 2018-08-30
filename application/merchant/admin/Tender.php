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
class Tender extends Admin {
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


        $map['id|title'] = array(
            $condition,
        );
        //dump($map);exit;
        // 获取所有配置
     
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('cms_tender');
        $data_list     = $access_object
            ->page($p, C('ADMIN_PAGE_ROWS'))
            ->where($map)
            ->order('id desc')
            ->select();
        $page = new Page(
            $access_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );
        $data = [];
        $data_lists=D('CmsCategory')->treelists();
        foreach($data_list as $k=>$v){
            $data_list[$k]['pid'] = M('cms_category')->where(array('id'=>$v['pid']))->getField('title');
        }
        foreach ($data_lists as $key=>$val) {
            $data[$val['id']] = $val['title_show'];
        }
        //dump($data);exit;
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
                ->addTopButton("delete",array('model'=>'cms/cms_tender'))  // 添加删除按钮
                //->addSearchItem('pid', 'select', '分类','分类',$data)
                ->search_form_items('pid', 'select', '分类','分类',['0'=>'招标公告','1'=>'中标公告'])
                //->addSearchItem('keyword', 'text', '关键字','ID/标书标题')
                //->setTopAlert($count)
                ->addTableColumn("id", "ID")
                //->addTableColumn("thumb", "图片","picture")
                // ->addTableColumn("pid", "分类")
                ->addTableColumn("title", "标书标题")
                ->addTableColumn("zuoze", "负责人")
                ->addTableColumn("tender_status", "招标状态",'callback','tender_type')
                ->addTableColumn("authen_status", "审核状态",'callback','authen_type')
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'cms/cms_tender'))  // 添加删除按钮
                ->addRightButton('self',$attr)  // 添加审核按钮
                ->display();
    }

    public function audit(){
        $id = input('param.id');
        if(IS_POST){
            $re = db('cms_tender')->where(['id'=>$id])->update(['authen_status'=>1,'authen_time'=>time()]);
            if($re){
            	$code = 1;
            	$msg = '审核通过';
            }else{
            	$code = 0;
            	$msg = '审核失败';
            }
            return json(['code'=>$code,'msg'=>$msg]);
        }
        $data = db('cms_tender')->where(['id'=>$id])->find();
        //dump($data);exit;
        $this->assign($data);
        return view('detail');
    }

    public function unaudit(){
        $id = input('param.id');
        $name = input('param.name');
        $re = db('cms_tender')->where(['id'=>$id])->update(['reason'=>$name,'authen_status'=>2,'authen_time'=>time()]);
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
            $data = D("CmsTender")->create();
            $data['start_time'] = strtotime($_POST['start_time']);
            $data['tender_status'] = $_POST['pid'];
            if ($data) {
                if (D("CmsTender")->add($data)) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error(D("CmsTender")->getError());
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
                    ->addFormItem('pid', 'select', '选择分类', '选择分类', ['0'=>'招标公告','1'=>'中标公告'])
                    ->addFormItem("start_time","date", "时间日期", "时间日期")
                    ->addFormItem("title", "text", "标书标题", "标书标题")
                    ->addFormItem('laiyuan', 'text', '来源', '来源')
                    ->addFormItem('tender_com', 'text', '中标公司', '中标公司')
                    ->addFormItem('zuoze', 'text', '负责人', '负责人')
                    ->addFormItem('mobile', 'text', '电话', '电话')
                    ->addFormItem('textarea', 'textarea', '标书描述', '标书描述')
                    ->addFormItem('content', 'ueditor', '标书内容', '标书内容')
                 
                    ->display();
        }
    }

    public function edit($id){
        if (request()->isPost()) {
            $data = D("CmsTender")->create();
           
            if ($data) {
                $data['start_time'] = strtotime($_POST['start_time']);
                if (D("CmsTender")->save($data)) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败');
                }
            } else {
                $this->error(D("CmsTender")->getError());
            }
        } else {
            $data_list=D('CmsCategory')->treelists();
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title_show'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("edit"))      // 设置表单提交地址
                    ->addFormItem('id', 'hidden', 'ID', 'ID')
                    //->addFormItem('pid', 'select', '选择分类', '选择分类', ['0'=>'招标公告','1'=>'中标公告'])
                    ->addFormItem("title", "text", "标书标题", "标书标题")
                    ->addFormItem('tender_status', 'select', '选择分类', '选择分类', ['0'=>'招标','1'=>'中标'])
                    ->addFormItem("start_time","date", "时间日期", "time")
                    ->addFormItem('laiyuan', 'text', '来源', '来源')
                    ->addFormItem('tender_com', 'text', '中标公司', '中标公司')
                    ->addFormItem('zuoze', 'text', '负责人', '负责人')
                    ->addFormItem('mobile', 'text', '电话', '电话')
                    ->addFormItem('textarea', 'textarea', '标书描述', '标书描述')
                    ->addFormItem('content', 'ueditor', '标书内容', '标书内容')
                    ->setFormData(D('CmsTender')->find($id))
                    ->display();
        }
    }

}