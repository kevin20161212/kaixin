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

use yfthink\Tree;

/**
 * 部门控制器
 * @author <youfai@youfai.cn>
 */
class Group extends Admin
{
    /**
     * 部门列表
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
        // 搜索
        $keyword         = I('keyword', '', 'string');
        $condition       = array('like', '%' . $keyword . '%');
        $map['id|title'] = array(
            $condition,
            $condition,
            '_multi' => true,
        );

        // 获取所有部门
        $map['status'] = array('egt', '0'); //禁用和正常状态
        $map['is_success'] = 0;
        $data_list     = D('Group')
            ->where($map)
            ->order('sort asc, id asc')
            ->select();

        // 转换成树状列表
        $tree      = new Tree();
        $data_list = $tree->array2tree($data_list);

        $right_button['no']['title']     = '超级管理员无需操作';
        $right_button['no']['attribute'] = 'class="label label-warning" href="#"';
        $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('group/del', array('id' => '__data_id__','modal'=>'group'));
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('部门列表') // 设置页面标题
            ->addTopButton('addnew') // 添加新增按钮
            // ->addTopButton('resume') // 添加启用按钮
            // ->addTopButton('forbid') // 添加禁用按钮
            // ->addTopButton('delete') // 添加删除按钮
            ->setSearch('请输入ID/部门名称', U('index'))
            ->addTableColumn('id', 'ID')
            ->addTableColumn('title_show', '标题')
            ->addTableColumn('icon', '图标', 'icon')
            ->addTableColumn('sort', '排序')
            ->addTableColumn('status', '状态', 'status')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($data_list) // 数据列表
            ->addRightButton('edit') // 添加编辑按钮
            ->addRightButton('forbid') // 添加禁用/启用按钮
            ->addRightButton("self",$attr) 
            ->alterTableData( // 修改列表数据
                array('key' => 'id', 'value' => '1'),
                array('right_button' => $right_button)
            )
            ->display();
    }

    public function del(){
        $id = I('id');
        $res = D('Group')->where(array('id'=>$id))->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    /**
     * 新增部门
     * @author <youfai@youfai.cn>
     */
    public function add()
    {
        if (request()->isPost()) {
            $group_object       = D('Group');
            $_POST['menu_auth'] = json_encode(I('post.menu_auth/a'));
            $data               = $group_object->create();
            if ($data) {
                $id = $group_object->add($data);
                if ($id) {
                    $this->success('新增成功', U('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($group_object->getError());
            }
        } else {
            // 获取现有部门
            $map['status'] = array('egt', 0);
            $all_group     = select_list_as_tree('Group', $map, '顶级部门');

            // 获取功能模块的后台菜单列表
            $tree       = new Tree();
            $moule_list = D('Module')
                ->where(array('status' => 1))
                ->select(); // 获取所有安装并启用的功能模块
            $all_module_menu_list = array();
            foreach ($moule_list as $key => $val) {
                $temp                               = json_decode($val['admin_menu'], true);
                $menu_list_item                     = $tree->list2tree($temp);
                $all_module_menu_list[$val['name']] = $menu_list_item[0];
            }
          
          // dump($all_module_menu_list);die;
            $this->assign('all_module_menu_list', $all_module_menu_list);
            $this->assign('all_group', $all_group);
            $this->assign('meta_title', '新增部门');
            $this->display('add_edit');
        }
    }

    /**
     * 编辑部门
     * @author <youfai@youfai.cn>
     */
    public function edit($id)
    {
        if (request()->isPost()) {
            $group_object       = D('Group');
            $_POST['menu_auth'] = json_encode(I('post.menu_auth/a'));
            $data = $group_object->create($_POST);
            if ($data) {
                if ($group_object->save($data) !== false) {
                    $this->success('更新成功', U('index'));
                } else {
                    $this->error('更新失败' . $group_object->getError());
                }
            } else {
                $this->error($group_object->getError());
            }
        } else {
            // 获取部门信息
            $info              = D('Group')->find($id);
            $info['menu_auth'] = json_decode($info['menu_auth'], true);
          
            // 获取现有部门
            $map['status'] = array('egt', 0);
            $all_group     = select_list_as_tree('Group', $map, '顶级部门');

            // 获取所有安装并启用的功能模块
            $moule_list = D('Module')
                ->where(array('status' => 1))
                ->select();
// dump($moule_list);exit;
            // 获取功能模块的后台菜单列表
            $tree                 = new Tree();
            $all_module_menu_list = array();
            foreach ($moule_list as $key => $val) {
                $temp                               = json_decode($val['admin_menu'], true);
                $menu_list_item                     = $tree->list2tree($temp);
                $all_module_menu_list[$val['name']] = $menu_list_item[0];
            }
// dump($info);exit;
            
            $this->assign('info', $info);
            $this->assign('all_module_menu_list', $all_module_menu_list);
            $this->assign('all_group', $all_group);
            $this->assign('meta_title', '编辑部门');
            $this->display('add_edit');
        }
    }

    /**
     * 设置一条或者多条数据的状态
     * @author <youfai@youfai.cn>
     */
    public function setStatus($model = '', $strict = null)
    {
        if ('' == $model) {
            $model = request()->controller();
        }
        $ids = I('request.ids');
        if (is_array($ids)) {
            if (in_array('1', $ids)) {
                $this->error('超级管理员组不允许操作');
            }
        } else {
            if ($ids === '1') {
                $this->error('超级管理员组不允许操作');
            }
        }
        parent::setStatus($model);
    }
}
