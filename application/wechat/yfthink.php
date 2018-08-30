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
        'name'        => 'Wechat',
        'title'       => '微信模块',
        'icon'        => 'fa-comments-o',
        'icon_color'  => '#F9B440',
        'description' => '微信模块',
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
                'icon'  => 'fa-comments-o',
                'url'   => 'Cms/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa-comments-o',
                'url'   => 'Cms/Index/index',
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
            'title' => '微信管理',
            'icon'  => 'fa-comments-o',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '公众号配置',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '3' => array(
            'pid'   => '2',
            'title' => '微信授权绑定',
            'url'   => 'wechat/config/index',
            'icon'  => 'fa fa-cog font-icon',
        ),
        '4' => array(
            'pid'   => '2',
            'title' => '关注默认回复',
            'url'   => 'wechat/keys/subscribe',
            'icon'  => 'fa fa-comment-o font-icon',
        ),
        '5' => array(
            'pid'   => '2',
            'title' => '无反馈默认回复',
            'url'   => 'wechat/keys/defaults',
            'icon'  => 'fa fa-commenting font-icon',
        ),
        '6' => array(
            'pid'   => '2',
            'title' => '微信关键字管理',
            'url'   => 'wechat/keys/index',
            'icon'  => 'fa fa-hashtag font-icon',
        ),
        '7' => array(
            'pid'   => '1',
            'title' => '微信服务定制',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '8' => array(
            'pid'   => '7',
            'title' => '微信菜单管理',
            'url'   => 'wechat/menu/index',
            'icon'  => 'fa fa-gg-circle font-icon',
        ),
        '9' => array(
            'pid'   => '7',
            'title' => '微信图文管理',
            'url'   => 'wechat/news/index',
            'icon'  => 'fa fa-map-o font-icon',
        ),
        '10' => array(
            'pid'   => '1',
            'title' => '微信粉丝管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        '11' => array(
            'pid'   => '10',
            'title' => '微信标签管理',
            'url'   => 'wechat/tags/index',
            'icon'  => 'fa fa-tags font-icon',
        ),
        '12' => array(
            'pid'   => '10',
            'title' => '微信粉丝列表',
            'url'   => 'wechat/fans/index',
            'icon'  => 'fa fa-users font-icon',
        ),
        '13' => array(
            'pid'   => '10',
            'title' => '微信黑名单管理',
            'url'   => 'wechat/fans_block/index',
            'icon'  => 'fa fa-user-times font-icon',
        ),
        
    )
);
