<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"E:\anzhuan\object\kaixni11/application/admin\view\index\index.html";i:1535530911;s:43:"./application/admin/view/public/layout.html";i:1528710982;}*/ ?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title><?php echo $meta_title; ?>｜<?php echo C('WEB_SITE_TITLE'); ?>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="author" content="<?php echo C('WEB_SITE_TITLE'); ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="generator" content="CoreThink">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo C('WEB_SITE_TITLE'); ?>">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="apple-touch-icon" type="image/x-icon" href="__ROOT__/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="__ROOT__/logo.png">
    <link rel="stylesheet" type="text/css" href="__LYUI__/css/lyui.min.css">
    <link rel="stylesheet" type="text/css" href="__ADMIN_CSS__/<?php if(C('ADMIN_THEME')){echo C('ADMIN_THEME');}else{echo 'admin';} ?>.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/animate/animate.min.css">
        <link rel="stylesheet" href="/public/layui/css/layui.css">
    <script rel="stylesheet" src="/public/layui/layui.js"></script>
    
    <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
        window.jQuery || document.write('<script type="text/javascript" src="__PUBLIC__/libs/jquery/1.x/jquery.min.js"><\/script>');
        window.yfthink = {
            "app_debug"     : "<?php echo C('app_debug'); ?>",
            "app_debug_msg" : "调试模式已关闭",
            "top_home_page" : "<?php echo C('TOP_HOME_PAGE'); ?>",
            "home_page"     : "<?php echo C('HOME_PAGE'); ?>",
            "var_root "     : "__ROOT__",
            "default_img"   : "<?php echo get_cover('', 'default'); ?>"
        }
    </script>
</head>
<body class="<?php echo $_page_name; ?>">
    <div class="clearfix full-header">
        
    <!-- 顶部导航 -->
    <div class="navbar navbar-default navbar-fixed-top main-nav" role="navigation">
        <div class="container-fluid">
            <div>
                <div class="navbar-header navbar-header-default">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(C('WEB_SITE_LOGO')): ?>
                        <a class="navbar-brand" href="__ROOT__/admin.php">
                            <img class="logo img-responsive" src="<?php echo get_cover(C('WEB_SITE_LOGO')); ?>">
                        </a>
                    <?php else: ?>
                        <a class="navbar-brand" href="__ROOT__/admin.php">
                            <span><?php echo C('LOGO_DEFAULT'); ?></span>
                        </a>
                    <?php endif; ?>
                    <!-- 一键切换后台模式 -->
                    <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                </div>
                <div class="navbar-header navbar-header-inverse">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
                        <span class="sr-only">切换导航</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php if(C('WEB_SITE_LOGO_INVERSE')): ?>
                        <a class="navbar-brand" href="__ROOT__/admin.php">
                            <img class="logo img-responsive" src="<?php echo get_cover(C('WEB_SITE_LOGO_INVERSE')); ?>">
                        </a>
                    <?php else: ?>
                        <a class="navbar-brand" href="__ROOT__/admin.php">
                            <span><?php echo C('LOGO_INVERSE'); ?></span>
                        </a>
                    <?php endif; ?>
                    <!-- 一键切换后台模式 -->
                    <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                </div>
                <div class="collapse navbar-collapse navbar-collapse-top">
                    <ul class="nav navbar-nav">
                        <!-- 主导航 -->
                        <?php if (!C('ADMIN_TABS')): ?>
                            <li><a href="<?php echo U('Admin/Index/index'); ?>"><i class="fa fa-home"></i> 首页</a></li>
                            <?php if (request()->isMobile()): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="dropdown <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'active'; ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa <?php echo $vo['icon']; ?>"></i>
                                            <span><?php echo $vo['title']; ?></span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php if(is_array($vo['_child']) || $vo['_child'] instanceof \think\Collection || $vo['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_first): $mod = ($i % 2 );++$i;?>
                                                <li>
                                                    <a style="padding-left: 40px;" href="#">
                                                        <i class="<?php echo $_ns_first['icon']; ?>"></i>
                                                        <span class="nav-label"><?php echo $_ns_first['title']; ?></span>
                                                    </a>
                                                </li>
                                                <?php if(!(empty($_ns_first['_child']) || (($_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator ) && $_ns_first['_child']->isEmpty()))): if(is_array($_ns_first['_child']) || $_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $_ns_first['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_second): $mod = ($i % 2 );++$i;?>
                                                        <li <?php if($_parent_menu_list[2]['url'] == $_ns_second['url']) echo 'class="active"'; ?>>
                                                            <a style="padding-left: 60px;" href="<?php echo U($_ns_second['url']); ?>" >
                                                                <i class="<?php echo $_ns_second['icon']; ?>"></i>
                                                                <span class="nav-label"><?php echo $_ns_second['title']; ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; else: if (count($_menu_list) > 6): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,0,6, true) : $_menu_list->slice(0,6, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                            <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                <span><?php echo $vo['title']; ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-th-large"></i> 更多 <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,6,null, true) : $_menu_list->slice(6,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                                    <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                        <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                        <span><?php echo $vo['title']; ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </li>
                                <?php else: if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li <?php if($_parent_menu_list[0]['title'] == $vo['title']) echo 'class="active"'; ?>>
                                            <a href="<?php echo U($vo['_child'][0]['_child'][0]['url']); ?>" target="<?php echo C(strtolower($vo['name']).'_config.target'); ?>">
                                                <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                <span><?php echo $vo['title']; ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; endif; else: if (count($_menu_list) > 7): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,0,7, true) : $_menu_list->slice(0,7, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a href="#module<?php echo $vo['id']; ?>" role="tab" data-toggle="tab">
                                            <i class="fa <?php echo $vo['icon']; ?>"></i>
                                            <span><?php echo $vo['title']; ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-th-large"></i> 更多 <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($_menu_list) ? array_slice($_menu_list,7,null, true) : $_menu_list->slice(7,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <li>
                                                <a href="#module<?php echo $vo['id']; ?>" role="tab" data-toggle="tab">
                                                    <i class="fa <?php echo $vo['icon']; ?>"></i>
                                                    <span><?php echo $vo['title']; ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </li>
                            <?php else: if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li>
                                        <a href="#module<?php echo $vo['id']; ?>" role="tab" data-toggle="tab">
                                            <i class="fa <?php echo $vo['icon']; ?>"></i>
                                            <span><?php echo $vo['title']; ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; endif; endif; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left" class="btn ajax-get b-r-0 no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                        <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> <?php echo $_user_auth['username']; ?> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                                <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left" class="btn ajax-get no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                                <li><a href="<?php echo U('Admin/Login/logout'); ?>" class="ajax-get"><i class="fa fa-sign-out"></i> 退出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="clearfix full-container" id="full-container">
        
    <div class="container-fluid with-top-navbar" style="height: 100%;overflow: hidden;">
        <div class="row" style="height: 100%;">
            <!-- 后台左侧导航 -->
            <?php if (!request()->isMobile()): ?>
                <div id="sidebar" class="col-xs-12 col-sm-3 sidebar tab-content">
                    <?php if (!C('ADMIN_TABS')): ?>
                        <!-- 模块菜单 -->
                        <nav class="navside navside-default" role="navigation">
                            <?php if($_current_menu_list['_child']): ?>
                                <ul class="nav navside-nav navside-first">
                                    <?php if(is_array($_current_menu_list['_child']) || $_current_menu_list['_child'] instanceof \think\Collection || $_current_menu_list['_child'] instanceof \think\Paginator): $fkey = 0; $__LIST__ = $_current_menu_list['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_first): $mod = ($fkey % 2 );++$fkey;?>
                                        <li>
                                            <a data-toggle="collapse" href="#navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                <i class="<?php echo $_ns_first['icon']; ?>"></i>
                                                <span class="nav-label"><?php echo $_ns_first['title']; ?></span>
                                                <span class="angle fa fa-angle-down"></span>
                                                <span class="angle-collapse fa fa-angle-left"></span>
                                            </a>
                                            <?php if(!(empty($_ns_first['_child']) || (($_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator ) && $_ns_first['_child']->isEmpty()))): ?>
                                                <ul class="nav navside-nav navside-second collapse in" id="navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                    <?php if(is_array($_ns_first['_child']) || $_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator): $skey = 0; $__LIST__ = $_ns_first['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_second): $mod = ($skey % 2 );++$skey;?>
                                                        <li <?php if($_parent_menu_list[2]['id'] == $_ns_second['id']) echo 'class="active"'; ?>>
                                                            <a href="<?php echo U($_ns_second['url']); ?>" >
                                                                <i class="<?php echo $_ns_second['icon']; ?>"></i>
                                                                <span class="nav-label"><?php echo $_ns_second['title']; ?></span>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            <?php endif; ?>
                        </nav>
                    <?php else: ?>
                        <!-- 模块菜单 -->
                        <?php if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns): $mod = ($i % 2 );++$i;if($_ns['_child']): ?>
                                <div role="tabpanel" class="tab-pane fade <?php if($i === 1) echo 'active in';?>" id="module<?php echo $_ns['id']; ?>">
                                    <nav class="navside navside-default" role="navigation">
                                        <ul class="nav navside-nav navside-first">
                                            <?php if(!(empty($_ns['_child']) || (($_ns['_child'] instanceof \think\Collection || $_ns['_child'] instanceof \think\Paginator ) && $_ns['_child']->isEmpty()))): if(is_array($_ns['_child']) || $_ns['_child'] instanceof \think\Collection || $_ns['_child'] instanceof \think\Paginator): $fkey = 0; $__LIST__ = $_ns['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_first): $mod = ($fkey % 2 );++$fkey;?>
                                                    <li>
                                                        <a data-toggle="collapse" href="#navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                            <i class="<?php echo $_ns_first['icon']; ?>"></i>
                                                            <span class="nav-label"><?php echo $_ns_first['title']; ?></span>
                                                            <span class="angle fa fa-angle-down"></span>
                                                            <span class="angle-collapse fa fa-angle-left"></span>
                                                        </a>
                                                        <?php if(!(empty($_ns_first['_child']) || (($_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator ) && $_ns_first['_child']->isEmpty()))): ?>
                                                            <ul class="nav navside-nav navside-second collapse in" id="navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>">
                                                                <?php if(is_array($_ns_first['_child']) || $_ns_first['_child'] instanceof \think\Collection || $_ns_first['_child'] instanceof \think\Paginator): $skey = 0; $__LIST__ = $_ns_first['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$_ns_second): $mod = ($skey % 2 );++$skey;?>
                                                                    <li>
                                                                        <a href="<?php echo U($_ns_second['url']); ?>" class="open-tab" tab-name="navside-collapse-<?php echo $_ns['id']; ?>-<?php echo $fkey; ?>-<?php echo $skey; ?>">
                                                                            <i class="<?php echo $_ns_second['icon']; ?>"></i>
                                                                            <span class="nav-label"><?php echo $_ns_second['title']; ?></span>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                            <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            <?php endif; ?>

            <!-- 右侧内容 -->
            <div id="main" class="col-xs-12 col-sm-9 main" style="padding-right: 0;">
                <?php if (C('ADMIN_TABS')): ?>
                    <!-- 多标签后台 -->
                    <nav class="navbar navbar-default ct-tab-nav" role="navigation">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li><a href="#" id="tab-left"><i class="fa fa-caret-left"></i></a></li>
                            </ul>
                            <div class="ct-tab-wrap clearfix">
                                <ul class="nav navbar-nav nav-close ct-tab">
                                    <li href="#home" role="tab" data-toggle="tab">
                                        <a href="#"><i class="fa fa-dashboard"></i> <span>首页</span></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" id="tab-right"><i class="fa fa-caret-right"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">关闭操作 <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="close-all">关闭所有</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <?php else: ?>
                    <!-- 面包屑导航 -->
                    <ul class="breadcrumb">
                        <li><i class="fa fa-map-marker"></i></li>
                        <li class="text-muted">首页</li>
                    </ul>
                <?php endif; ?>

                <!-- 多标签后台内容部分 -->
                <div class="tab-content ct-tab-content" style="height: 100%;">
                    <!-- 首页 -->
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <div class="dashboard clearfix">
                            <div class="col-xs-12 m-b-sm text-center p-a-0">
                                <div class="col-xs-12 col-sm-3 m-b-sm">
                                    <div style="border:1px solid #ddd;height:92px;">
                                        <div class="pull-left" style="width:40%;height:90px;text-align:center;padding-top:25px;font-size:30px;background: #f8f8f8;">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="pull-left" style="width:60%;height:90px;text-align:center;padding-top:20px;border-left:1px solid #ddd;">
                                            <div style="font-size:22px;"><?php echo $index_count['module']; ?></div>
                                            <div>模块总数</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 m-b-sm">
                                    <div style="border:1px solid #ddd;height:92px;">
                                        <div class="pull-left" style="width:40%;height:90px;text-align:center;padding-top:25px;font-size:30px;background: #f8f8f8;">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="pull-left" style="width:60%;height:90px;text-align:center;padding-top:20px;border-left:1px solid #ddd;">
                                            <div style="font-size:22px;"><?php echo $index_count['users']; ?></div>
                                            <div>用户总数</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 m-b-sm">
                                    <div style="border:1px solid #ddd;height:92px;">
                                        <div class="pull-left" style="width:40%;height:90px;text-align:center;padding-top:25px;font-size:30px;background: #f8f8f8;">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="pull-left" style="width:60%;height:90px;text-align:center;padding-top:20px;border-left:1px solid #ddd;">
                                            <div style="font-size:22px;"><?php echo $index_count['today']; ?></div>
                                            <div>今日新增</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 m-b-sm">
                                    <div style="border:1px solid #ddd;height:92px;">
                                        <div class="pull-left" style="width:40%;height:90px;text-align:center;padding-top:25px;font-size:30px;background: #f8f8f8;">
                                            <i class="fa fa-line-chart"></i>
                                        </div>
                                        <div class="pull-left" style="width:60%;height:90px;text-align:center;padding-top:20px;border-left:1px solid #ddd;">
                                            <div style="font-size:22px;"><?php echo $index_count['online']; ?></div>
                                            <div>在线用户(3min内)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 后台首页小工具 -->
                            <?php echo hook('AdminIndex'); ?>
                        </div>
                    </div>
                     
                </div>
                  
                <div class="clearfix footer hidden-xs">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" target="_blank" href="http://www.youfai.cn">
                                    <span>有范科技</span>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse navbar-collapse-bottom">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="http://www.youfai.cn" class="text-muted" target="_blank">
                                            <span>版权所有 © 2016-<?php echo date("Y",time()); ?></span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a target="_blank" href="http://www.youfai.cn" class="text-muted pull-right">Powered By 有范科技</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="clearfix full-footer">
        
    </div>

    <div class="clearfix full-script">
        <div class="container-fluid">
            <input type="hidden" id="corethink_home_img" value="__HOME_IMG__">
            <script type="text/javascript" src="__LYUI__/js/lyui.min.js"></script>
            <script type="text/javascript" src="__ADMIN_JS__/admin.js"></script>
            <script type="text/javascript">
                // 如果是多标签方式自动跳转后台首页
                var admin_tabs = '<?php echo (isset($_admin_tabs) && ($_admin_tabs !== '')?$_admin_tabs:""); ?>';
                if(admin_tabs == '1' && !(self.frameElement != null && (self.frameElement.tagName == "IFRAME" || self.frameElement.tagName == "iframe"))){
                    parent.parent.location = "<?php echo U('Admin/Index/index'); ?>";
                }
                if(admin_tabs == '0' && (self.frameElement != null && (self.frameElement.tagName == "IFRAME" || self.frameElement.tagName == "iframe"))){
                    parent.parent.location = "<?php echo U('Admin/Index/index'); ?>";
                }
            </script>
            
        </div>
    </div>
</body>
</html>
