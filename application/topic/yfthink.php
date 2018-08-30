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
        'name'        => 'Topic',
        'title'       => '题库模块',
        'icon'        => 'fa-folder-open-o',
        'icon_color'  => '#F9B440',
        'description' => '题库模块',
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
                'icon'  => 'fa-folder-open-o',
                'url'   => 'Shop/Index/index',
                'color'  => '#398CD2',
            ),
        ),
        'main' => array(
            '0' => array(
                'title' => '测试导航',
                'icon'  => 'fa-folder-open-o',
                'url'   => 'Shop/Index/index',
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
            'title' => '题库管理',
            'icon'  => 'fa-folder-open-o',
        ),
        '2' => array(
            'pid'   => '1',
            'title' => '题库管理',
            'icon'  => 'fa fa-folder-open-o',
        ),
        // '3' => array(
        //     'pid'   => '2',
        //     'title' => '新增题目',
           
        //     'url'   => 'Topic/Index/add',
        // ),
        '4' => array(
            'pid'   => '2',
            'title' => '感统发展题',
           
            'url'   => 'Topic/Index/index',
        ),
        '5' => array(
            'pid'   => '2',
            'title' => '题库分类',
        
            'url'   => 'Topic/Category/index',
        ),
        '6' => array(
            'pid'   => '2',
            'title' => '标准分',
            'url'   => 'Topic/Standard/index',
        ),
        '7' => array(
            'pid'   => '2',
            'title' => '能力测评题',
            'url'   => 'Topic/Ceping/index',
        ),
    ),
         // 后台角色菜单及权限节点配置
    'role_menu' => array(
        'Topic'=>array(
            '1' => array(
                'pid'   => '0',
                'title' => '连锁加盟分校管理',
                'icon'  => 'fa fa-flask',
            ),
            '2' => array(
                'pid'   => '1',
                'title' => '系统权限',
                'icon'  => 'fa fa-folder-open-o',
            ),
            '3' => array(
                'pid'   => '2',
                'title' => '用户管理',
                'url'   => 'Topic/User/index',
            ),
            '4' => array(
                'pid'   => '2',
                'title' => '管理员管理',
                'url'   => 'Topic/Access/index',
            ),
            '5' => array(
                'pid'   => '2',
                'title' => '用户组管理',    
                'url'   => 'Topic/Group/index',
            ),
            '6' => array(
                'pid'   => '3',
                'title' => '新增',
                'url'   => 'Topic/User/add',
            ),
            '7' => array(
                'pid'   => '3',
                'title' => '编辑',
                'url'   => 'Topic/User/edit',
            ),
            '8' => array(
                'pid'   => '1',
                'title' => '会员管理',
                'icon'  => 'fa fa-folder-open-o',
            ),
            '9' => array(
                'pid'   => '8',
                'title' => '会员列表',
                'url'   => 'Topic/member/index',
            ),
            '26' => array(
                'pid'   => '8',
                'title' => '会员统计',
                'url'   => 'Topic/member/tongji',
            ),

            '10' => array(
                'pid'   => '9',
                'title' => '查看感统测评',
                'url'   => 'Topic/member/gtindex',
            ),
            '11' => array(
                'pid'   => '9',
                'title' => '查看能力测评',
                'url'   => 'Topic/member/nlindex',
            ),
            '12' => array(
                'pid'   => '10',
                'title' => '查看结果',
                'url'   => 'Topic/member/gtdetail',
            ),
            '13' => array(
                'pid'   => '11',
                'title' => '查看结果',
                'url'   => 'Topic/member/nldetail',
            ),
            '14' => array(
                'pid'   => '1',
                'title' => '教师管理',
                'icon'  => 'fa fa-folder-open-o',
            ),
            '15' => array(
                'pid'   => '14',
                'title' => '教师列表',
                'url'   => 'Topic/Teacher/index',
            ),
            '16' => array(
                'pid'   => '15',
                'title' => '新增',
                'url'   => 'Topic/Teacher/add',
            ),
            '17' => array(
                'pid'   => '15',
                'title' => '编辑',
                'url'   => 'Topic/Teacher/edit',
            ),
            '18' => array(
                'pid'   => '15',
                'title' => '删除',
                'url'   => 'Topic/Teacher/del',
            ),
            '19' => array(
                'pid'   => '3',
                'title' => '删除',
                'url'   => 'Topic/User/del',
            ),
            '20' => array(
                'pid'   => '4',
                'title' => '新增',
                'url'   => 'Topic/Access/add',
            ),
            '21' => array(
                'pid'   => '4',
                'title' => '编辑',
                'url'   => 'Topic/Access/edit',
            ),
            '22' => array(
                'pid'   => '4',
                'title' => '删除',
                'url'   => 'Topic/Access/del',
            ),
            '23' => array(
                'pid'   => '5',
                'title' => '新增',
                'url'   => 'Topic/Group/add',
            ),
            '24' => array(
                'pid'   => '5',
                'title' => '编辑',
                'url'   => 'Topic/Group/edit',
            ),
            '25' => array(
                'pid'   => '5',
                'title' => '删除',
                'url'   => 'Topic/Group/del',
            ),
            '27' => array(
                'pid'   => '9',
                'title' => '删除',
                'url'   => 'Topic/member/del',
            ),
            '28' => array(
                'pid'   => '9',
                'title' => '查看基本信息',
                'url'   => 'Topic/member/detail',
            ),
           
           
            
        )
    )
);
