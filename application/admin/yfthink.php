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
// 模块信息配置
return 
array(
    // 0 => array(
    // 模块信息
    'info'       => array(
        'name'        => 'Admin',
        'title'       => '系统',
        'icon'        => 'fa fa-cog',
        'icon_color'  => '#3CA6F1',
        'description' => '核心系统',
        'developer'   => '山东有范网络科技有限公司',
        'website'     => 'http://www.youfai.cn',
        'version'     => '2.0.0',
    ),

    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1'  => array(
            'pid'   => '0',
            'title' => '系统',
            'icon'  => 'fa fa-cog',
            'level' => 'system',
        ),
        '2'  => array(
            'pid'   => '1',
            'title' => '系统功能',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3'  => array(
            'pid'   => '2',
            'title' => '系统设置',
            'icon'  => 'fa fa-wrench',
            'url'   => 'Admin/Config/group',
        ),
        '4'  => array(
            'pid'   => '3',
            'title' => '修改设置',
            'url'   => 'Admin/Config/groupSave',
        ),
        '5'  => array(
            'pid'   => '2',
            'title' => '导航管理',
            'icon'  => 'fa fa-map-signs',
            'url'   => 'Admin/Nav/index',
        ),
        '6'  => array(
            'pid'   => '5',
            'title' => '新增',
            'url'   => 'Admin/Nav/add',
        ),
        '7'  => array(
            'pid'   => '5',
            'title' => '编辑',
            'url'   => 'Admin/Nav/edit',
        ),
        '8'  => array(
            'pid'   => '5',
            'title' => '设置状态',
            'url'   => 'Admin/Nav/setStatus',
        ),
        // '9'  => array(
        //     'pid'   => '2',
        //     'title' => '幻灯管理',
        //     'icon'  => 'fa fa-image',
        //     'url'   => 'Admin/Slider/index',
        // ),
        '10' => array(
            'pid'   => '9',
            'title' => '新增',
            'url'   => 'Admin/Slider/add',
        ),
        '11' => array(
            'pid'   => '9',
            'title' => '编辑',
            'url'   => 'Admin/Slider/edit',
        ),
        '12' => array(
            'pid'   => '9',
            'title' => '设置状态',
            'url'   => 'Admin/Slider/setStatus',
        ),
        '13' => array(
            'pid'   => '2',
            'title' => '配置管理',
            'icon'  => 'fa fa-cogs',
            'url'   => 'Admin/Config/index',
        ),
        '14' => array(
            'pid'   => '13',
            'title' => '新增',
            'url'   => 'Admin/Config/add',
        ),
        '15' => array(
            'pid'   => '13',
            'title' => '编辑',
            'url'   => 'Admin/Config/edit',
        ),
        '16' => array(
            'pid'   => '13',
            'title' => '设置状态',
            'url'   => 'Admin/Config/setStatus',
        ),
        '17' => array(
            'pid'   => '2',
            'title' => '上传管理',
            'icon'  => 'fa fa-upload',
            'url'   => 'Admin/Upload/index',
        ),
        '18' => array(
            'pid'   => '17',
            'title' => '上传文件',
            'url'   => 'Admin/Upload/upload',
        ),
        '19' => array(
            'pid'   => '17',
            'title' => '删除文件',
            'url'   => 'Admin/Upload/delete',
        ),
        '20' => array(
            'pid'   => '17',
            'title' => '设置状态',
            'url'   => 'Admin/Upload/setStatus',
        ),
        '21' => array(
            'pid'   => '17',
            'title' => '下载远程图片',
            'url'   => 'Admin/Upload/downremoteimg',
        ),
        '22' => array(
            'pid'   => '17',
            'title' => '文件浏览',
            'url'   => 'Admin/Upload/fileManager',
        ),
        '23' => array(
            'pid'   => '1',
            'title' => '系统权限',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '24' => array(
            'pid'   => '23',
            'title' => '用户管理',
            'icon'  => 'fa fa-user',
            'url'   => 'Admin/User/index',
        ),
        '25' => array(
            'pid'   => '24',
            'title' => '新增',
            'url'   => 'Admin/User/add',
        ),
        '26' => array(
            'pid'   => '24',
            'title' => '编辑',
            'url'   => 'Admin/User/edit',
        ),
        '27' => array(
            'pid'   => '24',
            'title' => '设置状态',
            'url'   => 'Admin/User/setStatus',
        ),
        '28' => array(
            'pid'   => '23',
            'title' => '管理员管理',
            'icon'  => 'fa fa-lock',
            'url'   => 'Admin/Access/index',
        ),
        '29' => array(
            'pid'   => '28',
            'title' => '新增',
            'url'   => 'Admin/Access/add',
        ),
        '30' => array(
            'pid'   => '28',
            'title' => '编辑',
            'url'   => 'Admin/Access/edit',
        ),
        '31' => array(
            'pid'   => '28',
            'title' => '设置状态',
            'url'   => 'Admin/Access/setStatus',
        ),
        '32' => array(
            'pid'   => '23',
            'title' => '用户组管理',
            'icon'  => 'fa fa-sitemap',
            'url'   => 'Admin/Group/index',
        ),
        '33' => array(
            'pid'   => '32',
            'title' => '新增',
            'url'   => 'Admin/Group/add',
        ),
        '34' => array(
            'pid'   => '32',
            'title' => '编辑',
            'url'   => 'Admin/Group/edit',
        ),
        '35' => array(
            'pid'   => '32',
            'title' => '设置状态',
            'url'   => 'Admin/Group/setStatus',
        ),
        '36' => array(
            'pid'   => '1',
            'title' => '扩展中心',
            'icon'  => 'fa fa-folder-open-o',
        ),
      
        '44' => array(
            'pid'   => '36',
            'title' => '功能模块',
            'icon'  => 'fa fa-th-large',
            'url'   => 'Admin/Module/index',
        ),
        '45' => array(
            'pid'   => '44',
            'title' => '安装',
            'url'   => 'Admin/Module/install',
        ),
        '46' => array(
            'pid'   => '44',
            'title' => '卸载',
            'url'   => 'Admin/Module/uninstall',
        ),
        '47' => array(
            'pid'   => '44',
            'title' => '更新信息',
            'url'   => 'Admin/Module/updateInfo',
        ),
        '48' => array(
            'pid'   => '44',
            'title' => '设置状态',
            'url'   => 'Admin/Module/setStatus',
        ),
        // '49' => array(
        //     'pid'   => '36',
        //     'title' => '插件管理',
        //     'icon'  => 'fa fa-th',
        //     'url'   => 'Admin/Addon/index',
        // ),
     
        '50' => array(
            'pid'   => '49',
            'title' => '安装',
            'url'   => 'Admin/Addon/install',
        ),
        '51' => array(
            'pid'   => '49',
            'title' => '卸载',
            'url'   => 'Admin/Addon/uninstall',
        ),
        '52' => array(
            'pid'   => '49',
            'title' => '运行',
            'url'   => 'Admin/Addon/execute',
        ),
        '53' => array(
            'pid'   => '49',
            'title' => '设置',
            'url'   => 'Admin/Addon/config',
        ),
        '54' => array(
            'pid'   => '49',
            'title' => '后台管理',
            'url'   => 'Admin/Addon/adminList',
        ),
        '55' => array(
            'pid'   => '54',
            'title' => '新增数据',
            'url'   => 'Admin/Addon/adminAdd',
        ),
        '56' => array(
            'pid'   => '54',
            'title' => '编辑数据',
            'url'   => 'Admin/Addon/adminEdit',
        ),
        '57' => array(
            'pid'   => '54',
            'title' => '设置状态',
            'url'   => 'Admin/Addon/setStatus',
        ),
        // '58' => array(
        //     'pid'   => '1',
        //     'title' => '加盟分校管理',
        //     'icon'  => 'fa fa-folder-open-o',
        // ),
        // '59' => array(
        //     'pid'   => '58',
        //     'title' => '分校列表',
        //     'url'   => 'Admin/Fenxiao/index',
        // ),
        // '60' => array(
        //     'pid'   => '58',
        //     'title' => '新增分校',
        //     'url'   => 'Admin/Fenxiao/add',
        // ),

    ),
    // 后台角色菜单及权限节点配置
    'role_menu' => array(
        'Store'=>array(
        '1' => array(
            'pid'   => '0',
            'title' => '商城模块',
            'icon'  => 'fa fa-flask',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '商城模块管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '商城配置',
            'icon'  => 'fa fa-wrench',
            'url'   => 'Shop/Index/module_config',
        ),
        '11' => array(
            'pid'   => '2',
            'title' => '配置管理',
            'icon'  => 'fa fa-list',
            'url'   => 'Shop/Index/module_config_set',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '商城模块列表',
            'icon'  => 'fa fa-list',
            'url'   => 'Shop/Index/index',
        ),
        '5' => array(
            'pid'   => '4',
            'title' => '新增',
            'url'   => 'Shop/Index/add',
        ),
        '6' => array(
            'pid'   => '4',
            'title' => '编辑',
            'url'   => 'Shop/Index/edit',
        ),
        '7' => array(
            'pid'   => '4',
            'title' => '设置状态',
            'url'   => 'Shop/Index/setStatus',
        ),
        '8' => array(
            'pid'   => '2',
            'title' => '会员管理',
            'url'   => 'Shop/Member/index',
        ),
        '9' => array(
            'pid'   => '2',
            'title' => '商品管理',
            'url'   => 'Shop/Goods/index',
        ),
        '10' => array(
            'pid'   => '2',
            'title' => '分类管理',
            'url'   => 'Shop/Category/index',
        ),
    )

 )
);