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
namespace app\admin\controller;
/**
 * 幻灯片控制器
 * @author <youfai@youfai.cn>
 */
class Slider extends Admin
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
        // 搜索
        $keyword         = I('keyword', '', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        // $map['id|title'] = array($condition, $condition, '_multi' => true);
        
        // 获取所有分类
        $p             = input('get.p', 1);
        $map['status'] = array('egt', '0'); // 禁用和正常状态
        $data_list=$this->lists('admin_slider',$map,'sort desc,id desc');
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('幻灯列表') // 设置页面标题
            ->addTopButton('addnew') // 添加新增按钮
            ->addTopButton('resume') // 添加启用按钮
            ->addTopButton('forbid') // 添加禁用按钮
            ->setSearch('请输入ID/模型标题', U('index'))
            ->addTableColumn('id', 'ID')
            ->addTableColumn('cover', '图片', 'picture')
            ->addTableColumn('title', '标题')
            ->addTableColumn('create_time', '创建时间', 'time')
            ->addTableColumn('sort', '排序')
            ->addTableColumn('status', '状态', 'status')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($data_list['datas']) // 数据列表
            ->setTableDataPage($data_list['page']) // 数据列表分页
            ->addRightButton('edit') // 添加编辑按钮
            ->addRightButton('forbid',array('model'=>'admin_slider')) // 添加禁用/启用按钮
            ->addRightButton('delete') // 添加删除按钮
            ->display();
    }

    /**
     * 新增
     * @author <youfai@youfai.cn>
     */
    public function add()
    {
        if (request()->isPost()) {
            $_POST['status']=1;
            $data = D("admin_slider")->edits(false);
            if ($data) {
                 S('DB_CONFIG_DATA', null);
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {

            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增幻灯') // 设置页面标题
                ->setPostUrl(U('add')) // 设置表单提交地址
                ->addFormItem('title', 'text', '标题', '标题')
                ->addFormItem('cover', 'picture', '图片', '切换图片')
                ->addFormItem('url', 'text', '链接', '点击跳转链接')
                ->setExtraItems($aa) //直接设置表单数据
                ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                ->display();
        }
    }

    /**
     * 编辑
     * @author <youfai@youfai.cn>
     */
    public function edit($id)
    {
        if (request()->isPost()) {
            $data = D("admin_slider")->edits(true);
            if ($data) {
                 S('DB_CONFIG_DATA', null);
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('编辑幻灯') // 设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->addFormItem('title', 'text', '标题', '标题')
                ->addFormItem('cover', 'picture', '图片', '切换图片')
                ->addFormItem('url', 'text', '链接', '点击跳转链接')
                ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                ->setFormData(D('admin_slider')->find($id))
                ->display();
        }
    }
}
