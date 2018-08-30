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
namespace app\common\controller;
use app\common\controller\Controller;
use yfthink\Page;
/**
 * 后台公共控制器
 * 为什么要继承AdminController？
 * 因为AdminController的初始化函数中读取了顶部导航栏和左侧的菜单，
 * 如果不继承的话，只能复制AdminController中的代码来读取导航栏和左侧的菜单。
 * 这样做会导致一个问题就是当AdminController被官方修改后不会同步更新，从而导致错误。
 * 所以综合考虑还是继承比较好。
 * @author <youfai@youfai.cn>
 */
class Adminbase extends Controller
{
    /**
     * 初始化方法
     * @author <youfai@youfai.cn>
     */
    protected function _initialize()
    {
        // 登录检测
        // \think\Hook::add('appp_init','app\\admin\\behavior\\InitConfig');
        // \think\Hook::listen('appp_init');
        // dump(12345);exit;
        if (!is_login()) {
            //还没登录跳转到登录页面
            $this->redirect('admin/Login/login');
        }

        // 获取当前访问地址
        $current_url = request()->module() . '/' . request()->controller() . '/' . request()->action();

        // 权限检测，首页不需要权限
        if ('admin/index/index' !== strtolower($current_url)) {
            if (!model('admin/Group')->checkMenuAuth()) {
                $this->error('权限不足！', url('admin/Index/index'));
            }
            $this->assign('_admin_tabs', config('admin_tabs'));
        }
        // dump(config('admin_tabs'));exit;
        // 获取所有导航
        $module_object = model('admin/Module');
        $menu_list     = $module_object->getAllMenu();
        $this->assign('_menu_list', $menu_list); // 后台主菜单

        // 获取左侧导航
        if (!config('admin_tabs')) {
            $parent_menu_list = $module_object->getParentMenu();
            if (isset($parent_menu_list[0]['top'])) {
                $current_menu_list = $menu_list[$parent_menu_list[0]['top']];
            } else {
                $current_menu_list = $menu_list[ucfirst(request()->module())];
            }
            $this->assign('_current_menu_list', $current_menu_list); // 后台左侧菜单
            $this->assign('_parent_menu_list', $parent_menu_list); // 后台父级菜单
        }
    }

    /**
     * 用户登录检测
     * @author <youfai@youfai.cn>
     */
    protected function is_login()
    {
        //用户登录检测
        $uid = is_login();
        if ($uid) {
            return $uid;
        } else {
            if (request()->isAjax()) {
                $this->error('请先登录系统', url('admin/Login/login', '', true, true), array('login' => 1));
            } else {
                redirect(url('admin/Login/login', '', true, true));
            }
        }
    }

    /**
     * 模块配置方法
     * @author <youfai@youfai.cn>
     */
    public function module_config()
    {
        if (request()->isPost()) {
            $id     = (int) I('id');
            $config = input('config/a');
            $flag   = model('Admin/Module')
                ->where("id={$id}")
                ->setField('config', json_encode($config));
            if ($flag !== false) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        } else {
            $module_config = $this->module_config_get();
            // 构造表单名
            foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        foreach ($val2['options'] as $key3 => $val3) {
                            $module_config['config'][$key]['options'][$key2]['options'][$key3]['name'] = 'config[' . $key3 . ']';
                        }
                    }
                } else {
                    $module_config['config'][$key]['name'] = 'config[' . $key . ']';
                }
            }
            // dump($module_config['config']);exit;
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('设置') //设置页面标题
                ->setPostUrl(url('')) //设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->setExtraItems($module_config['config']) //直接设置表单数据
                ->setFormData($module_info)
                ->display();
        }
    }
    /**
     * 模块配置方法
     * @author <youfai@youfai.cn>
     */
    public function module_config_set()
    {
        if (request()->isPost()) {
            $id     = (int) I('id');
            $config = input('config/a');
            $flag   = model('Admin/Module')
                ->where("id={$id}")
                ->setField('config', json_encode($config));
            if ($flag !== false) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        } else {
            $group = input('param.group');
            $module_config = $this->module_config_get();
            // dump($module_config);exit;
            $nav = array();
            $nav_config = array();
            // 构造表单名
            foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        $nav[$key2]['title'] = $val2['title'];
                        $nav[$key2]['href'] = U('module_config_set', array('group' => $key2));
                        if(!$group){
                            $group = $key2;
                        }
                        foreach ($val2['options'] as $key3 => $val3) {
                            if($key2 == ucfirst($group)){
                                $nav_config[$key3] = $val3;
                                $nav_config[$key3]['config'] = $key3;
                                $nav_config[$key3]['id'] = $key2.','.$key3;
                            }
                        }
                    }
                } else {
                    $nav_config[$key] = $val;
                    $nav_config[$key]['config'] = $key;
                }
            }
             // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle('部门列表') // 设置页面标题
        ->setTabNav($nav, ucfirst($group)) // 设置页面Tab导航
            ->addTopButton('addnew',array('href'=>U('module_config_add'))) // 添加新增按钮
            ->addTopButton('resume') // 添加启用按钮
            ->addTopButton('forbid') // 添加禁用按钮
            ->addTopButton('delete') // 添加删除按钮
            ->addTableColumn('config', '配置标识')
            ->addTableColumn('title', '配置名称')
            ->addTableColumn('tip', '配置说明')
            ->addTableColumn('right_button', '操作', 'btn')
            ->setTableDataList($nav_config) // 数据列表
            ->addRightButton('edit',array('href'=>U('module_config_edit'))) // 添加编辑按钮
            ->addRightButton('forbid') // 添加禁用/启用按钮
            ->addRightButton('delete') // 添加删除按钮
            ->display();
        }
    }
    /**
     * 获取模块配置
     * @author <youfai@youfai.cn>
     */
    private function module_config_get()
    {
            $name        = request()->module();
            $config_file = realpath(APP_DIR . $name) . '/' . model('Admin/Module')->install_file();
            if (!$config_file) {
                $this->error('配置文件不存在');
            }
            $module_config = include $config_file;

            $module_info = model('admin/Module')->where(array('name' => $name))->find($id);
            $names = $name == 'admin'?'config':'role_config';
            $db_config   = $module_info[$names];
            // dump($db_config);exit;
            // 构造配置
            if ($db_config) {
                // $db_config = $name == 'admin'?'config':'role_config';
                if($name == 'admin'){
                    $db_config = json_decode($db_config, true);
                }else{
                    $db_config_en = json_decode($db_config, true);
                    $db_config = $db_config_en[$name];
                    unset($db_config_en);
                }
                 // dump($db_config);exit;
                $module_config['info']['id'] = $module_info['id'];
                $module_config['config'] = $db_config ;
                foreach ($module_config['config'] as $key => $value) {
                    if ($value['type'] != 'group') {
                        $module_config['config'][$key]['value'] = $db_config[$key];
                    } else {
                        foreach ($value['options'] as $gourp => $options) {
                            foreach ($options['options'] as $gkey => $value) {
                                $module_config['config'][$key]['options'][$gourp]['options'][$gkey]['value'] = $db_config[$gkey];
                            }
                        }
                    }
                }
            }
            return  $module_config;
    }
    /**
     * 新增配置
     * @author <youfai@youfai.cn>
     */
    public function module_config_add()
    {
         $module_config = $this->module_config_get();
         // dump($module_config);exit;
        if (request()->isPost()) {
             foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        if(input('param.group') == $key2){
                            // $module_config['config']['group']['options'][$key2][input('param.name')]['name'] =  input('param.name');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['title'] =  input('param.title');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['type'] =  input('param.type');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['value'] =  input('param.value');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['tip'] =  input('param.tip');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['is_dev'] =  0;
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['sort'] =  input('param.sort');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['options'] =  input('param.options');
                        }
                    }
                } else {
                    $nav_config[$key] = $val;
                    $nav_config[$key]['config'] = $key;
                }
            }
            $id     = (int) $module_config['info']['id'];
            $config = $module_config['config'];
            $flag   = model('Admin/Module')
                ->where("id={$id}")
                ->setField('config', json_encode($config));
            
            if ($flag !== false) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        } else {
           
            $nav = array();
            $nav_config = array();
            // 构造表单名
            foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        $nav[$key2]['title'] = $val2['title'];
                        $nav[$key2]['href'] = U('module_config_set', array('group' => $key2));
                    }
                }
            }
            // 获取Builder表单类型转换成一维数组
            $form_item_type = C('FORM_ITEM_TYPE');
            foreach ($form_item_type as $key => $val) {
                $form_item_type[$key] = $val[0];
            }

            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增配置') //设置页面标题
                ->setPostUrl(U('module_config_add')) //设置表单提交地址
                ->addFormItem('group', 'select', '配置分组', '配置所属的分组', $nav)
                ->addFormItem('type', 'select', '配置类型', '配置类型的分组', $form_item_type)
                ->addFormItem('name', 'text', '配置标识', '配置标识')
                ->addFormItem('title', 'text', '配置标题', '配置标题')
                ->addFormItem('value', 'textarea', '配置值', '配置值')
                ->addFormItem('options', 'textarea', '配置项', '如果是单选、多选、下拉等类型 需要配置该项')
                ->addFormItem('tip', 'textarea', '配置说明', '配置说明')
                ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                ->display();
        }
    }
    /**
     * 编辑配置
     * @author <youfai@youfai.cn>
     */
    public function module_config_edit()
     {
         $module_config = $this->module_config_get();
        if (request()->isPost()) {
             foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        if(input('param.group') == $key2){
                            // $module_config['config']['group']['options'][$key2][input('param.name')]['name'] =  input('param.name');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['title'] =  input('param.title');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['type'] =  input('param.type');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['value'] =  input('param.value');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['tip'] =  input('param.tip');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['is_dev'] =  0;
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['sort'] =  input('param.sort');
                            $module_config['config']['group']['options'][$key2]['options'][input('param.name')]['options'] =  input('param.options');
                        }
                    }
                } else {
                    $nav_config[$key] = $val;
                    $nav_config[$key]['config'] = $key;
                }
            }
            $id     = (int) $module_config['info']['id'];
            $config = $module_config['config'];
            $flag   = model('Admin/Module')
                ->where("id={$id}")
                ->setField('config', json_encode($config));
            if ($flag !== false) {
                $this->success('保存成功');
            } else {
                $this->error('保存失败');
            }
        } else {
           
            $nav = array();
            $nav_config = array();
            // 构造表单名
            // foreach ($module_config['config'] as $key => $val) {
            //     if ($val['type'] == 'group') {
            //         foreach ($val['options'] as $key2 => $val2) {
            //             $nav[$key2]['title'] = $val2['title'];
            //             $nav[$key2]['href'] = U('module_config_set', array('group' => $key2));
            //     }
            // }
             foreach ($module_config['config'] as $key => $val) {
                if ($val['type'] == 'group') {
                    foreach ($val['options'] as $key2 => $val2) {
                        $nav[$key2]['title'] = $val2['title'];
                        $nav[$key2]['href'] = U('module_config_set', array('group' => $key2));
                        if(!$group){
                            $group = $key2;
                        }
                        foreach ($val2['options'] as $key3 => $val3) {
                            if($key2 == ucfirst($group)){
                                $nav_config[$key3] = $val3;
                                $nav_config[$key3]['config'] = $key3;
                                $nav_config[$key3]['id'] = $key2.','.$key3;
                            }
                        }
                    }
                } else {
                    $nav_config[$key] = $val;
                    $nav_config[$key]['config'] = $key;
                }
            }
            // 获取Builder表单类型转换成一维数组
            $form_item_type = C('FORM_ITEM_TYPE');
            foreach ($form_item_type as $key => $val) {
                $form_item_type[$key] = $val[0];
            }
            // dump($nav_config);exit;
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('新增配置') //设置页面标题
                ->setPostUrl(U('module_config_edit')) //设置表单提交地址
                ->addFormItem('group', 'select', '配置分组', '配置所属的分组', $nav)
                ->addFormItem('type', 'select', '配置类型', '配置类型的分组', $form_item_type)
                ->addFormItem('name', 'text', '配置标识', '配置标识')
                ->addFormItem('title', 'text', '配置标题', '配置标题')
                ->addFormItem('value', 'textarea', '配置值', '配置值')
                ->addFormItem('options', 'textarea', '配置项', '如果是单选、多选、下拉等类型 需要配置该项')
                ->addFormItem('tip', 'textarea', '配置说明', '配置说明')
                ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                 ->setFormData($nav_config)
                ->display();
        }
    }

    /**
     * 编辑配置
     * @author <youfai@youfai.cn>
     */
    public function module_config_del($id)
    {
        if (request()->isPost()) {
            $data = D("admin_config")->edits(true);
            if ($data) {
                 S('DB_CONFIG_DATA', null);
                $this->success("新增成功", U("index"));
            } else {
                $this->error("新增失败".$model_object->getError());
            }
        } else {
            // 获取Builder表单类型转换成一维数组
            $form_item_type = C('FORM_ITEM_TYPE');
            foreach ($form_item_type as $key => $val) {
                $form_item_type[$key] = $val[0];
            }
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle('编辑配置') // 设置页面标题
                ->setPostUrl(U('edit')) // 设置表单提交地址
                ->addFormItem('id', 'hidden', 'ID', 'ID')
                ->addFormItem('group', 'select', '配置分组', '配置所属的分组', C('CONFIG_GROUP_LIST'))
                ->addFormItem('type', 'select', '配置类型', '配置类型的分组', $form_item_type)
                ->addFormItem('name', 'text', '配置名称', '配置名称')
                ->addFormItem('title', 'text', '配置标题', '配置标题')
                ->addFormItem('value', 'textarea', '配置值', '配置值')
                ->addFormItem('options', 'textarea', '配置项', '如果是单选、多选、下拉等类型 需要配置该项')
                ->addFormItem('tip', 'textarea', '配置说明', '配置说明')
                ->addFormItem('sort', 'num', '排序', '用于显示的顺序')
                ->setFormData(D('Config')->find($id))
                ->display();
        }
    }
     protected function lists($model, $where = array(), $order = '', $base = array('status' => 1), $field = true)
    {
        $options = array();
        $REQUEST = (array)I('request.');
        if (is_string($model)) {
            $model = D($model);
        }

        // $OPT = new \ReflectionProperty($model, 'options');
        // $OPT->setAccessible(true);

        $pk = $model->getPk();
        if ($order === null) {
            //order置空
        } else if (isset($REQUEST['_order']) && isset($REQUEST['_field']) && in_array(strtolower($REQUEST['_order']), array('desc', 'asc'))) {
            $options['order'] = '`' . $REQUEST['_field'] . '` ' . $REQUEST['_order'];
        } elseif ($order === '' && empty($options['order']) && !empty($pk)) {
            $options['order'] = $pk . ' desc';
        } elseif ($order) {
            $options['order'] = $order;
        }
        unset($REQUEST['_order'], $REQUEST['_field']);

        $options['where'] = array_filter(array_merge((array)$base, /*$REQUEST,*/
            (array)$where), function ($val) {
            //if ($val === '' || $val === null) {
            if ( $val === null) {
                return false;
            } else {
                return true;
            }
        });
        if (empty($options['where'])) {
            unset($options['where']);
        }
        // $options = array_merge((array)$OPT->getValue($model), $options);
        $total = $model->where($options['where'])->count();

        if (isset($REQUEST['r'])) {
            $listRows = (int)$REQUEST['r'];
        } else {
            $listRows = C('ADMIN_PAGE_ROWS') > 0 ? C('ADMIN_PAGE_ROWS') : 10;
        }
        $page = new Page($total, $listRows);
        if ($total > $listRows) {
            $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
        }
        $p = $page->show();
        $p = (int)$REQUEST['p'];
        $datas=$model->page($p,$listRows)->where($options['where'])->order($options['order'])->field($field)->select();
        // dump($datas);exit;
        if($datas){
        foreach ($datas as $volue){
             $data[] = $volue->toArray();
        }
        $pagedata['datas']=$data;
        $pagedata['page']=$page->show();
         }
        return $pagedata;
    }
}
