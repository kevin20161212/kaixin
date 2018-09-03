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

namespace app\Course\store;
use app\store\controller\Store;
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
        $keyword       = I('keyword', '', 'string');
        $condition     = array('like', '%' . $keyword . '%');
        if(!empty(I('pid'))){
            $map['pid'] = I('pid');
        }
        $map['id|title'] = array(
            $condition,
        );
        $map['merch_id'] = $this->merch_id;
        $p             = !empty($_GET["p"]) ? $_GET['p'] : 1;
        $access_object = D('Course');
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
                ->addTopButton("delete",array('model'=>'course/Course'))  // 添加删除按钮
                //->addSearchItem('pid', 'select', '分类','分类',$data)
               //->search_form_items('pid', 'select', '分类','分类',$data)
                //->addSearchItem('keyword', 'text', '关键字','ID/文章标题')
                //->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("title", "课程名")
                ->addTableColumn("cate_id", "课程类别",'callback','get_cate')
                ->addTableColumn("method_id", "授课方式",'callback','get_method')
                ->addTableColumn("course_grade", "课程级别",'callback','get_method')
                ->addTableColumn("create_time", "创建时间","time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("edit")           // 添加编辑按钮
                ->addRightButton("delete",array('model'=>'course/Course'))  // 添加删除按钮
                ->addRightButton('self',$attr)  // 添加审核按钮
                ->display();
    }
// 根据导航类型设置表单项目
    private $extra_html = <<<EOF
    <script type="text/javascript">
        $(function(){
            $('.item_course_start_time').addClass('hidden');
            $('.item_student_num').addClass('hidden');
            $('input[name="course_term"]').change(function() {
                var type = $(this).val();
                if (type == '9') {
                    $('.item_course_start_time').addClass('hidden');
                    $('.item_student_num').addClass('hidden');
                }
                if(type == '10'){
                    $('.item_course_start_time').addClass('hidden');
                    $('.item_student_num').removeClass('hidden');
                }
                if(type == '11'){
                    $('.item_student_num').addClass('hidden');
                    $('.item_course_start_time').removeClass('hidden');
                } 
            }); 
        });
    </script>
EOF;
    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            // $model_object = D("Course");
            $data = $_POST;
            $_POST['merch_id'] = $this->merch_id;
            $re = model('Course')->save_data($_POST);
            if ($re) {
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            $merch_id = $this->merch_id;
            $teacher = model('Merchant/app_user')->where(['merch_id'=>$merch_id,'status'=>1,'type'=>2])->select();
            foreach ($teacher as $key => $value) {
               $teacher_data[$value['id']] = $value['teach_name']; 
            }
            $cate = model('course_param')->where(['type'=>1,'status'=>1])->field('id,title')->select();
            foreach ($cate as $key => $value) {
              $cate_data[$value['id']] = $value['title'];
            }
            $me = model('course_param')->where(['type'=>2,'status'=>1])->select();
            foreach ($me as $key => $value) {
              $me_data[$value['id']] = $value['title'];
            }
            $term = model('course_param')->where(['type'=>3,'status'=>1])->select();
            foreach ($term as $key => $value) {
              $term_data[$value['id']] = $value['title'];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "课程名", "课程名")
                    ->addFormItem("cover", "picture", "封面图", "封面图")
                    ->addFormItem("cate_id", "select", "课程类别", "课程类别",select_list_as_tree('Course/CourseCategory',''))
                    ->addFormItem("method_id", "radio", "授课方式", "授课方式",$cate_data)
                    ->addFormItem("course_grade", "radio", "课程级别", "课程级别",$me_data)
                    ->addFormItem("course_grade_age", "text", "学龄段", "学龄段")
                    ->addFormItem("course_term", "radio", "开课条件", "课程名",$term_data)
                    ->addFormItem("course_start_time", "date", "开课时间", "开课时间")
                    ->addFormItem("student_num", "num", "开课人数", "开课人数")
                    ->addFormItem("teacher_id", "select", "教师", "教师",$teacher_data)
                    // ->addFormItem("course_grade", "text", "课程规格", "课程规格")
                    // ->addFormItem("course_cost", "text", "课时收费", "课时收费")
                    ->addFormItem("lng123", "guige", "添加规格", "添加规格")
                    ->addFormItem("course_tool_des", "kindeditor", "教辅教具", "教辅教具")
                    ->addFormItem("course_certificate_des", "kindeditor", "结业证书说明", "结业证书说明")
                    ->addFormItem("environment_des", "kindeditor", "教室环境", "教室环境")
                    ->addFormItem("course_des", "kindeditor", "课程介绍", "课程介绍")
                    ->addFormItem("result_des", "kindeditor", "教学成果", "教学成果")
                    ->addFormItem("charge_des", "kindeditor", "收费说明", "收费说明")
                    ->setExtraHtml($this->extra_html)
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("course");
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
            $merch_id = $this->merch_id;
            $teacher = model('Merchant/app_user')->where(['merch_id'=>$merch_id,'status'=>1,'type'=>2])->select();
            foreach ($teacher as $key => $value) {
               $teacher_data[$value['id']] = $value['teach_name']; 
            }
            $cate = model('course_param')->where(['type'=>1,'status'=>1])->field('id,title')->select();
            foreach ($cate as $key => $value) {
              $cate_data[$value['id']] = $value['title'];
            }
            $me = model('course_param')->where(['type'=>2,'status'=>1])->select();
            foreach ($me as $key => $value) {
              $me_data[$value['id']] = $value['title'];
            }
            $term = model('course_param')->where(['type'=>3,'status'=>1])->select();
            foreach ($term as $key => $value) {
              $term_data[$value['id']] = $value['title'];
            }
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    //->addFormItem("id", "hidden", "ID", "ID")
                    // ->addFormItem("title", "text", "课程名", "课程名")
                    // ->addFormItem("cover", "picture", "封面图", "封面图")
                    // ->addFormItem("cate_id", "select", "课程类别", "课程类别",select_list_as_tree('Course/CourseCategory',''))
                    // ->addFormItem("method_id", "radio", "授课方式", "授课方式",$cate_data)
                    // ->addFormItem("course_grade", "radio", "课程级别", "课程级别",$me_data)
                    // ->addFormItem("course_grade_age", "text", "学龄段", "学龄段")
                    // ->addFormItem("course_term", "radio", "开课条件", "课程名",$term_data)
                    // ->addFormItem("course_start_time", "date", "开课时间", "开课时间")
                    // ->addFormItem("student_num", "num", "开课人数", "开课人数")
                    ->addFormItem("teacher_id", "select", "教师", "教师",$teacher_data)
                    // ->addFormItem("course_grade", "text", "课程规格", "课程规格")
                    // ->addFormItem("course_cost", "text", "课时收费", "课时收费")
                    // ->addFormItem("lng123", "guige", "添加规格", "添加规格")
                    // ->addFormItem("course_tool_des", "kindeditor", "教辅教具", "教辅教具")
                    // ->addFormItem("course_certificate_des", "kindeditor", "结业证书说明", "结业证书说明")
                    // ->addFormItem("environment_des", "kindeditor", "教室环境", "教室环境")
                    // ->addFormItem("course_des", "kindeditor", "课程介绍", "课程介绍")
                    // ->addFormItem("result_des", "kindeditor", "教学成果", "教学成果")
                    // ->addFormItem("charge_des", "kindeditor", "收费说明", "收费说明")
                    ->setExtraHtml($this->extra_html)
                    ->setFormData(D("course")->find($id))
                    ->display();
        }
    }
}