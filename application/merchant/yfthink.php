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
return array(
    // 模块信息
    'info' => array(
        'name'        => 'merchant',
        'title'       => '用户管理',
        'icon'        => 'fort-awesome',
        'icon_color'  => '#F9B440',
        'description' => '用户管理',
        'developer'   => '山东有范网络科技有限公司',
        'website'     => 'http://www.youfai.cn',
        'version'     => '1.6.2',
        'dependences' => array(
            'Admin'   => '1.6.0',
        )
    ),

    // 用户中心导航
    'user_nav' => array(
        'center' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa-user',
                'url'   => 'merchant/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa-user',
                'url'   => 'merchant/Index/index',
            ),
        ),
    ),

    // 模块配置
    'config' => array(
        'title' => array(
            'title'  => '模块名称',
            'type'   => 'text',
            'value'  => '',
            'tip'    => '用于自定义模块名称',
            'is_dev' => '1',
        ),
        'logo' => array(
            'title'  => '模块logo',
            'type'   => 'picture',
            'value'  => '',
            'tip'    => '用于自定义模块logo',
            'is_dev' => '1',
        ),
    ),

    // 后台菜单及权限节点配置
    'admin_menu' => array(
        '1' => array(
            'pid'   => '0',
            'title' => '用户管理',
            'icon'  => 'fa-fort-awesome',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '用户管理',
            'icon'  => 'fa fa-user',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '机构会员',
            'url'   => 'merchant/Index/index',
            'icon'  => 'fa fa-user',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '机构教师',
            'url'   => 'merchant/teacher/index',
            'icon'  => 'fa fa-user',
        ),
        '5' => array(
            'pid'   => '2',
            'title' => '用户会员',
            'url'   => 'merchant/user/index',
            'icon'  => 'fa fa-users ',
        ),
        '6' => array(
            'pid'   => '2',
            'title' => '用户等级',
            'url'   => 'merchant/grade/index',
            'icon'  => 'fa fa-users ',
        ),
        '14' => array(
            'pid'   => '3',
            'title' => '新增',
            'url'   => 'merchant/Index/add',
        ),
        '15' => array(
            'pid'   => '3',
            'title' => '编辑',
            'url'   => 'merchant/Index/edit',
        ),
        '16' => array(
            'pid'   => '3',
            'title' => '审核1',
            'url'   => 'merchant/Index/audit',
        ),
        '17' => array(
            'pid'   => '3',
            'title' => '审核2',
            'url'   => 'merchant/Index/unaudit',
        ),
    )
);
