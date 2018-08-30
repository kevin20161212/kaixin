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
class Standard extends Admin {
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
        $model_object = D("topic_standard");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                    ->where($map)
                   ->order("id desc")
                   ->select();
     
        $page = new Page(
           M('topic_standard')->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
        foreach($data_list as $k=>$v){
           $data_list[$k]['age'] = $this->age($v['age']);
        }
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                ->addTopButton("addnew")    // 添加新增按钮
                ->setSearch("请输入ID/题目", U("index"))
                ->addTableColumn("id", "ID")
                
                ->addTableColumn("standard", '标准分')
                ->addTableColumn("age", "适应年龄")
                ->addTableColumn("daji", "大肌肉及平衡")
                ->addTableColumn("chujue", "触觉防御")
                ->addTableColumn("benti", "本体感")
                ->addTableColumn("xuexi", "学习能力")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("forbid")  // 添加禁用/启用按钮
                ->addRightButton("delete")  // 添加删除按钮
                ->display();
    }
     public function age($age){
        switch ($age) {
            case '3':
                $zhi = '3岁组原始分';
                break;
            case '4':
                $zhi = '4岁组原始分';
                break;
            case '5':
                $zhi = '5岁组原始分';
                break;
            case '6':
                $zhi = '6岁组原始分';
                break;
            case '7':
                $zhi = '7岁组原始分';
                break;
            case '8':
                $zhi = '8岁组原始分';
                break;
            case '9':
                $zhi = '9岁组原始分';
                break;
            case '10':
                $zhi = '10岁组原始分';
                break;
            case '11':
                $zhi = '11岁组原始分';
                break;
            case '12':
                $zhi = '12岁组原始分';
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
            $model_object = D("topic_standard");
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
                    ->addFormItem("standard", "text", "标准分", "标准分")
                    ->addFormItem('age', 'radio', '适应年龄', '适应年龄', array('3' => '3岁组原始分', '4' => '4岁组原始分', '5' => '5岁组原始分', '6' => '6岁组原始分', '7' => '7岁组原始分', '8' => '8岁组原始分', '9' => '9岁组原始分', '10' => '10岁组原始分', '11' => '11岁组原始分', '12' => '12岁组原始分'))
                    ->addFormItem("daji", "text", "大肌肉及平衡", "大肌肉及平衡")
                    ->addFormItem("chujue", "text", "触觉防御", "触觉防御")
                    ->addFormItem("benti", "text", "本体感", "本体感")
                    ->addFormItem("xuexi", "text", "学习能力", "学习能力")
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
            $model_object = D("topic_subject");
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
            $data_list=D('topic_category')->select();
            foreach ($data_list as $key=>$val) {
                $datalist[$val['id']] = $val['title'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('pid', 'select', '所属分类', '所属分类',$datalist)
                    ->addFormItem("subject", "text", "题目", "题目")
                     // ->addFormItem('target', 'checkbox', '适应年龄', '适应年龄', array('3' => '3岁', '4' => '4岁', '5' => '5岁', '6' => '6岁', '7' => '7岁', '8' => '8岁', '9' => '9岁', '10' => '10岁', '11' => '11岁', '12' => '12岁'))
                    ->addFormItem('age', 'radio', '适应年龄', '适应年龄', array('1' => '3~12岁', '2' => '6~12岁'))
                    ->setFormData(D("topic_subject")->find($id))
                    ->display();
        }
    }
}