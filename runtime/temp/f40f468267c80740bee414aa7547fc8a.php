<?php if (!defined('THINK_PATH')) exit(); /*a:19:{s:64:"./application/common/util/yfthink/builder/layout/store/list.html";i:1524315838;s:43:"./application/admin/view/public/layout.html";i:1528710982;s:52:"./application/common/util/yfthink/builder/style.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/listbuilder.html";i:1527072454;s:60:"./application/common/util/yfthink/builder/widget/hidden.html";i:1524315838;s:60:"./application/common/util/yfthink/builder/widget/number.html";i:1515937118;s:57:"./application/common/util/yfthink/builder/widget/uid.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/uids.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/price.html";i:1524315838;s:60:"./application/common/util/yfthink/builder/widget/toggle.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/radio.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/checkbox.html";i:1528711586;s:60:"./application/common/util/yfthink/builder/widget/select.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/date.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/dates.html";i:1519959704;s:62:"./application/common/util/yfthink/builder/widget/datetime.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/clock.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/text.html";i:1524315838;s:57:"./application/common/util/yfthink/builder/javascript.html";i:1524315838;}*/ ?>
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
    
    <style type="text/css">
    /* Builder样式 */
    .builder .builder-container .builder-data-empty {
        margin-bottom: 20px;
        background-color: #f9f9f9;
    }
    .builder .builder-container .builder-data-empty .empty-info {
        padding: 130px 0;
        color: #555;
    }
    .builder .builder-container .builder-table .panel {
        overflow-y: hidden;
    }
    .builder .builder-container .builder-table .table td {
        max-width: 600px;
        vertical-align: middle;
    }
    .builder .builder-container .builder-table .table td img.picture {
        max-width: 200px;
        max-height: 40px;
    }
    .builder .builder-container .pagination {
        margin-top: 0px;
    }
    .builder.formbuilder-box .form-builder .img-box .remove-picture {
        color: red;
        position: absolute;
        top: -6px;
        right: -6px;
        background: #fff;
        border-radius: 20px;
        cursor: pointer;
    }
    .builder.formbuilder-box .form-builder .img-box .remove-picture:hover {
        color: #DD0000;
        box-shadow: inset 0 1px 1px red, 0 0 8px red;
    }
    .builder.formbuilder-box .form-builder .file-box .remove-file {
        color: red;
        position: absolute;
        top: 12px;
        right: 10px;
        border-radius: 20px;
        cursor: pointer;
    }
    .builder.formbuilder-box .form-builder .file-box .remove-file:hover {
        color: #DD0000;
        box-shadow: inset 0 1px 1px red, 0 0 8px red;
    }
    .builder.formbuilder-box .form-builder .board_list .board {
        padding: 0px;
        margin-right: 10px;
    }
    @media (min-width: 768px) {
        .builder.formbuilder-box .form-builder .input,
        .builder.formbuilder-box .form-builder .select,
        .builder.formbuilder-box .form-builder .textarea,
        .builder.formbuilder-box .form-builder .file-box {
            width: 70%;
        }
        .builder.formbuilder-box .form-builder .bottom_button_list {
            margin-bottom: 30px;
        }
        .builder.formbuilder-box .form-builder .bottom_button_list .btn {
            min-width: 120px;
        }
        .builder.formbuilder-box .form-builder.form-horizontal {
            padding: 0 15px;
        }
        .builder.formbuilder-box .form-builder.form-horizontal .control-label {
            text-align: left;
        }
        .builder.formbuilder-box .form-builder.form-horizontal .left {
            width: 15%;
            float: left;
        }
        .builder.formbuilder-box .form-builder.form-horizontal .right {
            width: 85%;
            float: left;
        }
    }
    @media (min-width: 992px) {
        .builder.formbuilder-box .form-builder.form-horizontal .left {
            width: 12%;
            float: left;
        }
        .builder.formbuilder-box .form-builder.form-horizontal .right {
            width: 88%;
            float: left;
        }
    }
    @media (max-width: 768px) {
        .builder.formbuilder-box {
            padding: 0 15px;
        }
        .builder.formbuilder-box .builder-tabs-link {
            margin: 0 -15px;
        }
        .builder.formbuilder-box .form-builder .bottom_button_list .btn {
            width: 100%;
            margin-bottom: 15px;
        }
    }
</style>


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
        
            <?php if (!C('ADMIN_TABS')): ?>
                <!-- 顶部导航 -->
                <div class="navbar navbar-default navbar-fixed-top main-nav" role="navigation" style="height:52px !important;">
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
                                <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" style="" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                            </div>
                            <div class="navbar-header navbar-header-inverse" style="height:52px !important;">
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
                                <span class="hidden-xs btn btn-sm ajax-get pull-right m-t-sm m-r-xs" style="" href="<?php echo U('Admin/Config/toggle', array('name' => 'ADMIN_TABS')); ?>"><i class="fa fa-navicon" style="font-size: 18px;"></i></span>
                            </div>
                            <div class="collapse navbar-collapse navbar-collapse-top">
                                <ul class="nav navbar-nav">
                                    <!-- 主导航 -->
                                   <?php if($mokuainames == admin_menu): ?>
                                   <li><a href="<?php echo U('Admin/Index/index'); ?>"><i class="fa fa-home"></i> 首页</a></li>
                                <?php endif; if (request()->isMobile()): if(is_array($_menu_list) || $_menu_list instanceof \think\Collection || $_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
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
                                            <?php endforeach; endif; else: echo "" ;endif; endif; endif; ?>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left" class="btn ajax-get b-r-0 no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                                    <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-user"></i>
                                            <span><?php echo $_user_auth['username']; ?></span>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a target="_blank" href="__ROOT__/"><i class="fa fa-external-link"></i> 打开前台</a></li>
                                            <li><a href="<?php echo U('Admin/Index/removeRuntime'); ?>" style="border: 0;text-align: left;" class="btn text-left ajax-get no-refresh"><i class="fa fa-trash"></i> 清空缓存</a></li>
                                            <li><a href="<?php echo U('Admin/Login/logout'); ?>" class="ajax-get"><i class="fa fa-sign-out"></i> 退出</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        
    </div>

    <div class="clearfix full-container" id="full-container">
        
            <?php if (!C('ADMIN_TABS')): ?>
                <div class="container-fluid with-top-navbar">
                    <div class="row" style="background: #fff;">
                        <!-- 后台左侧导航 -->
                        <?php if (!request()->isMobile()): ?>
                            <div id="sidebar" class="col-xs-12 col-sm-3 sidebar tab-content">
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
                                                                <li <?php if($_parent_menu_list[2]['url'] == $_ns_second['url']) echo 'class="active"'; ?>>
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
                            </div>
                        <?php endif; ?>

                        <!-- 右侧内容 -->
                        <div id="main" class="col-xs-12 col-sm-9 main"  style="overflow-y: scroll;">
                            <!-- 面包屑导航 -->
                            <ul class="breadcrumb">
                                <li><i class="fa fa-map-marker"></i></li>
                                <?php if(is_array($_parent_menu_list) || $_parent_menu_list instanceof \think\Collection || $_parent_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $_parent_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="text-muted"><?php echo $vo['title']; ?></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>

                            <!-- 主体内容区域 -->
                            <div class="tab-content ct-tab-content">
                                
    <div class="panel-body">
        <div class="builder  formbuilder-box listbuilder-box">
    
    <?php if(isset($extra_html['top'])): ?>
        <?php echo $extra_html['top']; endif; ?>
  
    <!-- Tab导航 -->
    <?php if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
        <div class="builder-tabs">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                            <li class="<?php if($tab_nav['current_tab'] == $key) echo 'active'; ?>"><a href="<?php echo $tab['href']; ?>"><?php echo $tab['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group"></div>
    <?php endif; ?>

    <!-- 顶部工具栏按钮 -->
    <div class="builder-toolbar">
        <div class="row">
            <!-- 工具栏按钮 -->
            <?php if(!(empty($top_button_list) || (($top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator ) && $top_button_list->isEmpty()))): ?>
                <div class="col-xs-12 col-sm-12 button-list clearfix">
                    <div class="form-group">
                        <?php if(is_array($top_button_list) || $top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;if(isset($button['type']) && $button['type'] === 'dropdown'): ?>
                                <div class="btn-group">
                                    <button type="button" class="<?php echo (isset($button['class']) && ($button['class'] !== '')?$button['class']:''); ?> dropdown-toggle" data-toggle="dropdown">
                                        <?php echo (isset($button['title']) && ($button['title'] !== '')?$button['title']:''); ?>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php if(is_array($button['dropdown']) || $button['dropdown'] instanceof \think\Collection || $button['dropdown'] instanceof \think\Paginator): $i = 0; $__LIST__ = $button['dropdown'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$btn): $mod = ($i % 2 );++$i;?>
                                            <li><a class="<?php echo (isset($btn['class']) && ($btn['class'] !== '')?$btn['class']:''); ?>" href="<?php echo (isset($btn['href']) && ($btn['href'] !== '')?$btn['href']:''); ?>" target="<?php echo (isset($btn['target']) && ($btn['target'] !== '')?$btn['target']:'_self'); ?>"><?php echo $btn['title']; ?></a></li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <a <?php echo (isset($button['attribute']) && ($button['attribute'] !== '')?$button['attribute']:''); ?>><?php echo (isset($button['title']) && ($button['title'] !== '')?$button['title']:''); ?></a>&nbsp;
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- 搜索框 -->
            <?php if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): if(empty($search_form_items) || (($search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator ) && $search_form_items->isEmpty())): ?>
                    <div class="col-xs-12 col-sm-12 clearfix">
                        <form class="form" method="get" action="<?php echo $search['url']; ?>">
                            <div class="form-group">
                                <div class="input-group search-form">
                                    <input type="text" name="keyword" class="search-input form-control" value="<?php echo I('get.keyword'); ?>" placeholder="<?php echo (isset($search['title']) && ($search['title'] !== '')?$search['title']:''); ?>">
                                    <span class="input-group-btn"><a class="btn btn-default search-btn"><i class="fa fa-search"></i></a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; endif; if(!(empty($top_alert) || (($top_alert instanceof \think\Collection || $top_alert instanceof \think\Paginator ) && $top_alert->isEmpty()))): ?>
                <div class="col-xs-12 col-sm-12 button-list clearfix" style="background-color: #ddf3f5;color: #03a2b6;margin-bottom: 20px;padding: 10px;">
                    <div>当前统计数量为: <span  style='color:red;'><?php echo $top_alert; ?></span></div>
                </div>
            <?php endif; if(!(empty($search_form_items) || (($search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator ) && $search_form_items->isEmpty()))): ?>
                    <div class="col-xs-12 col-sm-12 clearfix">
                        <form class="form-horizontal form form-builder" method="get" action="<?php echo $search['url']; ?>">
                            <div class="form-group">
                                <div class="input-group search-form" style="display: block;">

                    <?php if(is_array($search_form_items) || $search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator): $k = 0; $__LIST__ = $search_form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($k % 2 );++$k;switch($form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "number": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="number" class="form-control input number" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "uid": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($form['value']) {
                    $map['id'] = array('in', $form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>')
                    tags.tokenInput("index.php?s=/user/index/lists&from=builder",{
                        queryParam          :   'keyword',
                        propertyToSearch    :   'label',
                        tokenValue          :   'id',
                        searchDelay         :   0,
                        tokenLimit          :   1,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   false,
                        hintText            :   '请输入用户名、邮箱、手机号搜索',
                        noResultsText       :   '此用户不存在, 请重新搜索',
                        searchingText       :   '查找中...',
                        prePopulate         :   <?php echo $uids; ?>,
                        theme               :   'bootstrap'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "uids": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($form['value']) {
                    $map['id'] = array('in', $form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>')
                    tags.tokenInput("index.php?s=/user/index/lists&from=builder",{
                        queryParam          :   'keyword',
                        propertyToSearch    :   'label',
                        tokenValue          :   'id',
                        searchDelay         :   0,
                        tokenLimit          :   20,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   false,
                        hintText            :   '请输入用户名、邮箱、手机号搜索',
                        noResultsText       :   '此用户不存在, 请重新搜索',
                        searchingText       :   '查找中...',
                        prePopulate         :   <?php echo $uids; ?>,
                        theme               :   'bootstrap'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "price": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "toggle": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" <?php if($form['value'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                </label>
            </div>
            <a href="toggle.html"></a>
            <script type="text/javascript">
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "radio": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                <div class="radio-inline lyui-control lyui-radio">
                    <label for="<?php echo $form['name']; ?><?php echo $option_key; ?>">
                        <?php if(is_array($option)): ?>
                            <input type="radio" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($form['value'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($form['value'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
<?php break; case "checkbox": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                <div class="checkbox-inline lyui-control lyui-checkbox">
                    <label class="checkbox-label">
                        <?php if(is_array($option)): ?>
                            <input type="checkbox" name="<?php echo $form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?> checked<?php endif; ?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="checkbox" name="<?php echo $form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?> checked<?php endif; ?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
<?php break; case "select": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <select name="<?php echo $form['name']; ?>" class="form-control lyui-select select" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "date": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>"
                    class="form-control input date" name="<?php echo $form['name']; ?>" value="
<?php
    if(isset($form['value'])) {
        if(is_numeric($form['value'])) {
            echo time_format($form['value'], 'Y-m-d');
        } else {
            echo $form['value'];
        }
    } else {
        echo(date('Y-m-d'));
    }
?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd',
                        autoclose   : true,
                        minView     : 'month',
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "dates": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>"
                    class="form-control input date" name="<?php echo $form['name']; ?>" value="" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd',
                        autoclose   : true,
                        minView     : 'month',
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "datetime": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $k; ?>"
                    class="form-control input time" name="<?php echo $form['name']; ?>" value="
<?php
    if(isset($form['value'])) {
        if(is_numeric($form['value'])) {
            echo time_format($form['value'], 'Y-m-d H:i:s');
        } else {
            echo $form['value'];
        }
    } else {
        echo(date('Y-m-d H:i:s'));
    }
?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd hh:ii:ss',
                        autoclose   : true,
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "clock": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $k; ?>" class="form-control input time" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $k; ?>').datetimepicker({
                        format      : 'hh:ii',
                        startView   : '0',
                        minView     : '0',
                        showMeridian : true,
                        minuteStep  : 1,
                        autoclose   : true,
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; ?>

                                // 扩展类型
                                <?php default: ?>
                                <?php echo hook('FormBuilderExtend', array('form' => $form)); endswitch; endforeach; endif; else: echo "" ;endif; ?>
                                    <a class="btn btn-default search-btn">筛选</a>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- 数据列表 -->
    <div class="builder-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="builder-table">
                    <div class="panel panel-default table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <?php if($hide_left_checkbox === false): ?>
                                        <th class="list-ids" width="30">
                                            <div class="checkbox-inline lyui-control lyui-checkbox m-l-xs">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="check-all" >
                                                    <span class="lyui-control-indicator"></span>
                                                </label>
                                            </div>
                                        </th>
                                    <?php endif; if(is_array($table_column_list) || $table_column_list instanceof \think\Collection || $table_column_list instanceof \think\Paginator): $i = 0; $__LIST__ = $table_column_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                        <th width="<?php if ($column['width']) {echo $column['width'];} else {echo 'auto';} ?>">
                                            <?php echo htmlspecialchars($column['title']); ?>
                                        </th>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($table_data_list) || $table_data_list instanceof \think\Collection || $table_data_list instanceof \think\Paginator): $i = 0; $__LIST__ = $table_data_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <?php if($hide_left_checkbox === false): ?>
                                            <td>
                                                <div class="checkbox-inline lyui-control lyui-checkbox m-l-xs">
                                                    <label class="checkbox-label">
                                                        <input class="ids" type="checkbox" value="<?php echo (isset($data[$table_data_list_key]) && ($data[$table_data_list_key] !== '')?$data[$table_data_list_key]:''); ?>" name="ids[]">
                                                        <span class="lyui-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        <?php endif; foreach ($table_column_list as $column) :?>
                                            <td>
                                                <?php if ($column['name'] === 'right_button') : foreach ($data['right_button'] as $rb) : if(isset($rb['type']) && $rb['type'] === 'dropdown'): ?>
                                                            <div class="btn-group">
                                                                <button type="button" class="<?php echo (isset($rb['class']) && ($rb['class'] !== '')?$rb['class']:''); ?> dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo (isset($rb['title']) && ($rb['title'] !== '')?$rb['title']:''); ?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <?php if(is_array($rb['dropdown']) || $rb['dropdown'] instanceof \think\Collection || $rb['dropdown'] instanceof \think\Paginator): $i = 0; $__LIST__ = $rb['dropdown'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$btn): $mod = ($i % 2 );++$i;?>
                                                                        <li><a class="<?php echo $btn['class']; ?>|default=''" href="<?php echo (isset($btn['href']) && ($btn['href'] !== '')?$btn['href']:''); ?>"><?php echo $btn['title']; ?></a></li>
                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </ul>
                                                            </div>
                                                        <?php else: ?>
                                                            <a <?php echo (isset($rb['attribute']) && ($rb['attribute'] !== '')?$rb['attribute']:''); ?>><?php echo (isset($rb['title']) && ($rb['title'] !== '')?$rb['title']:''); ?></a>

                                                        <?php endif; endforeach; else: ?>
                                                    <?php echo (isset($data[$column['name']]) && ($data[$column['name']] !== '')?$data[$column['name']]:''); endif; ?>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; if(empty($table_data_list) || (($table_data_list instanceof \think\Collection || $table_data_list instanceof \think\Paginator ) && $table_data_list->isEmpty())): ?>
                                    <tr class="builder-data-empty">
                                        <?php $tdcolspan = count($table_column_list)+1 ?>
                                        <td class="text-center empty-info" colspan="<?php echo $tdcolspan; ?>">
                                            <i class="fa fa-database"></i> 暂时没有数据<br>
                                            <span class="small">本系统由 <a target="_blank" href="<?php echo C('WEBSITE_DOMAIN'); ?>" class="text-muted"><?php echo C('PRODUCT_TITLE'); ?></a> v<?php echo C('CURRENT_VERSION'); ?> 强力驱动</span>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if(!(empty($table_data_page) || (($table_data_page instanceof \think\Collection || $table_data_page instanceof \think\Paginator ) && $table_data_page->isEmpty()))): ?>
                        <ul class="pagination"><?php echo $table_data_page; ?></ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
    <?php if(isset($extra_html['bottom'])): ?>
        <?php echo $extra_html['bottom']; endif; ?>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<block name="script">

    <script type="text/javascript">
//     $('#myModal').on('show.bs.modal', function () {
//   // 在调用 show 方法后触发。执行一些动作...
// })
//     $('#myModal').on('shown.bs.modal', function () {
//   // 当模态框对用户可见时触发（将等待 CSS 过渡效果完成）执行一些动作...
// })
//      $('#myModal').on('hide.bs.modal', function () {
//   // 当调用 hide 实例方法时触发。执行一些动作...
//   $(this).removeData("bs.modal");
// })
     $('#myModal').on('hidden.bs.modal', function () {
  // 当模态框完全对用户隐藏时触发执行一些动作...
  $(this).removeData("bs.modal");
})
</script>
</block>
    </div>

                            </div>

                            <div class="clearfix footer hidden-xs">
                                <div class="navbar navbar-default" role="navigation">
                                    <div class="container－fluid">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" target="_blank" href="http://www.youfai.cn">
                                                <span>有范科技</span>
                                            </a>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-collapse-bottom">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.youfai.cn" class="text-muted" target="_blank">
                                                        <span>版权所有 © 2014-<?php echo date("Y",time()); ?></span>
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
            <?php else: ?>
                
    <div class="panel-body">
        <div class="builder  formbuilder-box listbuilder-box">
    
    <?php if(isset($extra_html['top'])): ?>
        <?php echo $extra_html['top']; endif; ?>
  
    <!-- Tab导航 -->
    <?php if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
        <div class="builder-tabs">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                            <li class="<?php if($tab_nav['current_tab'] == $key) echo 'active'; ?>"><a href="<?php echo $tab['href']; ?>"><?php echo $tab['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group"></div>
    <?php endif; ?>

    <!-- 顶部工具栏按钮 -->
    <div class="builder-toolbar">
        <div class="row">
            <!-- 工具栏按钮 -->
            <?php if(!(empty($top_button_list) || (($top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator ) && $top_button_list->isEmpty()))): ?>
                <div class="col-xs-12 col-sm-12 button-list clearfix">
                    <div class="form-group">
                        <?php if(is_array($top_button_list) || $top_button_list instanceof \think\Collection || $top_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $top_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;if(isset($button['type']) && $button['type'] === 'dropdown'): ?>
                                <div class="btn-group">
                                    <button type="button" class="<?php echo (isset($button['class']) && ($button['class'] !== '')?$button['class']:''); ?> dropdown-toggle" data-toggle="dropdown">
                                        <?php echo (isset($button['title']) && ($button['title'] !== '')?$button['title']:''); ?>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php if(is_array($button['dropdown']) || $button['dropdown'] instanceof \think\Collection || $button['dropdown'] instanceof \think\Paginator): $i = 0; $__LIST__ = $button['dropdown'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$btn): $mod = ($i % 2 );++$i;?>
                                            <li><a class="<?php echo (isset($btn['class']) && ($btn['class'] !== '')?$btn['class']:''); ?>" href="<?php echo (isset($btn['href']) && ($btn['href'] !== '')?$btn['href']:''); ?>" target="<?php echo (isset($btn['target']) && ($btn['target'] !== '')?$btn['target']:'_self'); ?>"><?php echo $btn['title']; ?></a></li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <a <?php echo (isset($button['attribute']) && ($button['attribute'] !== '')?$button['attribute']:''); ?>><?php echo (isset($button['title']) && ($button['title'] !== '')?$button['title']:''); ?></a>&nbsp;
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <!-- 搜索框 -->
            <?php if(!(empty($search) || (($search instanceof \think\Collection || $search instanceof \think\Paginator ) && $search->isEmpty()))): if(empty($search_form_items) || (($search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator ) && $search_form_items->isEmpty())): ?>
                    <div class="col-xs-12 col-sm-12 clearfix">
                        <form class="form" method="get" action="<?php echo $search['url']; ?>">
                            <div class="form-group">
                                <div class="input-group search-form">
                                    <input type="text" name="keyword" class="search-input form-control" value="<?php echo I('get.keyword'); ?>" placeholder="<?php echo (isset($search['title']) && ($search['title'] !== '')?$search['title']:''); ?>">
                                    <span class="input-group-btn"><a class="btn btn-default search-btn"><i class="fa fa-search"></i></a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; endif; if(!(empty($top_alert) || (($top_alert instanceof \think\Collection || $top_alert instanceof \think\Paginator ) && $top_alert->isEmpty()))): ?>
                <div class="col-xs-12 col-sm-12 button-list clearfix" style="background-color: #ddf3f5;color: #03a2b6;margin-bottom: 20px;padding: 10px;">
                    <div>当前统计数量为: <span  style='color:red;'><?php echo $top_alert; ?></span></div>
                </div>
            <?php endif; if(!(empty($search_form_items) || (($search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator ) && $search_form_items->isEmpty()))): ?>
                    <div class="col-xs-12 col-sm-12 clearfix">
                        <form class="form-horizontal form form-builder" method="get" action="<?php echo $search['url']; ?>">
                            <div class="form-group">
                                <div class="input-group search-form" style="display: block;">

                    <?php if(is_array($search_form_items) || $search_form_items instanceof \think\Collection || $search_form_items instanceof \think\Paginator): $k = 0; $__LIST__ = $search_form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($k % 2 );++$k;switch($form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "number": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="number" class="form-control input number" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "uid": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($form['value']) {
                    $map['id'] = array('in', $form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>')
                    tags.tokenInput("index.php?s=/user/index/lists&from=builder",{
                        queryParam          :   'keyword',
                        propertyToSearch    :   'label',
                        tokenValue          :   'id',
                        searchDelay         :   0,
                        tokenLimit          :   1,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   false,
                        hintText            :   '请输入用户名、邮箱、手机号搜索',
                        noResultsText       :   '此用户不存在, 请重新搜索',
                        searchingText       :   '查找中...',
                        prePopulate         :   <?php echo $uids; ?>,
                        theme               :   'bootstrap'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "uids": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($form['value']) {
                    $map['id'] = array('in', $form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>')
                    tags.tokenInput("index.php?s=/user/index/lists&from=builder",{
                        queryParam          :   'keyword',
                        propertyToSearch    :   'label',
                        tokenValue          :   'id',
                        searchDelay         :   0,
                        tokenLimit          :   20,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   false,
                        hintText            :   '请输入用户名、邮箱、手机号搜索',
                        noResultsText       :   '此用户不存在, 请重新搜索',
                        searchingText       :   '查找中...',
                        prePopulate         :   <?php echo $uids; ?>,
                        theme               :   'bootstrap'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "price": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "toggle": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" <?php if($form['value'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                </label>
            </div>
            <a href="toggle.html"></a>
            <script type="text/javascript">
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "radio": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                <div class="radio-inline lyui-control lyui-radio">
                    <label for="<?php echo $form['name']; ?><?php echo $option_key; ?>">
                        <?php if(is_array($option)): ?>
                            <input type="radio" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($form['value'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($form['value'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
<?php break; case "checkbox": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                <div class="checkbox-inline lyui-control lyui-checkbox">
                    <label class="checkbox-label">
                        <?php if(is_array($option)): ?>
                            <input type="checkbox" name="<?php echo $form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?> checked<?php endif; ?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="checkbox" name="<?php echo $form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($form['value'])?$form['value']:explode(',',$form['value']))): ?> checked<?php endif; ?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
<?php break; case "select": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <select name="<?php echo $form['name']; ?>" class="form-control lyui-select select" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "date": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>"
                    class="form-control input date" name="<?php echo $form['name']; ?>" value="
<?php
    if(isset($form['value'])) {
        if(is_numeric($form['value'])) {
            echo time_format($form['value'], 'Y-m-d');
        } else {
            echo $form['value'];
        }
    } else {
        echo(date('Y-m-d'));
    }
?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd',
                        autoclose   : true,
                        minView     : 'month',
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "dates": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>"
                    class="form-control input date" name="<?php echo $form['name']; ?>" value="" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd',
                        autoclose   : true,
                        minView     : 'month',
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "datetime": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $k; ?>"
                    class="form-control input time" name="<?php echo $form['name']; ?>" value="
<?php
    if(isset($form['value'])) {
        if(is_numeric($form['value'])) {
            echo time_format($form['value'], 'Y-m-d H:i:s');
        } else {
            echo $form['value'];
        }
    } else {
        echo(date('Y-m-d H:i:s'));
    }
?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $k; ?>').datetimepicker({
                        format      : 'yyyy-mm-dd hh:ii:ss',
                        autoclose   : true,
                        todayBtn    : 'linked',
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "clock": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $k; ?>" class="form-control input time" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $k; ?>').datetimepicker({
                        format      : 'hh:ii',
                        startView   : '0',
                        minView     : '0',
                        showMeridian : true,
                        minuteStep  : 1,
                        autoclose   : true,
                        language    : 'zh-CN',
                        fontAwesome : true
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; ?>

                                // 扩展类型
                                <?php default: ?>
                                <?php echo hook('FormBuilderExtend', array('form' => $form)); endswitch; endforeach; endif; else: echo "" ;endif; ?>
                                    <a class="btn btn-default search-btn">筛选</a>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- 数据列表 -->
    <div class="builder-container">
        <div class="row">
            <div class="col-xs-12">
                <div class="builder-table">
                    <div class="panel panel-default table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <?php if($hide_left_checkbox === false): ?>
                                        <th class="list-ids" width="30">
                                            <div class="checkbox-inline lyui-control lyui-checkbox m-l-xs">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="check-all" >
                                                    <span class="lyui-control-indicator"></span>
                                                </label>
                                            </div>
                                        </th>
                                    <?php endif; if(is_array($table_column_list) || $table_column_list instanceof \think\Collection || $table_column_list instanceof \think\Paginator): $i = 0; $__LIST__ = $table_column_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?>
                                        <th width="<?php if ($column['width']) {echo $column['width'];} else {echo 'auto';} ?>">
                                            <?php echo htmlspecialchars($column['title']); ?>
                                        </th>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($table_data_list) || $table_data_list instanceof \think\Collection || $table_data_list instanceof \think\Paginator): $i = 0; $__LIST__ = $table_data_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <?php if($hide_left_checkbox === false): ?>
                                            <td>
                                                <div class="checkbox-inline lyui-control lyui-checkbox m-l-xs">
                                                    <label class="checkbox-label">
                                                        <input class="ids" type="checkbox" value="<?php echo (isset($data[$table_data_list_key]) && ($data[$table_data_list_key] !== '')?$data[$table_data_list_key]:''); ?>" name="ids[]">
                                                        <span class="lyui-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </td>
                                        <?php endif; foreach ($table_column_list as $column) :?>
                                            <td>
                                                <?php if ($column['name'] === 'right_button') : foreach ($data['right_button'] as $rb) : if(isset($rb['type']) && $rb['type'] === 'dropdown'): ?>
                                                            <div class="btn-group">
                                                                <button type="button" class="<?php echo (isset($rb['class']) && ($rb['class'] !== '')?$rb['class']:''); ?> dropdown-toggle" data-toggle="dropdown">
                                                                    <?php echo (isset($rb['title']) && ($rb['title'] !== '')?$rb['title']:''); ?>
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <?php if(is_array($rb['dropdown']) || $rb['dropdown'] instanceof \think\Collection || $rb['dropdown'] instanceof \think\Paginator): $i = 0; $__LIST__ = $rb['dropdown'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$btn): $mod = ($i % 2 );++$i;?>
                                                                        <li><a class="<?php echo $btn['class']; ?>|default=''" href="<?php echo (isset($btn['href']) && ($btn['href'] !== '')?$btn['href']:''); ?>"><?php echo $btn['title']; ?></a></li>
                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </ul>
                                                            </div>
                                                        <?php else: ?>
                                                            <a <?php echo (isset($rb['attribute']) && ($rb['attribute'] !== '')?$rb['attribute']:''); ?>><?php echo (isset($rb['title']) && ($rb['title'] !== '')?$rb['title']:''); ?></a>

                                                        <?php endif; endforeach; else: ?>
                                                    <?php echo (isset($data[$column['name']]) && ($data[$column['name']] !== '')?$data[$column['name']]:''); endif; ?>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; if(empty($table_data_list) || (($table_data_list instanceof \think\Collection || $table_data_list instanceof \think\Paginator ) && $table_data_list->isEmpty())): ?>
                                    <tr class="builder-data-empty">
                                        <?php $tdcolspan = count($table_column_list)+1 ?>
                                        <td class="text-center empty-info" colspan="<?php echo $tdcolspan; ?>">
                                            <i class="fa fa-database"></i> 暂时没有数据<br>
                                            <span class="small">本系统由 <a target="_blank" href="<?php echo C('WEBSITE_DOMAIN'); ?>" class="text-muted"><?php echo C('PRODUCT_TITLE'); ?></a> v<?php echo C('CURRENT_VERSION'); ?> 强力驱动</span>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php if(!(empty($table_data_page) || (($table_data_page instanceof \think\Collection || $table_data_page instanceof \think\Paginator ) && $table_data_page->isEmpty()))): ?>
                        <ul class="pagination"><?php echo $table_data_page; ?></ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
    <?php if(isset($extra_html['bottom'])): ?>
        <?php echo $extra_html['bottom']; endif; ?>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<block name="script">

    <script type="text/javascript">
//     $('#myModal').on('show.bs.modal', function () {
//   // 在调用 show 方法后触发。执行一些动作...
// })
//     $('#myModal').on('shown.bs.modal', function () {
//   // 当模态框对用户可见时触发（将等待 CSS 过渡效果完成）执行一些动作...
// })
//      $('#myModal').on('hide.bs.modal', function () {
//   // 当调用 hide 实例方法时触发。执行一些动作...
//   $(this).removeData("bs.modal");
// })
     $('#myModal').on('hidden.bs.modal', function () {
  // 当模态框完全对用户隐藏时触发执行一些动作...
  $(this).removeData("bs.modal");
})
</script>
</block>
    </div>

            <?php endif; ?>
        
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
            
    <script type="text/javascript">
    $(function() {
        //给数组增加查找指定的元素索引方法
        Array.prototype.ly_inde_of = function(val) {
            for (var i = 0; i < this.length; i++) {
                if (this[i] == val) return i;
            }
            return -1;
        };

        //给数组增加删除方法
        Array.prototype.ly_delete = function(val) {
            var index = this.indexOf(val);
            if (index > -1) {
                this.splice(index, 1);
            }
        };
    });
</script>


        </div>
    </div>
</body>
</html>
