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
        'name'        => 'Colligate',
        'title'       => '综合模块',
        'icon'        => 'fa-asterisk',
        'icon_color'  => '#F9B440',
        'description' => '综合模块',
        'developer'   => '山东有范网络科技有限公司  ',
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
                'icon'  => 'fa-asterisk',
                'url'   => 'Colligate/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa-asterisk',
                'url'   => 'Colligate/Index/index',
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
            'title' => '综合管理',
            'icon'  => 'fa-asterisk',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '综合管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '总管列表',
            'url'   => 'Colligate/Index/index',
        ),
        '4' => array(
            'pid'   => '3',
            'title' => '添加',
            'url'   => 'Colligate/Index/add',
        ),
        '5' => array(
            'pid'   => '3',
            'title' => '编辑',
            'url'   => 'Colligate/Index/edit',
        ),
        '6' => array(
            'pid'   => '2',
            'title' => '保洁列表',
            'url'   => 'Colligate/Cleanup/index',
        ),
        '7' => array(
            'pid'   => '6',
            'title' => '添加',
            'url'   => 'Colligate/Cleanup/add',
        ),
        '8' => array(
            'pid'   => '6',
            'title' => '编辑',
            'url'   => 'Colligate/Cleanup/edit',
        ),
        '9' => array(
            'pid'   => '2',
            'title' => '维修列表',
            'url'   => 'Colligate/Repair/index',
        ),
        '10' => array(
            'pid'   => '9',
            'title' => '添加',
            'url'   => 'Colligate/Repair/add',
        ),
        '11' => array(
            'pid'   => '9',
            'title' => '编辑',
            'url'   => 'Colligate/Repair/edit',
        ),
        '12' => array(
            'pid'   => '2',
            'title' => '客服列表',
            'url'   => 'Colligate/Kefu/index',
        ),
        '13' => array(
            'pid'   => '12',
            'title' => '添加',
            'url'   => 'Colligate/Kefu/add',
        ),
        '14' => array(
            'pid'   => '12',
            'title' => '编辑',
            'url'   => 'Colligate/Kefu/edit',
        ),
        '15' => array(
            'pid'   => '1',
            'title' => '营销管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '16' => array(
            'pid'   => '15',
            'title' => '优惠券',
            'url'   => 'Colligate/Coupon/index',
        ),
        '17' => array(
            'pid'   => '16',
            'title' => '添加',
            'url'   => 'Colligate/Coupon/add',
        ),
        '18' => array(
            'pid'   => '16',
            'title' => '编辑',
            'url'   => 'Colligate/Coupon/edit',
        ),
        '19' => array(
            'pid'   => '15',
            'title' => '热门活动',
            'url'   => 'Colligate/Activity/index',
        ),
        '20' => array(
            'pid'   => '19',
            'title' => '添加',
            'url'   => 'Colligate/Activity/add',
        ),
        '21' => array(
            'pid'   => '19',
            'title' => '编辑',
            'url'   => 'Colligate/Activity/edit',
        ),
        '22' => array(
            'pid'   => '15',
            'title' => '首页幻灯片',
            'url'   => 'Colligate/Slide/index',
        ),
        '23' => array(
            'pid'   => '22',
            'title' => '添加',
            'url'   => 'Colligate/Slide/add',
        ),
        '24' => array(
            'pid'   => '22',
            'title' => '编辑',
            'url'   => 'Colligate/Slide/edit',
        ),
        '25' => array(
            'pid'   => '2',
            'title' => '分组管理',
            'url'   => 'Colligate/Grouping/index',
        ),
        '26' => array(
            'pid'   => '25',
            'title' => '添加',
            'url'   => 'Colligate/Grouping/add',
        ),
        '27' => array(
            'pid'   => '25',
            'title' => '编辑',
            'url'   => 'Colligate/Grouping/edit',
        ),
        '28' => array(
            'pid'   => '1',
            'title' => '文章管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '29' => array(
            'pid'   => '28',
            'title' => '客人须知',
            'url'   => 'Colligate/Article/kradd',
        ),
        '30' => array(
            'pid'   => '28',
            'title' => '服务协议',
            'url'   => 'Colligate/Article/fwadd',
        ),
        '31' => array(
            'pid'   => '28',
            'title' => '订房协议',
            'url'   => 'Colligate/Article/dfadd',
        ),
      

      
    )
);
