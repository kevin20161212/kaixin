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
class Ceping extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        // 
        $map = array();
        $keyword         = I('keyword', '', 'string');
        $map['id']       = array('like', '%' . $keyword . '%');
        $p = $_GET["p"] ? : 1;
        $model_object = D("TopicEvaluation");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                    ->where($map)
                   ->order("id desc")
                   ->select();
      
        $page = new Page(
           M('topic_evaluation')->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
        foreach($data_list as $k=>$v){
           $data_list[$k]['age'] = $this->age($v['age']);
        }
        $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('ceping/del', array('id' => '__data_id__','modal'=>'ceping'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->setSearch("请输入ID/题目", U("index"))
                
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", '题目')
                ->addTableColumn("age", "适应年龄")
                ->addTableColumn("standard", "标准分")
                
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
               
                ->addRightButton("self",$attr) 
                ->display();
    }
    public function del(){
        $id = I('id');
        $res = D('TopicEvaluation')->where(array('id'=>$id))->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
     public function age($age){
        switch ($age) {
            case '3':
                $zhi = '3岁题目';
                break;
            case '4':
                $zhi = '4岁题目';
                break;
            case '5':
                $zhi = '5岁题目';
                break;
            case '6':
                $zhi = '6-7岁题目';
                break;
            case '7':
                $zhi = '8-9岁题目';
                break;
            case '8':
                $zhi = '10-12岁题目';
                break;
            default:
                # code...
                break;
        }
        return $zhi;
     }

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("TopicEvaluation");
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
            $data_list=D('topic_category')->select();
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "题目", "题目")
                    ->addFormItem("standard", "text", "标准分", "标准分")
                    ->addFormItem('age', 'radio', '适应年龄', '适应年龄', array('3' => '3岁', '4' => '4岁', '5' => '5岁', '6' => '6~7岁', '7' => '8~9岁', '8' => '10~12岁'))
                    ->addFormItem("answer", "textarea", "答案", "多个答案之间点击回车键隔开")
                    ->addFormItem("fenzhi", "textarea", "分值", "与上方答案对应")
                    ->addFormItem("content", "kindeditor", "测评表语", "测评表语")
                    // ->addFormItem('age', 'radio', '适应年龄', '适应年龄', array('1' => '3~12岁', '2' => '6~12岁'))
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("TopicEvaluation");
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
            $data = D("TopicEvaluation")->find($id);
            // dump(explode("\r\n", $data['answer']));die;
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                     ->addFormItem("title", "text", "题目", "题目")
                    ->addFormItem("standard", "text", "标准分", "标准分")
                    ->addFormItem('age', 'radio', '适应年龄', '适应年龄', array('3' => '3岁', '4' => '4岁', '5' => '5岁', '6' => '6~7岁', '7' => '8~9岁', '8' => '10~12岁'))
                    ->addFormItem("answer", "textarea", "答案", "多个答案之间点击回车键隔开")
                    ->addFormItem("fenzhi", "textarea", "分值", "与上方答案对应")
                    ->addFormItem("content", "kindeditor", "测评表语", "测评表语")
                    ->setFormData($data)
                    ->display();
        }
    }
}