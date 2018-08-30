<?php if (!defined('THINK_PATH')) exit(); /*a:48:{s:64:"./application/common/util/yfthink/builder/layout/store/form.html";i:1524315838;s:43:"./application/admin/view/public/layout.html";i:1528710982;s:52:"./application/common/util/yfthink/builder/style.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/formbuilder.html";i:1530755950;s:60:"./application/common/util/yfthink/builder/widget/hidden.html";i:1524315838;s:60:"./application/common/util/yfthink/builder/widget/static.html";i:1524315838;s:57:"./application/common/util/yfthink/builder/widget/num.html";i:1524315838;s:57:"./application/common/util/yfthink/builder/widget/uid.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/uids.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/price.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/text.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/textarea.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/array.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/password.html";i:1524315838;s:60:"./application/common/util/yfthink/builder/widget/toggle.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/radio.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/checkbox.html";i:1528711586;s:60:"./application/common/util/yfthink/builder/widget/select.html";i:1524315838;s:61:"./application/common/util/yfthink/builder/widget/selects.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/icon.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/date.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/datetime.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/clock.html";i:1524315838;s:61:"./application/common/util/yfthink/builder/widget/picture.html";i:1524315838;s:66:"./application/common/util/yfthink/builder/widget/picture_temp.html";i:1524315838;s:62:"./application/common/util/yfthink/builder/widget/pictures.html";i:1524315838;s:67:"./application/common/util/yfthink/builder/widget/pictures_temp.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/file.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/files.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/media.html";i:1528703812;s:60:"./application/common/util/yfthink/builder/widget/medias.html";i:1524315838;s:64:"./application/common/util/yfthink/builder/widget/summernote.html";i:1524315838;s:64:"./application/common/util/yfthink/builder/widget/kindeditor.html";i:1528438482;s:62:"./application/common/util/yfthink/builder/widget/editormd.html";i:1524315838;s:58:"./application/common/util/yfthink/builder/widget/tags.html";i:1524315838;s:59:"./application/common/util/yfthink/builder/widget/board.html";i:1524315838;s:60:"./application/common/util/yfthink/builder/widget/choice.html";i:1530753906;s:60:"./application/common/util/yfthink/builder/widget/huxing.html";i:1529545294;s:60:"./application/common/util/yfthink/builder/widget/sheshi.html";i:1528786469;s:61:"./application/common/util/yfthink/builder/widget/address.html";i:1528773758;s:62:"./application/common/util/yfthink/builder/widget/yaddress.html";i:1528773780;s:57:"./application/common/util/yfthink/builder/widget/map.html";i:1528967264;s:61:"./application/common/util/yfthink/builder/widget/modules.html";i:1528771646;s:63:"./application/common/util/yfthink/builder/widget/timeprice.html";i:1529373393;s:61:"./application/common/util/yfthink/builder/widget/tuikuan.html";i:1529566738;s:60:"./application/common/util/yfthink/builder/widget/coupon.html";i:1529030231;s:61:"./application/common/util/yfthink/builder/widget/choices.html";i:1530756046;s:57:"./application/common/util/yfthink/builder/javascript.html";i:1524315838;}*/ ?>
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
        <div class="builder formbuilder-box">
    
    <?php if(isset($extra_html['top'])): ?>
        <?php echo $extra_html['top']; endif; if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
        <div class="builder-tabs builder-tabs-link">
            <ul class="nav nav-tabs">
                <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                    <li class="<?php if($tab_nav['current_tab'] == $key) echo 'active'; ?>"><a href="<?php echo $tab['href']; ?>"><?php echo $tab['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="form-group"></div>
    <?php endif; ?>

    
    <div class="builder-container">
        <div class="row">
            <div class="col-xs-12">
                <form action="<?php echo $post_url; ?>" method="post" class="form-horizontal form form-builder">
                    <div class="form-type-list">
                        <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $k = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($k % 2 );++$k;switch($form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "static": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <p><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></p>
        </div>
    </div>
<?php break; case "num": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
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
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "textarea": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $form['name']; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></textarea>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "array": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $form['name']; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></textarea>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "password": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="password" class="form-control input password" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
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
<?php break; case "selects": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <select multiple="multiple" size="6" name="<?php echo $form['name']; ?>[]" class="form-control lyui-select select" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php $form['value'] = explode(',', $form['value']); dump($form['value']); ?>
                <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array(($form['value']), is_array($option_key)?$option_key:explode(',',$option_key))): ?> selected<?php endif; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array($option_key, $form['value'])) { echo 'selected'; } ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "icon": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group input" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $k; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i> 点击选择图标</button>
                </span>
                <input type="text" class="form-control" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $("#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $k; ?>").iconpicker({
                        icons: '[{"filter":"glass","name":"glass","selector":"fa-glass"},{"filter":"music","name":"music","selector":"fa-music"},{"filter":"search","name":"search","selector":"fa-search"},{"filter":"envelope-o","name":"envelope-o","selector":"fa-envelope-o"},{"filter":"heart","name":"heart","selector":"fa-heart"},{"filter":"star","name":"star","selector":"fa-star"},{"filter":"star-o","name":"star-o","selector":"fa-star-o"},{"filter":"user","name":"user","selector":"fa-user"},{"filter":"film","name":"film","selector":"fa-film"},{"filter":"th-large","name":"th-large","selector":"fa-th-large"},{"filter":"th","name":"th","selector":"fa-th"},{"filter":"th-list","name":"th-list","selector":"fa-th-list"},{"filter":"check","name":"check","selector":"fa-check"},{"filter":"times","name":"times","selector":"fa-times"},{"filter":"search-plus","name":"search-plus","selector":"fa-search-plus"},{"filter":"search-minus","name":"search-minus","selector":"fa-search-minus"},{"filter":"power-off","name":"power-off","selector":"fa-power-off"},{"filter":"signal","name":"signal","selector":"fa-signal"},{"filter":"cog","name":"cog","selector":"fa-cog"},{"filter":"trash-o","name":"trash-o","selector":"fa-trash-o"},{"filter":"home","name":"home","selector":"fa-home"},{"filter":"file-o","name":"file-o","selector":"fa-file-o"},{"filter":"clock-o","name":"clock-o","selector":"fa-clock-o"},{"filter":"road","name":"road","selector":"fa-road"},{"filter":"download","name":"download","selector":"fa-download"},{"filter":"arrow-circle-o-down","name":"arrow-circle-o-down","selector":"fa-arrow-circle-o-down"},{"filter":"arrow-circle-o-up","name":"arrow-circle-o-up","selector":"fa-arrow-circle-o-up"},{"filter":"inbox","name":"inbox","selector":"fa-inbox"},{"filter":"play-circle-o","name":"play-circle-o","selector":"fa-play-circle-o"},{"filter":"repeat","name":"repeat","selector":"fa-repeat"},{"filter":"refresh","name":"refresh","selector":"fa-refresh"},{"filter":"list-alt","name":"list-alt","selector":"fa-list-alt"},{"filter":"lock","name":"lock","selector":"fa-lock"},{"filter":"flag","name":"flag","selector":"fa-flag"},{"filter":"headphones","name":"headphones","selector":"fa-headphones"},{"filter":"volume-off","name":"volume-off","selector":"fa-volume-off"},{"filter":"volume-down","name":"volume-down","selector":"fa-volume-down"},{"filter":"volume-up","name":"volume-up","selector":"fa-volume-up"},{"filter":"qrcode","name":"qrcode","selector":"fa-qrcode"},{"filter":"barcode","name":"barcode","selector":"fa-barcode"},{"filter":"tag","name":"tag","selector":"fa-tag"},{"filter":"tags","name":"tags","selector":"fa-tags"},{"filter":"book","name":"book","selector":"fa-book"},{"filter":"bookmark","name":"bookmark","selector":"fa-bookmark"},{"filter":"print","name":"print","selector":"fa-print"},{"filter":"camera","name":"camera","selector":"fa-camera"},{"filter":"font","name":"font","selector":"fa-font"},{"filter":"bold","name":"bold","selector":"fa-bold"},{"filter":"italic","name":"italic","selector":"fa-italic"},{"filter":"text-height","name":"text-height","selector":"fa-text-height"},{"filter":"text-width","name":"text-width","selector":"fa-text-width"},{"filter":"align-left","name":"align-left","selector":"fa-align-left"},{"filter":"align-center","name":"align-center","selector":"fa-align-center"},{"filter":"align-right","name":"align-right","selector":"fa-align-right"},{"filter":"align-justify","name":"align-justify","selector":"fa-align-justify"},{"filter":"list","name":"list","selector":"fa-list"},{"filter":"outdent","name":"outdent","selector":"fa-outdent"},{"filter":"indent","name":"indent","selector":"fa-indent"},{"filter":"video-camera","name":"video-camera","selector":"fa-video-camera"},{"filter":"picture-o","name":"picture-o","selector":"fa-picture-o"},{"filter":"pencil","name":"pencil","selector":"fa-pencil"},{"filter":"map-marker","name":"map-marker","selector":"fa-map-marker"},{"filter":"adjust","name":"adjust","selector":"fa-adjust"},{"filter":"tint","name":"tint","selector":"fa-tint"},{"filter":"pencil-square-o","name":"pencil-square-o","selector":"fa-pencil-square-o"},{"filter":"share-square-o","name":"share-square-o","selector":"fa-share-square-o"},{"filter":"check-square-o","name":"check-square-o","selector":"fa-check-square-o"},{"filter":"arrows","name":"arrows","selector":"fa-arrows"},{"filter":"step-backward","name":"step-backward","selector":"fa-step-backward"},{"filter":"fast-backward","name":"fast-backward","selector":"fa-fast-backward"},{"filter":"backward","name":"backward","selector":"fa-backward"},{"filter":"play","name":"play","selector":"fa-play"},{"filter":"pause","name":"pause","selector":"fa-pause"},{"filter":"stop","name":"stop","selector":"fa-stop"},{"filter":"forward","name":"forward","selector":"fa-forward"},{"filter":"fast-forward","name":"fast-forward","selector":"fa-fast-forward"},{"filter":"step-forward","name":"step-forward","selector":"fa-step-forward"},{"filter":"eject","name":"eject","selector":"fa-eject"},{"filter":"chevron-left","name":"chevron-left","selector":"fa-chevron-left"},{"filter":"chevron-right","name":"chevron-right","selector":"fa-chevron-right"},{"filter":"plus-circle","name":"plus-circle","selector":"fa-plus-circle"},{"filter":"minus-circle","name":"minus-circle","selector":"fa-minus-circle"},{"filter":"times-circle","name":"times-circle","selector":"fa-times-circle"},{"filter":"check-circle","name":"check-circle","selector":"fa-check-circle"},{"filter":"question-circle","name":"question-circle","selector":"fa-question-circle"},{"filter":"info-circle","name":"info-circle","selector":"fa-info-circle"},{"filter":"crosshairs","name":"crosshairs","selector":"fa-crosshairs"},{"filter":"times-circle-o","name":"times-circle-o","selector":"fa-times-circle-o"},{"filter":"check-circle-o","name":"check-circle-o","selector":"fa-check-circle-o"},{"filter":"ban","name":"ban","selector":"fa-ban"},{"filter":"arrow-left","name":"arrow-left","selector":"fa-arrow-left"},{"filter":"arrow-right","name":"arrow-right","selector":"fa-arrow-right"},{"filter":"arrow-up","name":"arrow-up","selector":"fa-arrow-up"},{"filter":"arrow-down","name":"arrow-down","selector":"fa-arrow-down"},{"filter":"share","name":"share","selector":"fa-share"},{"filter":"expand","name":"expand","selector":"fa-expand"},{"filter":"compress","name":"compress","selector":"fa-compress"},{"filter":"plus","name":"plus","selector":"fa-plus"},{"filter":"minus","name":"minus","selector":"fa-minus"},{"filter":"asterisk","name":"asterisk","selector":"fa-asterisk"},{"filter":"exclamation-circle","name":"exclamation-circle","selector":"fa-exclamation-circle"},{"filter":"gift","name":"gift","selector":"fa-gift"},{"filter":"leaf","name":"leaf","selector":"fa-leaf"},{"filter":"fire","name":"fire","selector":"fa-fire"},{"filter":"eye","name":"eye","selector":"fa-eye"},{"filter":"eye-slash","name":"eye-slash","selector":"fa-eye-slash"},{"filter":"exclamation-triangle","name":"exclamation-triangle","selector":"fa-exclamation-triangle"},{"filter":"plane","name":"plane","selector":"fa-plane"},{"filter":"calendar","name":"calendar","selector":"fa-calendar"},{"filter":"random","name":"random","selector":"fa-random"},{"filter":"comment","name":"comment","selector":"fa-comment"},{"filter":"magnet","name":"magnet","selector":"fa-magnet"},{"filter":"chevron-up","name":"chevron-up","selector":"fa-chevron-up"},{"filter":"chevron-down","name":"chevron-down","selector":"fa-chevron-down"},{"filter":"retweet","name":"retweet","selector":"fa-retweet"},{"filter":"shopping-cart","name":"shopping-cart","selector":"fa-shopping-cart"},{"filter":"folder","name":"folder","selector":"fa-folder"},{"filter":"folder-open","name":"folder-open","selector":"fa-folder-open"},{"filter":"arrows-v","name":"arrows-v","selector":"fa-arrows-v"},{"filter":"arrows-h","name":"arrows-h","selector":"fa-arrows-h"},{"filter":"bar-chart-o","name":"bar-chart-o","selector":"fa-bar-chart-o"},{"filter":"twitter-square","name":"twitter-square","selector":"fa-twitter-square"},{"filter":"facebook-square","name":"facebook-square","selector":"fa-facebook-square"},{"filter":"camera-retro","name":"camera-retro","selector":"fa-camera-retro"},{"filter":"key","name":"key","selector":"fa-key"},{"filter":"cogs","name":"cogs","selector":"fa-cogs"},{"filter":"comments","name":"comments","selector":"fa-comments"},{"filter":"thumbs-o-up","name":"thumbs-o-up","selector":"fa-thumbs-o-up"},{"filter":"thumbs-o-down","name":"thumbs-o-down","selector":"fa-thumbs-o-down"},{"filter":"star-half","name":"star-half","selector":"fa-star-half"},{"filter":"heart-o","name":"heart-o","selector":"fa-heart-o"},{"filter":"sign-out","name":"sign-out","selector":"fa-sign-out"},{"filter":"linkedin-square","name":"linkedin-square","selector":"fa-linkedin-square"},{"filter":"thumb-tack","name":"thumb-tack","selector":"fa-thumb-tack"},{"filter":"external-link","name":"external-link","selector":"fa-external-link"},{"filter":"sign-in","name":"sign-in","selector":"fa-sign-in"},{"filter":"trophy","name":"trophy","selector":"fa-trophy"},{"filter":"github-square","name":"github-square","selector":"fa-github-square"},{"filter":"upload","name":"upload","selector":"fa-upload"},{"filter":"lemon-o","name":"lemon-o","selector":"fa-lemon-o"},{"filter":"phone","name":"phone","selector":"fa-phone"},{"filter":"square-o","name":"square-o","selector":"fa-square-o"},{"filter":"bookmark-o","name":"bookmark-o","selector":"fa-bookmark-o"},{"filter":"phone-square","name":"phone-square","selector":"fa-phone-square"},{"filter":"twitter","name":"twitter","selector":"fa-twitter"},{"filter":"facebook","name":"facebook","selector":"fa-facebook"},{"filter":"github","name":"github","selector":"fa-github"},{"filter":"unlock","name":"unlock","selector":"fa-unlock"},{"filter":"credit-card","name":"credit-card","selector":"fa-credit-card"},{"filter":"rss","name":"rss","selector":"fa-rss"},{"filter":"hdd-o","name":"hdd-o","selector":"fa-hdd-o"},{"filter":"bullhorn","name":"bullhorn","selector":"fa-bullhorn"},{"filter":"bell","name":"bell","selector":"fa-bell"},{"filter":"certificate","name":"certificate","selector":"fa-certificate"},{"filter":"hand-o-right","name":"hand-o-right","selector":"fa-hand-o-right"},{"filter":"hand-o-left","name":"hand-o-left","selector":"fa-hand-o-left"},{"filter":"hand-o-up","name":"hand-o-up","selector":"fa-hand-o-up"},{"filter":"hand-o-down","name":"hand-o-down","selector":"fa-hand-o-down"},{"filter":"arrow-circle-left","name":"arrow-circle-left","selector":"fa-arrow-circle-left"},{"filter":"arrow-circle-right","name":"arrow-circle-right","selector":"fa-arrow-circle-right"},{"filter":"arrow-circle-up","name":"arrow-circle-up","selector":"fa-arrow-circle-up"},{"filter":"arrow-circle-down","name":"arrow-circle-down","selector":"fa-arrow-circle-down"},{"filter":"globe","name":"globe","selector":"fa-globe"},{"filter":"wrench","name":"wrench","selector":"fa-wrench"},{"filter":"tasks","name":"tasks","selector":"fa-tasks"},{"filter":"filter","name":"filter","selector":"fa-filter"},{"filter":"briefcase","name":"briefcase","selector":"fa-briefcase"},{"filter":"arrows-alt","name":"arrows-alt","selector":"fa-arrows-alt"},{"filter":"users","name":"users","selector":"fa-users"},{"filter":"link","name":"link","selector":"fa-link"},{"filter":"cloud","name":"cloud","selector":"fa-cloud"},{"filter":"flask","name":"flask","selector":"fa-flask"},{"filter":"scissors","name":"scissors","selector":"fa-scissors"},{"filter":"files-o","name":"files-o","selector":"fa-files-o"},{"filter":"paperclip","name":"paperclip","selector":"fa-paperclip"},{"filter":"floppy-o","name":"floppy-o","selector":"fa-floppy-o"},{"filter":"square","name":"square","selector":"fa-square"},{"filter":"bars","name":"bars","selector":"fa-bars"},{"filter":"list-ul","name":"list-ul","selector":"fa-list-ul"},{"filter":"list-ol","name":"list-ol","selector":"fa-list-ol"},{"filter":"strikethrough","name":"strikethrough","selector":"fa-strikethrough"},{"filter":"underline","name":"underline","selector":"fa-underline"},{"filter":"table","name":"table","selector":"fa-table"},{"filter":"magic","name":"magic","selector":"fa-magic"},{"filter":"truck","name":"truck","selector":"fa-truck"},{"filter":"pinterest","name":"pinterest","selector":"fa-pinterest"},{"filter":"pinterest-square","name":"pinterest-square","selector":"fa-pinterest-square"},{"filter":"google-plus-square","name":"google-plus-square","selector":"fa-google-plus-square"},{"filter":"google-plus","name":"google-plus","selector":"fa-google-plus"},{"filter":"money","name":"money","selector":"fa-money"},{"filter":"caret-down","name":"caret-down","selector":"fa-caret-down"},{"filter":"caret-up","name":"caret-up","selector":"fa-caret-up"},{"filter":"caret-left","name":"caret-left","selector":"fa-caret-left"},{"filter":"caret-right","name":"caret-right","selector":"fa-caret-right"},{"filter":"columns","name":"columns","selector":"fa-columns"},{"filter":"sort","name":"sort","selector":"fa-sort"},{"filter":"sort-asc","name":"sort-asc","selector":"fa-sort-asc"},{"filter":"sort-desc","name":"sort-desc","selector":"fa-sort-desc"},{"filter":"envelope","name":"envelope","selector":"fa-envelope"},{"filter":"linkedin","name":"linkedin","selector":"fa-linkedin"},{"filter":"undo","name":"undo","selector":"fa-undo"},{"filter":"gavel","name":"gavel","selector":"fa-gavel"},{"filter":"tachometer","name":"tachometer","selector":"fa-tachometer"},{"filter":"comment-o","name":"comment-o","selector":"fa-comment-o"},{"filter":"comments-o","name":"comments-o","selector":"fa-comments-o"},{"filter":"bolt","name":"bolt","selector":"fa-bolt"},{"filter":"sitemap","name":"sitemap","selector":"fa-sitemap"},{"filter":"umbrella","name":"umbrella","selector":"fa-umbrella"},{"filter":"clipboard","name":"clipboard","selector":"fa-clipboard"},{"filter":"lightbulb-o","name":"lightbulb-o","selector":"fa-lightbulb-o"},{"filter":"exchange","name":"exchange","selector":"fa-exchange"},{"filter":"cloud-download","name":"cloud-download","selector":"fa-cloud-download"},{"filter":"cloud-upload","name":"cloud-upload","selector":"fa-cloud-upload"},{"filter":"user-md","name":"user-md","selector":"fa-user-md"},{"filter":"stethoscope","name":"stethoscope","selector":"fa-stethoscope"},{"filter":"suitcase","name":"suitcase","selector":"fa-suitcase"},{"filter":"bell-o","name":"bell-o","selector":"fa-bell-o"},{"filter":"coffee","name":"coffee","selector":"fa-coffee"},{"filter":"cutlery","name":"cutlery","selector":"fa-cutlery"},{"filter":"file-text-o","name":"file-text-o","selector":"fa-file-text-o"},{"filter":"building-o","name":"building-o","selector":"fa-building-o"},{"filter":"hospital-o","name":"hospital-o","selector":"fa-hospital-o"},{"filter":"ambulance","name":"ambulance","selector":"fa-ambulance"},{"filter":"medkit","name":"medkit","selector":"fa-medkit"},{"filter":"fighter-jet","name":"fighter-jet","selector":"fa-fighter-jet"},{"filter":"beer","name":"beer","selector":"fa-beer"},{"filter":"h-square","name":"h-square","selector":"fa-h-square"},{"filter":"plus-square","name":"plus-square","selector":"fa-plus-square"},{"filter":"angle-double-left","name":"angle-double-left","selector":"fa-angle-double-left"},{"filter":"angle-double-right","name":"angle-double-right","selector":"fa-angle-double-right"},{"filter":"angle-double-up","name":"angle-double-up","selector":"fa-angle-double-up"},{"filter":"angle-double-down","name":"angle-double-down","selector":"fa-angle-double-down"},{"filter":"angle-left","name":"angle-left","selector":"fa-angle-left"},{"filter":"angle-right","name":"angle-right","selector":"fa-angle-right"},{"filter":"angle-up","name":"angle-up","selector":"fa-angle-up"},{"filter":"angle-down","name":"angle-down","selector":"fa-angle-down"},{"filter":"desktop","name":"desktop","selector":"fa-desktop"},{"filter":"laptop","name":"laptop","selector":"fa-laptop"},{"filter":"tablet","name":"tablet","selector":"fa-tablet"},{"filter":"mobile","name":"mobile","selector":"fa-mobile"},{"filter":"circle-o","name":"circle-o","selector":"fa-circle-o"},{"filter":"quote-left","name":"quote-left","selector":"fa-quote-left"},{"filter":"quote-right","name":"quote-right","selector":"fa-quote-right"},{"filter":"spinner","name":"spinner","selector":"fa-spinner"},{"filter":"circle","name":"circle","selector":"fa-circle"},{"filter":"reply","name":"reply","selector":"fa-reply"},{"filter":"github-alt","name":"github-alt","selector":"fa-github-alt"},{"filter":"folder-o","name":"folder-o","selector":"fa-folder-o"},{"filter":"folder-open-o","name":"folder-open-o","selector":"fa-folder-open-o"},{"filter":"smile-o","name":"smile-o","selector":"fa-smile-o"},{"filter":"frown-o","name":"frown-o","selector":"fa-frown-o"},{"filter":"meh-o","name":"meh-o","selector":"fa-meh-o"},{"filter":"gamepad","name":"gamepad","selector":"fa-gamepad"},{"filter":"keyboard-o","name":"keyboard-o","selector":"fa-keyboard-o"},{"filter":"flag-o","name":"flag-o","selector":"fa-flag-o"},{"filter":"flag-checkered","name":"flag-checkered","selector":"fa-flag-checkered"},{"filter":"terminal","name":"terminal","selector":"fa-terminal"},{"filter":"code","name":"code","selector":"fa-code"},{"filter":"reply-all","name":"reply-all","selector":"fa-reply-all"},{"filter":"mail-reply-all","name":"mail-reply-all","selector":"fa-mail-reply-all"},{"filter":"star-half-o","name":"star-half-o","selector":"fa-star-half-o"},{"filter":"location-arrow","name":"location-arrow","selector":"fa-location-arrow"},{"filter":"crop","name":"crop","selector":"fa-crop"},{"filter":"code-fork","name":"code-fork","selector":"fa-code-fork"},{"filter":"chain-broken","name":"chain-broken","selector":"fa-chain-broken"},{"filter":"question","name":"question","selector":"fa-question"},{"filter":"info","name":"info","selector":"fa-info"},{"filter":"exclamation","name":"exclamation","selector":"fa-exclamation"},{"filter":"superscript","name":"superscript","selector":"fa-superscript"},{"filter":"subscript","name":"subscript","selector":"fa-subscript"},{"filter":"eraser","name":"eraser","selector":"fa-eraser"},{"filter":"puzzle-piece","name":"puzzle-piece","selector":"fa-puzzle-piece"},{"filter":"microphone","name":"microphone","selector":"fa-microphone"},{"filter":"microphone-slash","name":"microphone-slash","selector":"fa-microphone-slash"},{"filter":"shield","name":"shield","selector":"fa-shield"},{"filter":"calendar-o","name":"calendar-o","selector":"fa-calendar-o"},{"filter":"fire-extinguisher","name":"fire-extinguisher","selector":"fa-fire-extinguisher"},{"filter":"rocket","name":"rocket","selector":"fa-rocket"},{"filter":"maxcdn","name":"maxcdn","selector":"fa-maxcdn"},{"filter":"chevron-circle-left","name":"chevron-circle-left","selector":"fa-chevron-circle-left"},{"filter":"chevron-circle-right","name":"chevron-circle-right","selector":"fa-chevron-circle-right"},{"filter":"chevron-circle-up","name":"chevron-circle-up","selector":"fa-chevron-circle-up"},{"filter":"chevron-circle-down","name":"chevron-circle-down","selector":"fa-chevron-circle-down"},{"filter":"html5","name":"html5","selector":"fa-html5"},{"filter":"css3","name":"css3","selector":"fa-css3"},{"filter":"anchor","name":"anchor","selector":"fa-anchor"},{"filter":"unlock-alt","name":"unlock-alt","selector":"fa-unlock-alt"},{"filter":"bullseye","name":"bullseye","selector":"fa-bullseye"},{"filter":"ellipsis-h","name":"ellipsis-h","selector":"fa-ellipsis-h"},{"filter":"ellipsis-v","name":"ellipsis-v","selector":"fa-ellipsis-v"},{"filter":"rss-square","name":"rss-square","selector":"fa-rss-square"},{"filter":"play-circle","name":"play-circle","selector":"fa-play-circle"},{"filter":"ticket","name":"ticket","selector":"fa-ticket"},{"filter":"minus-square","name":"minus-square","selector":"fa-minus-square"},{"filter":"minus-square-o","name":"minus-square-o","selector":"fa-minus-square-o"},{"filter":"level-up","name":"level-up","selector":"fa-level-up"},{"filter":"level-down","name":"level-down","selector":"fa-level-down"},{"filter":"check-square","name":"check-square","selector":"fa-check-square"},{"filter":"pencil-square","name":"pencil-square","selector":"fa-pencil-square"},{"filter":"external-link-square","name":"external-link-square","selector":"fa-external-link-square"},{"filter":"share-square","name":"share-square","selector":"fa-share-square"},{"filter":"compass","name":"compass","selector":"fa-compass"},{"filter":"caret-square-o-down","name":"caret-square-o-down","selector":"fa-caret-square-o-down"},{"filter":"caret-square-o-up","name":"caret-square-o-up","selector":"fa-caret-square-o-up"},{"filter":"caret-square-o-right","name":"caret-square-o-right","selector":"fa-caret-square-o-right"},{"filter":"eur","name":"eur","selector":"fa-eur"},{"filter":"gbp","name":"gbp","selector":"fa-gbp"},{"filter":"usd","name":"usd","selector":"fa-usd"},{"filter":"inr","name":"inr","selector":"fa-inr"},{"filter":"jpy","name":"jpy","selector":"fa-jpy"},{"filter":"rub","name":"rub","selector":"fa-rub"},{"filter":"krw","name":"krw","selector":"fa-krw"},{"filter":"btc","name":"btc","selector":"fa-btc"},{"filter":"file","name":"file","selector":"fa-file"},{"filter":"file-text","name":"file-text","selector":"fa-file-text"},{"filter":"sort-alpha-asc","name":"sort-alpha-asc","selector":"fa-sort-alpha-asc"},{"filter":"sort-alpha-desc","name":"sort-alpha-desc","selector":"fa-sort-alpha-desc"},{"filter":"sort-amount-asc","name":"sort-amount-asc","selector":"fa-sort-amount-asc"},{"filter":"sort-amount-desc","name":"sort-amount-desc","selector":"fa-sort-amount-desc"},{"filter":"sort-numeric-asc","name":"sort-numeric-asc","selector":"fa-sort-numeric-asc"},{"filter":"sort-numeric-desc","name":"sort-numeric-desc","selector":"fa-sort-numeric-desc"},{"filter":"thumbs-up","name":"thumbs-up","selector":"fa-thumbs-up"},{"filter":"thumbs-down","name":"thumbs-down","selector":"fa-thumbs-down"},{"filter":"youtube-square","name":"youtube-square","selector":"fa-youtube-square"},{"filter":"youtube","name":"youtube","selector":"fa-youtube"},{"filter":"xing","name":"xing","selector":"fa-xing"},{"filter":"xing-square","name":"xing-square","selector":"fa-xing-square"},{"filter":"youtube-play","name":"youtube-play","selector":"fa-youtube-play"},{"filter":"dropbox","name":"dropbox","selector":"fa-dropbox"},{"filter":"stack-overflow","name":"stack-overflow","selector":"fa-stack-overflow"},{"filter":"instagram","name":"instagram","selector":"fa-instagram"},{"filter":"flickr","name":"flickr","selector":"fa-flickr"},{"filter":"adn","name":"adn","selector":"fa-adn"},{"filter":"bitbucket","name":"bitbucket","selector":"fa-bitbucket"},{"filter":"bitbucket-square","name":"bitbucket-square","selector":"fa-bitbucket-square"},{"filter":"tumblr","name":"tumblr","selector":"fa-tumblr"},{"filter":"tumblr-square","name":"tumblr-square","selector":"fa-tumblr-square"},{"filter":"long-arrow-down","name":"long-arrow-down","selector":"fa-long-arrow-down"},{"filter":"long-arrow-up","name":"long-arrow-up","selector":"fa-long-arrow-up"},{"filter":"long-arrow-left","name":"long-arrow-left","selector":"fa-long-arrow-left"},{"filter":"long-arrow-right","name":"long-arrow-right","selector":"fa-long-arrow-right"},{"filter":"apple","name":"apple","selector":"fa-apple"},{"filter":"windows","name":"windows","selector":"fa-windows"},{"filter":"android","name":"android","selector":"fa-android"},{"filter":"linux","name":"linux","selector":"fa-linux"},{"filter":"dribbble","name":"dribbble","selector":"fa-dribbble"},{"filter":"skype","name":"skype","selector":"fa-skype"},{"filter":"foursquare","name":"foursquare","selector":"fa-foursquare"},{"filter":"trello","name":"trello","selector":"fa-trello"},{"filter":"female","name":"female","selector":"fa-female"},{"filter":"male","name":"male","selector":"fa-male"},{"filter":"gittip","name":"gittip","selector":"fa-gittip"},{"filter":"sun-o","name":"sun-o","selector":"fa-sun-o"},{"filter":"moon-o","name":"moon-o","selector":"fa-moon-o"},{"filter":"archive","name":"archive","selector":"fa-archive"},{"filter":"bug","name":"bug","selector":"fa-bug"},{"filter":"vk","name":"vk","selector":"fa-vk"},{"filter":"weibo","name":"weibo","selector":"fa-weibo"},{"filter":"renren","name":"renren","selector":"fa-renren"},{"filter":"pagelines","name":"pagelines","selector":"fa-pagelines"},{"filter":"stack-exchange","name":"stack-exchange","selector":"fa-stack-exchange"},{"filter":"arrow-circle-o-right","name":"arrow-circle-o-right","selector":"fa-arrow-circle-o-right"},{"filter":"arrow-circle-o-left","name":"arrow-circle-o-left","selector":"fa-arrow-circle-o-left"},{"filter":"caret-square-o-left","name":"caret-square-o-left","selector":"fa-caret-square-o-left"},{"filter":"dot-circle-o","name":"dot-circle-o","selector":"fa-dot-circle-o"},{"filter":"wheelchair","name":"wheelchair","selector":"fa-wheelchair"},{"filter":"vimeo-square","name":"vimeo-square","selector":"fa-vimeo-square"},{"filter":"try","name":"try","selector":"fa-try"},{"filter":"plus-square-o","name":"plus-square-o","selector":"fa-plus-square-o"}]'
                    });
                });
            </script>
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
<?php break; case "picture": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "picture_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.path);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.id);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.path);
                            } else {
                                input.val(response.path);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.path);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "file": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "files": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                                 if (is_array($form['value'])) {
                                    $files = $form['value'];
                                    $input_value = implode(',', $form['value']);
                                } else {
                                    $files = explode(',', $form['value']);
                                    $input_value = $form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage) {
                        var $li = $( '#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css( 'width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $('#'+file.id).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if ( !$error.length ) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "media": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传视频</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file, response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "medias": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                                 if (is_array($form['value'])) {
                                    $files = $form['value'];
                                    $input_value = implode(',', $form['value']);
                                } else {
                                    $files = explode(',', $form['value']);
                                    $input_value = $form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file, response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $( '#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "summernote": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea name="<?php echo $form['name']; ?>" rwos="5" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $k; ?>" class="form-control" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>
            </textarea>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/summernote/summernote.css">
            <style type="text/css" media="screen">
                .note-editor .modal-body .form-group {
                    margin: 0;
                }
            </style>
            <script type="text/javascript" src="__PUBLIC__/libs/summernote/summernote.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $k; ?>').summernote({
                        height: 300,
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "kindeditor": ?>
    <style>
        .ke-container{width:70% !important;}
    </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" >
            <textarea name="<?php echo $form['name']; ?>" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $k; ?>" style="width:70%" class="form-control " <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>
            </textarea><br>
           
            <script type="text/javascript" src="__PUBLIC__/libs/kindeditor/kindeditor-min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    KindEditor.ready(function(K) {
                        kindeditor_<?php echo $k; ?> = K.create('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $k; ?>', {
                            allowFileManager : true,
                            filePostName : 'file',
                            cssPath : [
                                '__LYUI__/css/lyui.min.css',
                                '__PUBLIC__/libs/kindeditor/plugins/code/prettify.css'
                            ],
                            width : '100%',
                            height : '500px',
                            resizeType: 1,
                            pasteType : 2,
                            filterMode: <?php if(MODULE_MARK === 'Admin') {echo 'false';} else {echo 'true';} ?>,
                            urlType : "domain",
                            fileManagerJson : '<?php echo U(MODULE_MARK."/Upload/fileManager", '', true, true); ?>',
                            uploadJson : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "kindeditor", "module_name" => request()->module()), true, true); ?>',
                            extraFileUploadParams: {
                                session_id : '<?php echo session_id(); ?>'
                            },
                            afterBlur: function(){this.sync();}
                        });
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "editormd": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div name="<?php echo $form['name']; ?>" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>" style="z-index: 1000;" class="form-control" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>></div>
            <pre id="default_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>" class="hidden"><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></pre>

            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/editormd/css/editormd.min.css">
            <script type="text/javascript" src="__PUBLIC__/libs/editormd/js/editormd.min.js"></script>

            <script type="text/javascript">
                //解码
                function html_decode(str){
                    var s = "";
                    if (str.length == 0) return "";
                    s = str.replace(/&amp;/g, "&");
                    s = s.replace(/&lt;/g, "<");
                    s = s.replace(/&gt;/g, ">");
                    s = s.replace(/&nbsp;/g, " ");
                    s = s.replace(/&#39;/g, "\'");
                    s = s.replace(/&quot;/g, "\"");
                    s = s.replace(/<br>/g, "\n");
                    return s;
                }

                $(function(){
                    var editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>_content = html_decode($('#default_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>').html());
                    var editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?> = editormd({
                        id                : '<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>',
                        path              : '__PUBLIC__/libs/editormd/lib/',
                        pluginPath        : '__PUBLIC__/libs/editormd/plugins/',
                        name              : '<?php echo $form['name']; ?>',
                        markdown          : editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>_content,
                        imageUpload       : true,
                        imageFormats      : ["jpg", "jpeg", "gif", "png", "bmp"],
                        imageUploadURL    : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "editormd", "module_name" => request()->module()), true, true); ?>',
                        placeholder       : '有范科技积木式云平台！',
                        width             : '100%',
                        height            : 640,
                        watch             : <?php if(MODULE_MARK === 'Admin'){ echo 'false';} else {echo 'true';} ?>,
                        codeFold          : true,
                        htmlDecode        : false,
                        toolbarAutoFixed  : false,
                        crossDomainUpload : true
                    });
                });
            </script>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "tags": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input.css">
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>'), tagsPre = [];
                    if (tags.length > 0) {
                        var items = tags.val().split(','), result = [];
                        for (var i = 0; i < items.length; i ++) {
                            var tag = items[i];
                            if (!tag) {
                                continue;
                            }
                            tagsPre.push({
                                id      :   tag,
                                title   :   tag
                            });
                        }
                    }
                    tags.tokenInput("<?php echo $form['extra']['self']['search']; ?>",{
                        propertyToSearch    :   'title',
                        tokenValue          :   'title',
                        searchDelay         :   0,
                        tokenLimit          :   <?php echo $form['extra']['self']['limit'] ? : 5; ?>,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   <?php echo $form['extra']['self']['free'] ? : true; ?>, // 是否允许添加搜索结果中没有的数据
                        hintText            :   '请输入标签名',
                        noResultsText       :   '此标签不存在, 按回车创建',
                        searchingText       :   '查找中...',
                        prePopulate         :   tagsPre,
                        theme               :   'bootstrap',
                        onAdd: function (item){  //新增系统没有的标签时提交到数据库
                            <?php if($form['extra']['self']['new']): ?>
                                $.post("<?php echo $form['extra']['self']['new']; ?>", {'title': item.title});
                            <?php endif; ?>
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "board": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" name="<?php echo $form['name']; ?>" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
            <div class="row board_list boards_<?php echo $k; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <div class="container-fluid">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                        <div class="panel panel-default board col-xs-12 col-sm-3" data-id="<?php echo $option_key; ?>">
                            <div class="panel-heading">
                                <strong><?php echo $option['title']; ?></strong>
                            </div>
                            <div class="list-group dragsort_<?php echo $k; ?>" data-group="<?php echo $option_key; ?>">
                                <?php if(is_array($option['field']) || $option['field'] instanceof \think\Collection || $option['field'] instanceof \think\Paginator): if( count($option['field'])==0 ) : echo "" ;else: foreach($option['field'] as $option_field_key=>$option_field): ?>
                                    <div class="list-group-item">
                                        <em data="<?php echo $field['id']; ?>"><?php echo $option_field; ?></em>
                                        <input type="hidden" name="<?php echo $form['name']; ?>[<?php echo $option_key; ?>][]" value="<?php echo $option_field_key; ?>"/>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <script type="text/javascript">
                //拖曳插件初始化
                $(function(){
                    $(".dragsort_<?php echo $k; ?>").dragsort({
                         dragSelector:'div',
                         placeHolderTemplate: '<div class="clearfix draging-place">&nbsp;</div>',
                         dragBetween:true, //允许拖动到任意地方
                         dragEnd:function(){
                             var self = $(this);
                             self.find('input').attr('name', '<?php echo $form['name']; ?>[' + self.closest('.dragsort_<?php echo $k; ?>').data('group') + '][]');
                         }
                     });
                });
            </script>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "choice": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmember'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此人</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "huxing": ?>
	<style>
		.eeee{line-height: 34px;}
	</style>


    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<div class="row">
        		<div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="ping" value="<?php echo $form['value']['ping']; ?>"><span class="col-xs-4 eeee">平</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="room" value="<?php echo $form['value']['room']; ?>"><span class="col-xs-4 eeee">室</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="office" value="<?php echo $form['value']['office']; ?>"><span class="col-xs-4 eeee">厅</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="guard" value="<?php echo $form['value']['guard']; ?>"><span class="col-xs-4 eeee">卫</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="kitchen" value="<?php echo $form['value']['kitchen']; ?>"><span class="col-xs-4 eeee">厨</span>
			  </div>
			   <div class="col-xs-2">
			    <span class="col-xs-4 eeee" style="text-align: right;">可住</span><input type="text" class="form-control col-xs-4"  name="canlive" value="<?php echo $form['value']['canlive']; ?>"><span class="col-xs-2 eeee">人</span>
			  </div>
			  <div class="col-xs-2">
			    <span class="col-xs-2 eeee" >共</span><input type="text" class="form-control col-xs-4"  name="bed" value="<?php echo $form['value']['bed']; ?>"><span class="col-xs-4 eeee">张床</span>
			  </div>


			</div>
        </div>
    </div>
<?php break; case "sheshi": ?>
    <style>
        .right{display:flex;}
        .kdawi{width:33%;}
    </style>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
<!-- 
<?php

    echo '<pre>';


var_dump($form);
    echo '</pre>';


?> -->
     <script type="text/javascript">
        $(function(){
            $('.auth input[type="checkbox"]').on('change',function(){
                //遍历选中当前权限的子权限
                $('.'+$(this).attr('data-module-name')+' .auth'+$(this).val()).find('input').prop('checked',this.checked);

                //遍历选中当前权限的父权限
                if ($(this).is(':checked') == true) {
                    var $fix = $(this);
                    while ($fix.length > 0) {
                        var $tmp = $fix.closest('div').prev('label').find('input');
                        console.log($tmp);
                        if ($tmp.length > 0) {
                            $tmp.attr("checked",true);
                            $fix = $tmp;
                        } else {
                            break;
                        }
                    }
                }
            });
        });
    </script>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
                <div class="auth">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;$module_name = $key; ?>
                        <div class="<?php echo $vo1['id']; ?>">
                            <div class="lyui-control lyui-checkbox">
                                <label class="checkbox-label checkbox-inline">
                                    <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo1['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo1['id']; ?>">
                                    <span class="lyui-control-indicator"></span>
                                    <span> <?php echo $vo1['title']; ?></span>
                                </label>
                                <div class="auth<?php echo $vo1['id']; ?>" style="padding-left: 25px;margin-top: 10px;">
                                    <?php if(is_array($vo1['zz']) || $vo1['zz'] instanceof \think\Collection || $vo1['zz'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['zz'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                        <label class="checkbox-label checkbox-inline">
                                            <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo2['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo2['id']; ?>">
                                            <span class="lyui-control-indicator"></span>
                                            <span> <?php echo $vo2['title']; ?></span>
                                        </label>
                                      
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
     
    </div>

<?php break; case "address": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
            <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
            <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
          
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址">
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
            var city=$("#cityid").val();
            var district=$("#districtid").val();
            var selCity = $("#seleAreaNext")[0];
            for (var i = selCity.length - 1; i >= 0; i--) {
                selCity.options[i] = null;
            }
            var opt = new Option("请选择省", "-1");
            selCity.options.add(opt);
            // 添加省
            $.ajax({
                type : "post",
                url : "<?php echo U('admin/index/getprovince'); ?>",
                dataType : "json",
                success : function(data) {
                    if (data != null && data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            var opt = new Option(data[i].province_name,
                                    data[i].province_id);
                            selCity.options.add(opt);
                        }
                       // if(province){
                       //  $("#seleAreaNext").val(province);
                       // }
                       
                    }
                }
            });

          
    
            // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }

                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                
                                <?php case "yaddress": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
    <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
    <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
    <input type="hidden" id="adressid" value="1" />
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址"}>
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
    var city=$("#cityid").val();
    var district=$("#districtid").val();
    var selProvince=$("#seleAreaNext")[0];
    for (var i = selProvince.length - 1; i >= 0; i--) {
        selProvince.options[i] = null;
    }
    var opt = new Option("请选择省", "-1");
    selProvince.options.add(opt);
        //添加省
        $.ajax({
            type : "post",
            url : "<?php echo U('admin/index/getprovince'); ?>",
            dataType : "json",
            success : function(data) {
                if (data != null && data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        var opt = new Option(data[i].province_name, data[i].province_id);
                        selProvince.options.add(opt);
                    }
                    $("#seleAreaNext").val(province);
                }
            }
        });
    var address_id=$("#adressid").val();
    if(address_id!=0){
        //查询这个收货地址的详细地址
        //加载市
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getCity'); ?>",
                    dataType: "json",
                    data: { "province_id": province },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name, data[i].city_id);
                                selCity.options.add(opt);
                            }
                        $("#seleAreaThird").val(city);
                        }
                    }
                });
                //加载区县
            var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区/县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType: "json",
                    data: { "city_id": city },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name, data[i].district_id);
                                selArea.options.add(opt);
                            }
                        $("#seleAreaFouth").val(district);
                        }
                    }
                });
    }
                    // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }
                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                
                                <?php case "map": ?>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=ASOBZ-U2RK6-PZQSM-ESQWD-7XO3J-TAFF3"></script>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<input type="hidden" name="latitude" id="latitude" value="<?php echo $form['value']['latitude']; ?>">
			<input type="hidden" name="longitude" id="longitude" value="<?php echo $form['value']['longitude']; ?>">
			<div id="container" style="height: 500px; width:70%;"></div>

        </div>
    </div>
   
    <script>
    	var mymap={
			map:'',
			markerArray:[],
			lat:"<?php echo (isset($form['value']['latitude']) && ($form['value']['latitude'] !== '')?$form['value']['latitude']:'39.908859'); ?>",//初始纬度
			lng:"<?php echo (isset($form['value']['longitude']) && ($form['value']['longitude'] !== '')?$form['value']['longitude']:'116.397392'); ?>",//初始经度
			conId:"container",
			jsonArr:[],
			latVal:"latitude",//点击地图后存放纬度INPUT的ID
			lngVal:"longitude",//点击地图后存放经度INPUT的ID
			zoom:12//地图初始缩放比例
		}
    </script>
     <script src="/public/zhuzhuangtu/myqqmap.js"></script>
<?php break; case "modules": ?>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="layui-form" >
            <div class="layui-form-item">
                  <div class="lyui-input-inline">
                    <input type="hidden" id="citys" name="<?php echo $form['name']; ?>" value="<?php echo $form['value']; ?>">
                    <select style="width:100%;" class="form-control lyui-select select" lay-filter="city" lay-verify="required" lay-search="">
                      <option value="">直接选择或搜索选择</option>
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
        </div>

        </div>
    </div>

<script>
layui.use(['form', 'layedit', 'laydate'], function(){

   var  form=layui.form;
  
    form.on('select(city)',function(res){
        $('#citys').val(res.value)
    })
  
  
});
// $("body").on("keyup",".layui-input",function(){
//       $.ajax({
//         url:"<?php echo U('admin/room/getcity'); ?>",
//         type:"post",
//         data:data.field,
//         dataType:'JSON',
//         success:function(res){
            
//             console.log(res)   
//         },
//         error:function(){
//             layer.alert("网络异常")
//         }
//     })
// })

</script>

<?php break; case "timeprice": ?>
	<script src="__PUBLIC__/libs/datetime/dateTime2.js" type="text/javascript" defer="defer"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/datetime/dateTime2.css"/>
    <style type="text/css">
		.dateTime{ position:relative; width:100%; border: 1px solid #ddd; overflow: hidden;}
	</style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
           <div class="dateTime">
    	
		   	    <div id="con" style="width:60%; float:left; overflow: hidden; min-width: 400px;"></div>
			   	<div class="set" style="width:30%; float:left; overflow: hidden;">
			   		<div class="setLock">
			   			<div class="setTime_row">锁房设置：</div>
			   			<input type="checkbox"  name="" id="lock" value="" />锁房
			   			
			   		</div>
			   		<div class="setTime">
			   			<div class="setTime_row">时段设置：</div>
			   			<div class="setTime_row">
			   				
				   		    <select name="s1s" id="s1s" >
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s1e" id="s1e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s1t">%
				   		   
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s2s" id="s2s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s2e" id="s2e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s2t">%
				   		    
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s3s" id="s3s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s3e" id="s3e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s3t">%
				   		    
				   		</div>
				   		
				   		<div class="setTime_row">
				   		    <select name="s4s" id="s4s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s4e" id="s4e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s4t">%
				   		</div>
				   		
				   		
				   		
			   		</div>
			   		<div class="setTotal">
			   			<div class="setTime_row">房价设置：</div>
			   		    <input type="text" id="total" placeholder="请输入价格">元
			   		</div>
			   		<div class="setTime_row"><a onclick="cz.tj()">设置</a></div>
			   	</div>
		   	</div>
        </div>
    </div>
    <input type="hidden" name="<?php echo $form['name']; ?>" id="dateprice" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
    <script>
	layui.use(['form', 'layedit', 'laydate'], function(){
 
  
  
});
		var mydate={
			  hdinput:"<?php echo $form['name']; ?>",
			  con:"con",
		      picker:"",//V-HTML
		      startDate:"",//开始日期
		      endDate:"",// 结束日期
		     startObj:"",//开始LI对象
		      endObj:"",//结束LI对象
		}
	</script>	
<?php break; case "tuikuan": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" name="checkout" <?php if($form['value']['checkout'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="checkout" value="<?php echo (isset($form['value']['checkout']) && ($form['value']['checkout'] !== '')?$form['value']['checkout']:''); ?>">
                </label>
            </div><br><br>
            <div id="dsgj" style="display:none;color:#888;">入住 
                    <select name="day" id="" style="color:red;border:0px;">
                        <option value="1" <?php if($form['value']['day'] == 1): ?>selected<?php endif; ?>>前1天</option>
                        <option value="3" <?php if($form['value']['day'] == 3): ?>selected<?php endif; ?>>前3天</option>
                        <option value="7" <?php if($form['value']['day'] == 7): ?>selected<?php endif; ?>>前7天</option>
                        <option value="15" <?php if($form['value']['day'] == 15): ?>selected<?php endif; ?>>前15天</option>
                        <option value="30" <?php if($form['value']['day'] == 30): ?>selected<?php endif; ?>>前30天</option>
                    </select>
            12点前取消订单，房费可全额退还；<br><br>之后取消订单，收取未住房费的
                    <select name="percent" id="" style="color:red;border:0px;">
                        <option value="10" <?php if($form['value']['percent'] == 10): ?>selected<?php endif; ?>>10%</option>
                        <option value="20" <?php if($form['value']['percent'] == 20): ?>selected<?php endif; ?>>20%</option>
                        <option value="30" <?php if($form['value']['percent'] == 30): ?>selected<?php endif; ?>>30%</option>
                        <option value="40" <?php if($form['value']['percent'] == 40): ?>selected<?php endif; ?>>40%</option>
                        <option value="50" <?php if($form['value']['percent'] == 50): ?>selected<?php endif; ?>>50%</option>
                        <option value="60" <?php if($form['value']['percent'] == 60): ?>selected<?php endif; ?>>60%</option>
                        <option value="70" <?php if($form['value']['percent'] == 70): ?>selected<?php endif; ?>>70%</option>
                        <option value="80" <?php if($form['value']['percent'] == 80): ?>selected<?php endif; ?>>80%</option>
                        <option value="90" <?php if($form['value']['percent'] == 90): ?>selected<?php endif; ?>>90%</option>
                        <option value="100" <?php if($form['value']['percent'] == 100): ?>selected<?php endif; ?>>100%</option>
                    </select>作为违约金支付给房东。（包含未入住和提现离店）</div>
           
            <a href="tuikuan.html"></a>
            <script type="text/javascript">
                if('<?php echo $form['value']['checkout']; ?>' == 1){
                    $('#dsgj').show();
                }
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                            $('#dsgj').show();
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                             $('#dsgj').hide();
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "coupon": ?>
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
                            <input type="radio"  onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                    <div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label">优惠内容：</label>
        <div class="right">
            <div class="" id="yhcon" style="width:100%;">
              <span style="line-height: 34px;">请先选择优惠券类型</span>
            </div>
        </div>
    </div>
    <script>
    	if('<?php echo $form['value']['type']; ?>'){
    		changein('<?php echo $form['value']['type']; ?>')
    	}

    	function changein(id) {
    	
        var youhui1 = ' <span style="float:left;line-height:34px;padding-right:10px;">满</span> <input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_price" value="<?php echo $form['value']['mj_price']; ?>"> <span style="float:left;line-height: 34px;padding:0 10px;">减</span><input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_hui" value="<?php echo $form['value']['mj_hui']; ?>">';
        var youhui2 = '<input type="text" style="width:10%;float: left;" class="text input-2 form-control" name="zhekou" value="<?php echo $form['value']['zhekou']; ?>"> <span  style="float:left;line-height:34px;padding-left:10px;">折</span>';
        if (id == 1) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui1;
        }else if (id == 2) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui2;
        }
      }
    </script>
<?php break; case "choices": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmembers'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此房东</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "group": ?>
                                    <div class="form-group"></div>
                                    <div class="builder-tabs builder-tabs-tab form-group">
                                        <?php $group_k = 0; ?>
                                        <ul class="nav nav-tabs">
                                            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $group_k = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($group_k % 2 );++$group_k;?>
                                                <li data-tab="tab<?php echo $group_k; ?>" <?php if($group_k == '1'): ?>class="active"<?php endif; ?>><a href="#tab<?php echo $group_k; ?>" data-toggle="tab"><?php echo $li['title']; ?></a></li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                    <div class="builder-container">
                                        <div class="tab-content">
                                            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $group_k = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($group_k % 2 );++$group_k;?>
                                                <div id="tab<?php echo $group_k; ?>" class='tab-pane <?php if($group_k == '1'): ?>active<?php endif; ?> tab<?php echo $group_k; ?>'>
                                                    <div class="group">
                                                        <?php if(is_array($tab['options']) || $tab['options'] instanceof \think\Collection || $tab['options'] instanceof \think\Paginator): $tab_k = 0; $__LIST__ = $tab['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab_form): $mod = ($tab_k % 2 );++$tab_k;switch($tab_form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "static": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <p><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></p>
        </div>
    </div>
<?php break; case "num": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "uid": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($tab_form['value']) {
                    $map['id'] = array('in', $tab_form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>')
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($tab_form['value']) {
                    $map['id'] = array('in', $tab_form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>')
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "textarea": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $tab_form['name']; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></textarea>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "array": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $tab_form['name']; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></textarea>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "password": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="password" class="form-control input password" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "toggle": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>" type="checkbox" <?php if($tab_form['value'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <input id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input" type="hidden" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                </label>
            </div>
            <a href="toggle.html"></a>
            <script type="text/javascript">
                $(function(){
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input').val('1');
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input').val('0');
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): ?>
                <div class="radio-inline lyui-control lyui-radio">
                    <label for="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>">
                        <?php if(is_array($option)): ?>
                            <input type="radio" id="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $tab_form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($tab_form['value'] == $option_key) echo 'checked';?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" id="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $tab_form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($tab_form['value'] == $option_key) echo 'checked';?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>> 
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): ?>
                <div class="checkbox-inline lyui-control lyui-checkbox">
                    <label class="checkbox-label">
                        <?php if(is_array($option)): ?>
                            <input type="checkbox" name="<?php echo $tab_form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($tab_form['value'])?$tab_form['value']:explode(',',$tab_form['value']))): ?> checked<?php endif; ?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="checkbox" name="<?php echo $tab_form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($tab_form['value'])?$tab_form['value']:explode(',',$tab_form['value']))): ?> checked<?php endif; ?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <select name="<?php echo $tab_form['name']; ?>" class="form-control lyui-select select" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <option value=''>请选择：</option>
                <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($tab_form['value']) && ($tab_form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($tab_form['value']) && ($tab_form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "selects": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <select multiple="multiple" size="6" name="<?php echo $tab_form['name']; ?>[]" class="form-control lyui-select select" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php $tab_form['value'] = explode(',', $tab_form['value']); dump($tab_form['value']); ?>
                <option value=''>请选择：</option>
                <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array(($tab_form['value']), is_array($option_key)?$option_key:explode(',',$option_key))): ?> selected<?php endif; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array($option_key, $tab_form['value'])) { echo 'selected'; } ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "icon": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group input" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $tab_k; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i> 点击选择图标</button>
                </span>
                <input type="text" class="form-control" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $("#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $tab_k; ?>").iconpicker({
                        icons: '[{"filter":"glass","name":"glass","selector":"fa-glass"},{"filter":"music","name":"music","selector":"fa-music"},{"filter":"search","name":"search","selector":"fa-search"},{"filter":"envelope-o","name":"envelope-o","selector":"fa-envelope-o"},{"filter":"heart","name":"heart","selector":"fa-heart"},{"filter":"star","name":"star","selector":"fa-star"},{"filter":"star-o","name":"star-o","selector":"fa-star-o"},{"filter":"user","name":"user","selector":"fa-user"},{"filter":"film","name":"film","selector":"fa-film"},{"filter":"th-large","name":"th-large","selector":"fa-th-large"},{"filter":"th","name":"th","selector":"fa-th"},{"filter":"th-list","name":"th-list","selector":"fa-th-list"},{"filter":"check","name":"check","selector":"fa-check"},{"filter":"times","name":"times","selector":"fa-times"},{"filter":"search-plus","name":"search-plus","selector":"fa-search-plus"},{"filter":"search-minus","name":"search-minus","selector":"fa-search-minus"},{"filter":"power-off","name":"power-off","selector":"fa-power-off"},{"filter":"signal","name":"signal","selector":"fa-signal"},{"filter":"cog","name":"cog","selector":"fa-cog"},{"filter":"trash-o","name":"trash-o","selector":"fa-trash-o"},{"filter":"home","name":"home","selector":"fa-home"},{"filter":"file-o","name":"file-o","selector":"fa-file-o"},{"filter":"clock-o","name":"clock-o","selector":"fa-clock-o"},{"filter":"road","name":"road","selector":"fa-road"},{"filter":"download","name":"download","selector":"fa-download"},{"filter":"arrow-circle-o-down","name":"arrow-circle-o-down","selector":"fa-arrow-circle-o-down"},{"filter":"arrow-circle-o-up","name":"arrow-circle-o-up","selector":"fa-arrow-circle-o-up"},{"filter":"inbox","name":"inbox","selector":"fa-inbox"},{"filter":"play-circle-o","name":"play-circle-o","selector":"fa-play-circle-o"},{"filter":"repeat","name":"repeat","selector":"fa-repeat"},{"filter":"refresh","name":"refresh","selector":"fa-refresh"},{"filter":"list-alt","name":"list-alt","selector":"fa-list-alt"},{"filter":"lock","name":"lock","selector":"fa-lock"},{"filter":"flag","name":"flag","selector":"fa-flag"},{"filter":"headphones","name":"headphones","selector":"fa-headphones"},{"filter":"volume-off","name":"volume-off","selector":"fa-volume-off"},{"filter":"volume-down","name":"volume-down","selector":"fa-volume-down"},{"filter":"volume-up","name":"volume-up","selector":"fa-volume-up"},{"filter":"qrcode","name":"qrcode","selector":"fa-qrcode"},{"filter":"barcode","name":"barcode","selector":"fa-barcode"},{"filter":"tag","name":"tag","selector":"fa-tag"},{"filter":"tags","name":"tags","selector":"fa-tags"},{"filter":"book","name":"book","selector":"fa-book"},{"filter":"bookmark","name":"bookmark","selector":"fa-bookmark"},{"filter":"print","name":"print","selector":"fa-print"},{"filter":"camera","name":"camera","selector":"fa-camera"},{"filter":"font","name":"font","selector":"fa-font"},{"filter":"bold","name":"bold","selector":"fa-bold"},{"filter":"italic","name":"italic","selector":"fa-italic"},{"filter":"text-height","name":"text-height","selector":"fa-text-height"},{"filter":"text-width","name":"text-width","selector":"fa-text-width"},{"filter":"align-left","name":"align-left","selector":"fa-align-left"},{"filter":"align-center","name":"align-center","selector":"fa-align-center"},{"filter":"align-right","name":"align-right","selector":"fa-align-right"},{"filter":"align-justify","name":"align-justify","selector":"fa-align-justify"},{"filter":"list","name":"list","selector":"fa-list"},{"filter":"outdent","name":"outdent","selector":"fa-outdent"},{"filter":"indent","name":"indent","selector":"fa-indent"},{"filter":"video-camera","name":"video-camera","selector":"fa-video-camera"},{"filter":"picture-o","name":"picture-o","selector":"fa-picture-o"},{"filter":"pencil","name":"pencil","selector":"fa-pencil"},{"filter":"map-marker","name":"map-marker","selector":"fa-map-marker"},{"filter":"adjust","name":"adjust","selector":"fa-adjust"},{"filter":"tint","name":"tint","selector":"fa-tint"},{"filter":"pencil-square-o","name":"pencil-square-o","selector":"fa-pencil-square-o"},{"filter":"share-square-o","name":"share-square-o","selector":"fa-share-square-o"},{"filter":"check-square-o","name":"check-square-o","selector":"fa-check-square-o"},{"filter":"arrows","name":"arrows","selector":"fa-arrows"},{"filter":"step-backward","name":"step-backward","selector":"fa-step-backward"},{"filter":"fast-backward","name":"fast-backward","selector":"fa-fast-backward"},{"filter":"backward","name":"backward","selector":"fa-backward"},{"filter":"play","name":"play","selector":"fa-play"},{"filter":"pause","name":"pause","selector":"fa-pause"},{"filter":"stop","name":"stop","selector":"fa-stop"},{"filter":"forward","name":"forward","selector":"fa-forward"},{"filter":"fast-forward","name":"fast-forward","selector":"fa-fast-forward"},{"filter":"step-forward","name":"step-forward","selector":"fa-step-forward"},{"filter":"eject","name":"eject","selector":"fa-eject"},{"filter":"chevron-left","name":"chevron-left","selector":"fa-chevron-left"},{"filter":"chevron-right","name":"chevron-right","selector":"fa-chevron-right"},{"filter":"plus-circle","name":"plus-circle","selector":"fa-plus-circle"},{"filter":"minus-circle","name":"minus-circle","selector":"fa-minus-circle"},{"filter":"times-circle","name":"times-circle","selector":"fa-times-circle"},{"filter":"check-circle","name":"check-circle","selector":"fa-check-circle"},{"filter":"question-circle","name":"question-circle","selector":"fa-question-circle"},{"filter":"info-circle","name":"info-circle","selector":"fa-info-circle"},{"filter":"crosshairs","name":"crosshairs","selector":"fa-crosshairs"},{"filter":"times-circle-o","name":"times-circle-o","selector":"fa-times-circle-o"},{"filter":"check-circle-o","name":"check-circle-o","selector":"fa-check-circle-o"},{"filter":"ban","name":"ban","selector":"fa-ban"},{"filter":"arrow-left","name":"arrow-left","selector":"fa-arrow-left"},{"filter":"arrow-right","name":"arrow-right","selector":"fa-arrow-right"},{"filter":"arrow-up","name":"arrow-up","selector":"fa-arrow-up"},{"filter":"arrow-down","name":"arrow-down","selector":"fa-arrow-down"},{"filter":"share","name":"share","selector":"fa-share"},{"filter":"expand","name":"expand","selector":"fa-expand"},{"filter":"compress","name":"compress","selector":"fa-compress"},{"filter":"plus","name":"plus","selector":"fa-plus"},{"filter":"minus","name":"minus","selector":"fa-minus"},{"filter":"asterisk","name":"asterisk","selector":"fa-asterisk"},{"filter":"exclamation-circle","name":"exclamation-circle","selector":"fa-exclamation-circle"},{"filter":"gift","name":"gift","selector":"fa-gift"},{"filter":"leaf","name":"leaf","selector":"fa-leaf"},{"filter":"fire","name":"fire","selector":"fa-fire"},{"filter":"eye","name":"eye","selector":"fa-eye"},{"filter":"eye-slash","name":"eye-slash","selector":"fa-eye-slash"},{"filter":"exclamation-triangle","name":"exclamation-triangle","selector":"fa-exclamation-triangle"},{"filter":"plane","name":"plane","selector":"fa-plane"},{"filter":"calendar","name":"calendar","selector":"fa-calendar"},{"filter":"random","name":"random","selector":"fa-random"},{"filter":"comment","name":"comment","selector":"fa-comment"},{"filter":"magnet","name":"magnet","selector":"fa-magnet"},{"filter":"chevron-up","name":"chevron-up","selector":"fa-chevron-up"},{"filter":"chevron-down","name":"chevron-down","selector":"fa-chevron-down"},{"filter":"retweet","name":"retweet","selector":"fa-retweet"},{"filter":"shopping-cart","name":"shopping-cart","selector":"fa-shopping-cart"},{"filter":"folder","name":"folder","selector":"fa-folder"},{"filter":"folder-open","name":"folder-open","selector":"fa-folder-open"},{"filter":"arrows-v","name":"arrows-v","selector":"fa-arrows-v"},{"filter":"arrows-h","name":"arrows-h","selector":"fa-arrows-h"},{"filter":"bar-chart-o","name":"bar-chart-o","selector":"fa-bar-chart-o"},{"filter":"twitter-square","name":"twitter-square","selector":"fa-twitter-square"},{"filter":"facebook-square","name":"facebook-square","selector":"fa-facebook-square"},{"filter":"camera-retro","name":"camera-retro","selector":"fa-camera-retro"},{"filter":"key","name":"key","selector":"fa-key"},{"filter":"cogs","name":"cogs","selector":"fa-cogs"},{"filter":"comments","name":"comments","selector":"fa-comments"},{"filter":"thumbs-o-up","name":"thumbs-o-up","selector":"fa-thumbs-o-up"},{"filter":"thumbs-o-down","name":"thumbs-o-down","selector":"fa-thumbs-o-down"},{"filter":"star-half","name":"star-half","selector":"fa-star-half"},{"filter":"heart-o","name":"heart-o","selector":"fa-heart-o"},{"filter":"sign-out","name":"sign-out","selector":"fa-sign-out"},{"filter":"linkedin-square","name":"linkedin-square","selector":"fa-linkedin-square"},{"filter":"thumb-tack","name":"thumb-tack","selector":"fa-thumb-tack"},{"filter":"external-link","name":"external-link","selector":"fa-external-link"},{"filter":"sign-in","name":"sign-in","selector":"fa-sign-in"},{"filter":"trophy","name":"trophy","selector":"fa-trophy"},{"filter":"github-square","name":"github-square","selector":"fa-github-square"},{"filter":"upload","name":"upload","selector":"fa-upload"},{"filter":"lemon-o","name":"lemon-o","selector":"fa-lemon-o"},{"filter":"phone","name":"phone","selector":"fa-phone"},{"filter":"square-o","name":"square-o","selector":"fa-square-o"},{"filter":"bookmark-o","name":"bookmark-o","selector":"fa-bookmark-o"},{"filter":"phone-square","name":"phone-square","selector":"fa-phone-square"},{"filter":"twitter","name":"twitter","selector":"fa-twitter"},{"filter":"facebook","name":"facebook","selector":"fa-facebook"},{"filter":"github","name":"github","selector":"fa-github"},{"filter":"unlock","name":"unlock","selector":"fa-unlock"},{"filter":"credit-card","name":"credit-card","selector":"fa-credit-card"},{"filter":"rss","name":"rss","selector":"fa-rss"},{"filter":"hdd-o","name":"hdd-o","selector":"fa-hdd-o"},{"filter":"bullhorn","name":"bullhorn","selector":"fa-bullhorn"},{"filter":"bell","name":"bell","selector":"fa-bell"},{"filter":"certificate","name":"certificate","selector":"fa-certificate"},{"filter":"hand-o-right","name":"hand-o-right","selector":"fa-hand-o-right"},{"filter":"hand-o-left","name":"hand-o-left","selector":"fa-hand-o-left"},{"filter":"hand-o-up","name":"hand-o-up","selector":"fa-hand-o-up"},{"filter":"hand-o-down","name":"hand-o-down","selector":"fa-hand-o-down"},{"filter":"arrow-circle-left","name":"arrow-circle-left","selector":"fa-arrow-circle-left"},{"filter":"arrow-circle-right","name":"arrow-circle-right","selector":"fa-arrow-circle-right"},{"filter":"arrow-circle-up","name":"arrow-circle-up","selector":"fa-arrow-circle-up"},{"filter":"arrow-circle-down","name":"arrow-circle-down","selector":"fa-arrow-circle-down"},{"filter":"globe","name":"globe","selector":"fa-globe"},{"filter":"wrench","name":"wrench","selector":"fa-wrench"},{"filter":"tasks","name":"tasks","selector":"fa-tasks"},{"filter":"filter","name":"filter","selector":"fa-filter"},{"filter":"briefcase","name":"briefcase","selector":"fa-briefcase"},{"filter":"arrows-alt","name":"arrows-alt","selector":"fa-arrows-alt"},{"filter":"users","name":"users","selector":"fa-users"},{"filter":"link","name":"link","selector":"fa-link"},{"filter":"cloud","name":"cloud","selector":"fa-cloud"},{"filter":"flask","name":"flask","selector":"fa-flask"},{"filter":"scissors","name":"scissors","selector":"fa-scissors"},{"filter":"files-o","name":"files-o","selector":"fa-files-o"},{"filter":"paperclip","name":"paperclip","selector":"fa-paperclip"},{"filter":"floppy-o","name":"floppy-o","selector":"fa-floppy-o"},{"filter":"square","name":"square","selector":"fa-square"},{"filter":"bars","name":"bars","selector":"fa-bars"},{"filter":"list-ul","name":"list-ul","selector":"fa-list-ul"},{"filter":"list-ol","name":"list-ol","selector":"fa-list-ol"},{"filter":"strikethrough","name":"strikethrough","selector":"fa-strikethrough"},{"filter":"underline","name":"underline","selector":"fa-underline"},{"filter":"table","name":"table","selector":"fa-table"},{"filter":"magic","name":"magic","selector":"fa-magic"},{"filter":"truck","name":"truck","selector":"fa-truck"},{"filter":"pinterest","name":"pinterest","selector":"fa-pinterest"},{"filter":"pinterest-square","name":"pinterest-square","selector":"fa-pinterest-square"},{"filter":"google-plus-square","name":"google-plus-square","selector":"fa-google-plus-square"},{"filter":"google-plus","name":"google-plus","selector":"fa-google-plus"},{"filter":"money","name":"money","selector":"fa-money"},{"filter":"caret-down","name":"caret-down","selector":"fa-caret-down"},{"filter":"caret-up","name":"caret-up","selector":"fa-caret-up"},{"filter":"caret-left","name":"caret-left","selector":"fa-caret-left"},{"filter":"caret-right","name":"caret-right","selector":"fa-caret-right"},{"filter":"columns","name":"columns","selector":"fa-columns"},{"filter":"sort","name":"sort","selector":"fa-sort"},{"filter":"sort-asc","name":"sort-asc","selector":"fa-sort-asc"},{"filter":"sort-desc","name":"sort-desc","selector":"fa-sort-desc"},{"filter":"envelope","name":"envelope","selector":"fa-envelope"},{"filter":"linkedin","name":"linkedin","selector":"fa-linkedin"},{"filter":"undo","name":"undo","selector":"fa-undo"},{"filter":"gavel","name":"gavel","selector":"fa-gavel"},{"filter":"tachometer","name":"tachometer","selector":"fa-tachometer"},{"filter":"comment-o","name":"comment-o","selector":"fa-comment-o"},{"filter":"comments-o","name":"comments-o","selector":"fa-comments-o"},{"filter":"bolt","name":"bolt","selector":"fa-bolt"},{"filter":"sitemap","name":"sitemap","selector":"fa-sitemap"},{"filter":"umbrella","name":"umbrella","selector":"fa-umbrella"},{"filter":"clipboard","name":"clipboard","selector":"fa-clipboard"},{"filter":"lightbulb-o","name":"lightbulb-o","selector":"fa-lightbulb-o"},{"filter":"exchange","name":"exchange","selector":"fa-exchange"},{"filter":"cloud-download","name":"cloud-download","selector":"fa-cloud-download"},{"filter":"cloud-upload","name":"cloud-upload","selector":"fa-cloud-upload"},{"filter":"user-md","name":"user-md","selector":"fa-user-md"},{"filter":"stethoscope","name":"stethoscope","selector":"fa-stethoscope"},{"filter":"suitcase","name":"suitcase","selector":"fa-suitcase"},{"filter":"bell-o","name":"bell-o","selector":"fa-bell-o"},{"filter":"coffee","name":"coffee","selector":"fa-coffee"},{"filter":"cutlery","name":"cutlery","selector":"fa-cutlery"},{"filter":"file-text-o","name":"file-text-o","selector":"fa-file-text-o"},{"filter":"building-o","name":"building-o","selector":"fa-building-o"},{"filter":"hospital-o","name":"hospital-o","selector":"fa-hospital-o"},{"filter":"ambulance","name":"ambulance","selector":"fa-ambulance"},{"filter":"medkit","name":"medkit","selector":"fa-medkit"},{"filter":"fighter-jet","name":"fighter-jet","selector":"fa-fighter-jet"},{"filter":"beer","name":"beer","selector":"fa-beer"},{"filter":"h-square","name":"h-square","selector":"fa-h-square"},{"filter":"plus-square","name":"plus-square","selector":"fa-plus-square"},{"filter":"angle-double-left","name":"angle-double-left","selector":"fa-angle-double-left"},{"filter":"angle-double-right","name":"angle-double-right","selector":"fa-angle-double-right"},{"filter":"angle-double-up","name":"angle-double-up","selector":"fa-angle-double-up"},{"filter":"angle-double-down","name":"angle-double-down","selector":"fa-angle-double-down"},{"filter":"angle-left","name":"angle-left","selector":"fa-angle-left"},{"filter":"angle-right","name":"angle-right","selector":"fa-angle-right"},{"filter":"angle-up","name":"angle-up","selector":"fa-angle-up"},{"filter":"angle-down","name":"angle-down","selector":"fa-angle-down"},{"filter":"desktop","name":"desktop","selector":"fa-desktop"},{"filter":"laptop","name":"laptop","selector":"fa-laptop"},{"filter":"tablet","name":"tablet","selector":"fa-tablet"},{"filter":"mobile","name":"mobile","selector":"fa-mobile"},{"filter":"circle-o","name":"circle-o","selector":"fa-circle-o"},{"filter":"quote-left","name":"quote-left","selector":"fa-quote-left"},{"filter":"quote-right","name":"quote-right","selector":"fa-quote-right"},{"filter":"spinner","name":"spinner","selector":"fa-spinner"},{"filter":"circle","name":"circle","selector":"fa-circle"},{"filter":"reply","name":"reply","selector":"fa-reply"},{"filter":"github-alt","name":"github-alt","selector":"fa-github-alt"},{"filter":"folder-o","name":"folder-o","selector":"fa-folder-o"},{"filter":"folder-open-o","name":"folder-open-o","selector":"fa-folder-open-o"},{"filter":"smile-o","name":"smile-o","selector":"fa-smile-o"},{"filter":"frown-o","name":"frown-o","selector":"fa-frown-o"},{"filter":"meh-o","name":"meh-o","selector":"fa-meh-o"},{"filter":"gamepad","name":"gamepad","selector":"fa-gamepad"},{"filter":"keyboard-o","name":"keyboard-o","selector":"fa-keyboard-o"},{"filter":"flag-o","name":"flag-o","selector":"fa-flag-o"},{"filter":"flag-checkered","name":"flag-checkered","selector":"fa-flag-checkered"},{"filter":"terminal","name":"terminal","selector":"fa-terminal"},{"filter":"code","name":"code","selector":"fa-code"},{"filter":"reply-all","name":"reply-all","selector":"fa-reply-all"},{"filter":"mail-reply-all","name":"mail-reply-all","selector":"fa-mail-reply-all"},{"filter":"star-half-o","name":"star-half-o","selector":"fa-star-half-o"},{"filter":"location-arrow","name":"location-arrow","selector":"fa-location-arrow"},{"filter":"crop","name":"crop","selector":"fa-crop"},{"filter":"code-fork","name":"code-fork","selector":"fa-code-fork"},{"filter":"chain-broken","name":"chain-broken","selector":"fa-chain-broken"},{"filter":"question","name":"question","selector":"fa-question"},{"filter":"info","name":"info","selector":"fa-info"},{"filter":"exclamation","name":"exclamation","selector":"fa-exclamation"},{"filter":"superscript","name":"superscript","selector":"fa-superscript"},{"filter":"subscript","name":"subscript","selector":"fa-subscript"},{"filter":"eraser","name":"eraser","selector":"fa-eraser"},{"filter":"puzzle-piece","name":"puzzle-piece","selector":"fa-puzzle-piece"},{"filter":"microphone","name":"microphone","selector":"fa-microphone"},{"filter":"microphone-slash","name":"microphone-slash","selector":"fa-microphone-slash"},{"filter":"shield","name":"shield","selector":"fa-shield"},{"filter":"calendar-o","name":"calendar-o","selector":"fa-calendar-o"},{"filter":"fire-extinguisher","name":"fire-extinguisher","selector":"fa-fire-extinguisher"},{"filter":"rocket","name":"rocket","selector":"fa-rocket"},{"filter":"maxcdn","name":"maxcdn","selector":"fa-maxcdn"},{"filter":"chevron-circle-left","name":"chevron-circle-left","selector":"fa-chevron-circle-left"},{"filter":"chevron-circle-right","name":"chevron-circle-right","selector":"fa-chevron-circle-right"},{"filter":"chevron-circle-up","name":"chevron-circle-up","selector":"fa-chevron-circle-up"},{"filter":"chevron-circle-down","name":"chevron-circle-down","selector":"fa-chevron-circle-down"},{"filter":"html5","name":"html5","selector":"fa-html5"},{"filter":"css3","name":"css3","selector":"fa-css3"},{"filter":"anchor","name":"anchor","selector":"fa-anchor"},{"filter":"unlock-alt","name":"unlock-alt","selector":"fa-unlock-alt"},{"filter":"bullseye","name":"bullseye","selector":"fa-bullseye"},{"filter":"ellipsis-h","name":"ellipsis-h","selector":"fa-ellipsis-h"},{"filter":"ellipsis-v","name":"ellipsis-v","selector":"fa-ellipsis-v"},{"filter":"rss-square","name":"rss-square","selector":"fa-rss-square"},{"filter":"play-circle","name":"play-circle","selector":"fa-play-circle"},{"filter":"ticket","name":"ticket","selector":"fa-ticket"},{"filter":"minus-square","name":"minus-square","selector":"fa-minus-square"},{"filter":"minus-square-o","name":"minus-square-o","selector":"fa-minus-square-o"},{"filter":"level-up","name":"level-up","selector":"fa-level-up"},{"filter":"level-down","name":"level-down","selector":"fa-level-down"},{"filter":"check-square","name":"check-square","selector":"fa-check-square"},{"filter":"pencil-square","name":"pencil-square","selector":"fa-pencil-square"},{"filter":"external-link-square","name":"external-link-square","selector":"fa-external-link-square"},{"filter":"share-square","name":"share-square","selector":"fa-share-square"},{"filter":"compass","name":"compass","selector":"fa-compass"},{"filter":"caret-square-o-down","name":"caret-square-o-down","selector":"fa-caret-square-o-down"},{"filter":"caret-square-o-up","name":"caret-square-o-up","selector":"fa-caret-square-o-up"},{"filter":"caret-square-o-right","name":"caret-square-o-right","selector":"fa-caret-square-o-right"},{"filter":"eur","name":"eur","selector":"fa-eur"},{"filter":"gbp","name":"gbp","selector":"fa-gbp"},{"filter":"usd","name":"usd","selector":"fa-usd"},{"filter":"inr","name":"inr","selector":"fa-inr"},{"filter":"jpy","name":"jpy","selector":"fa-jpy"},{"filter":"rub","name":"rub","selector":"fa-rub"},{"filter":"krw","name":"krw","selector":"fa-krw"},{"filter":"btc","name":"btc","selector":"fa-btc"},{"filter":"file","name":"file","selector":"fa-file"},{"filter":"file-text","name":"file-text","selector":"fa-file-text"},{"filter":"sort-alpha-asc","name":"sort-alpha-asc","selector":"fa-sort-alpha-asc"},{"filter":"sort-alpha-desc","name":"sort-alpha-desc","selector":"fa-sort-alpha-desc"},{"filter":"sort-amount-asc","name":"sort-amount-asc","selector":"fa-sort-amount-asc"},{"filter":"sort-amount-desc","name":"sort-amount-desc","selector":"fa-sort-amount-desc"},{"filter":"sort-numeric-asc","name":"sort-numeric-asc","selector":"fa-sort-numeric-asc"},{"filter":"sort-numeric-desc","name":"sort-numeric-desc","selector":"fa-sort-numeric-desc"},{"filter":"thumbs-up","name":"thumbs-up","selector":"fa-thumbs-up"},{"filter":"thumbs-down","name":"thumbs-down","selector":"fa-thumbs-down"},{"filter":"youtube-square","name":"youtube-square","selector":"fa-youtube-square"},{"filter":"youtube","name":"youtube","selector":"fa-youtube"},{"filter":"xing","name":"xing","selector":"fa-xing"},{"filter":"xing-square","name":"xing-square","selector":"fa-xing-square"},{"filter":"youtube-play","name":"youtube-play","selector":"fa-youtube-play"},{"filter":"dropbox","name":"dropbox","selector":"fa-dropbox"},{"filter":"stack-overflow","name":"stack-overflow","selector":"fa-stack-overflow"},{"filter":"instagram","name":"instagram","selector":"fa-instagram"},{"filter":"flickr","name":"flickr","selector":"fa-flickr"},{"filter":"adn","name":"adn","selector":"fa-adn"},{"filter":"bitbucket","name":"bitbucket","selector":"fa-bitbucket"},{"filter":"bitbucket-square","name":"bitbucket-square","selector":"fa-bitbucket-square"},{"filter":"tumblr","name":"tumblr","selector":"fa-tumblr"},{"filter":"tumblr-square","name":"tumblr-square","selector":"fa-tumblr-square"},{"filter":"long-arrow-down","name":"long-arrow-down","selector":"fa-long-arrow-down"},{"filter":"long-arrow-up","name":"long-arrow-up","selector":"fa-long-arrow-up"},{"filter":"long-arrow-left","name":"long-arrow-left","selector":"fa-long-arrow-left"},{"filter":"long-arrow-right","name":"long-arrow-right","selector":"fa-long-arrow-right"},{"filter":"apple","name":"apple","selector":"fa-apple"},{"filter":"windows","name":"windows","selector":"fa-windows"},{"filter":"android","name":"android","selector":"fa-android"},{"filter":"linux","name":"linux","selector":"fa-linux"},{"filter":"dribbble","name":"dribbble","selector":"fa-dribbble"},{"filter":"skype","name":"skype","selector":"fa-skype"},{"filter":"foursquare","name":"foursquare","selector":"fa-foursquare"},{"filter":"trello","name":"trello","selector":"fa-trello"},{"filter":"female","name":"female","selector":"fa-female"},{"filter":"male","name":"male","selector":"fa-male"},{"filter":"gittip","name":"gittip","selector":"fa-gittip"},{"filter":"sun-o","name":"sun-o","selector":"fa-sun-o"},{"filter":"moon-o","name":"moon-o","selector":"fa-moon-o"},{"filter":"archive","name":"archive","selector":"fa-archive"},{"filter":"bug","name":"bug","selector":"fa-bug"},{"filter":"vk","name":"vk","selector":"fa-vk"},{"filter":"weibo","name":"weibo","selector":"fa-weibo"},{"filter":"renren","name":"renren","selector":"fa-renren"},{"filter":"pagelines","name":"pagelines","selector":"fa-pagelines"},{"filter":"stack-exchange","name":"stack-exchange","selector":"fa-stack-exchange"},{"filter":"arrow-circle-o-right","name":"arrow-circle-o-right","selector":"fa-arrow-circle-o-right"},{"filter":"arrow-circle-o-left","name":"arrow-circle-o-left","selector":"fa-arrow-circle-o-left"},{"filter":"caret-square-o-left","name":"caret-square-o-left","selector":"fa-caret-square-o-left"},{"filter":"dot-circle-o","name":"dot-circle-o","selector":"fa-dot-circle-o"},{"filter":"wheelchair","name":"wheelchair","selector":"fa-wheelchair"},{"filter":"vimeo-square","name":"vimeo-square","selector":"fa-vimeo-square"},{"filter":"try","name":"try","selector":"fa-try"},{"filter":"plus-square-o","name":"plus-square-o","selector":"fa-plus-square-o"}]'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "date": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>"
                    class="form-control input date" name="<?php echo $tab_form['name']; ?>" value="
<?php
    if(isset($tab_form['value'])) {
        if(is_numeric($tab_form['value'])) {
            echo time_format($tab_form['value'], 'Y-m-d');
        } else {
            echo $tab_form['value'];
        }
    } else {
        echo(date('Y-m-d'));
    }
?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>').datetimepicker({
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $tab_k; ?>"
                    class="form-control input time" name="<?php echo $tab_form['name']; ?>" value="
<?php
    if(isset($tab_form['value'])) {
        if(is_numeric($tab_form['value'])) {
            echo time_format($tab_form['value'], 'Y-m-d H:i:s');
        } else {
            echo $tab_form['value'];
        }
    } else {
        echo(date('Y-m-d H:i:s'));
    }
?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $tab_k; ?>').datetimepicker({
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $tab_k; ?>" class="form-control input time" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $tab_k; ?>').datetimepicker({
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
<?php break; case "picture": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right row">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($tab_form['value']); ?>" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-picture', function() {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "picture_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.path);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right row">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                             if (is_array($tab_form['value'])) {
                                $images = $tab_form['value'];
                                $input_value = implode(',', $tab_form['value']);
                            } else {
                                $images = explode(',', $tab_form['value']);
                                $input_value = $tab_form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.id);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.path);
                            } else {
                                input.val(response.path);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.path);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "file": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($tab_form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage) {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' ).val('') //删除后覆盖原input的值为空
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "files": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                                 if (is_array($tab_form['value'])) {
                                    $files = $tab_form['value'];
                                    $input_value = implode(',', $tab_form['value']);
                                } else {
                                    $files = explode(',', $tab_form['value']);
                                    $input_value = $tab_form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage) {
                        var $li = $( '#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css( 'width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $('#'+file.id).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if ( !$error.length ) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "media": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($tab_form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传视频</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file, response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val('') //删除后覆盖原input的值为空
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "medias": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                                 if (is_array($tab_form['value'])) {
                                    $files = $tab_form['value'];
                                    $input_value = implode(',', $tab_form['value']);
                                } else {
                                    $files = explode(',', $tab_form['value']);
                                    $input_value = $tab_form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file, response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $( '#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "summernote": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea name="<?php echo $tab_form['name']; ?>" rwos="5" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $tab_k; ?>" class="form-control" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>
            </textarea>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/summernote/summernote.css">
            <style type="text/css" media="screen">
                .note-editor .modal-body .form-group {
                    margin: 0;
                }
            </style>
            <script type="text/javascript" src="__PUBLIC__/libs/summernote/summernote.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $tab_k; ?>').summernote({
                        height: 300,
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "kindeditor": ?>
    <style>
        .ke-container{width:70% !important;}
    </style>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right" >
            <textarea name="<?php echo $tab_form['name']; ?>" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $tab_k; ?>" style="width:70%" class="form-control " <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>
            </textarea><br>
           
            <script type="text/javascript" src="__PUBLIC__/libs/kindeditor/kindeditor-min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    KindEditor.ready(function(K) {
                        kindeditor_<?php echo $tab_k; ?> = K.create('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $tab_k; ?>', {
                            allowFileManager : true,
                            filePostName : 'file',
                            cssPath : [
                                '__LYUI__/css/lyui.min.css',
                                '__PUBLIC__/libs/kindeditor/plugins/code/prettify.css'
                            ],
                            width : '100%',
                            height : '500px',
                            resizeType: 1,
                            pasteType : 2,
                            filterMode: <?php if(MODULE_MARK === 'Admin') {echo 'false';} else {echo 'true';} ?>,
                            urlType : "domain",
                            fileManagerJson : '<?php echo U(MODULE_MARK."/Upload/fileManager", '', true, true); ?>',
                            uploadJson : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "kindeditor", "module_name" => request()->module()), true, true); ?>',
                            extraFileUploadParams: {
                                session_id : '<?php echo session_id(); ?>'
                            },
                            afterBlur: function(){this.sync();}
                        });
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "editormd": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div name="<?php echo $tab_form['name']; ?>" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>" style="z-index: 1000;" class="form-control" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>></div>
            <pre id="default_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>" class="hidden"><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></pre>

            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/editormd/css/editormd.min.css">
            <script type="text/javascript" src="__PUBLIC__/libs/editormd/js/editormd.min.js"></script>

            <script type="text/javascript">
                //解码
                function html_decode(str){
                    var s = "";
                    if (str.length == 0) return "";
                    s = str.replace(/&amp;/g, "&");
                    s = s.replace(/&lt;/g, "<");
                    s = s.replace(/&gt;/g, ">");
                    s = s.replace(/&nbsp;/g, " ");
                    s = s.replace(/&#39;/g, "\'");
                    s = s.replace(/&quot;/g, "\"");
                    s = s.replace(/<br>/g, "\n");
                    return s;
                }

                $(function(){
                    var editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>_content = html_decode($('#default_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>').html());
                    var editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?> = editormd({
                        id                : 'tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>',
                        path              : '__PUBLIC__/libs/editormd/lib/',
                        pluginPath        : '__PUBLIC__/libs/editormd/plugins/',
                        name              : '<?php echo $tab_form['name']; ?>',
                        markdown          : editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>_content,
                        imageUpload       : true,
                        imageFormats      : ["jpg", "jpeg", "gif", "png", "bmp"],
                        imageUploadURL    : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "editormd", "module_name" => request()->module()), true, true); ?>',
                        placeholder       : '有范科技积木式云平台！',
                        width             : '100%',
                        height            : 640,
                        watch             : <?php if(MODULE_MARK === 'Admin'){ echo 'false';} else {echo 'true';} ?>,
                        codeFold          : true,
                        htmlDecode        : false,
                        toolbarAutoFixed  : false,
                        crossDomainUpload : true
                    });
                });
            </script>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "tags": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input.css">
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>'), tagsPre = [];
                    if (tags.length > 0) {
                        var items = tags.val().split(','), result = [];
                        for (var i = 0; i < items.length; i ++) {
                            var tag = items[i];
                            if (!tag) {
                                continue;
                            }
                            tagsPre.push({
                                id      :   tag,
                                title   :   tag
                            });
                        }
                    }
                    tags.tokenInput("<?php echo $tab_form['extra']['self']['search']; ?>",{
                        propertyToSearch    :   'title',
                        tokenValue          :   'title',
                        searchDelay         :   0,
                        tokenLimit          :   <?php echo $tab_form['extra']['self']['limit'] ? : 5; ?>,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   <?php echo $tab_form['extra']['self']['free'] ? : true; ?>, // 是否允许添加搜索结果中没有的数据
                        hintText            :   '请输入标签名',
                        noResultsText       :   '此标签不存在, 按回车创建',
                        searchingText       :   '查找中...',
                        prePopulate         :   tagsPre,
                        theme               :   'bootstrap',
                        onAdd: function (item){  //新增系统没有的标签时提交到数据库
                            <?php if($tab_form['extra']['self']['new']): ?>
                                $.post("<?php echo $tab_form['extra']['self']['new']; ?>", {'title': item.title});
                            <?php endif; ?>
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "board": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" name="<?php echo $tab_form['name']; ?>" value='<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>'>
            <div class="row board_list boards_<?php echo $tab_k; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <div class="container-fluid">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                        <div class="panel panel-default board col-xs-12 col-sm-3" data-id="<?php echo $option_key; ?>">
                            <div class="panel-heading">
                                <strong><?php echo $option['title']; ?></strong>
                            </div>
                            <div class="list-group dragsort_<?php echo $tab_k; ?>" data-group="<?php echo $option_key; ?>">
                                <?php if(is_array($option['field']) || $option['field'] instanceof \think\Collection || $option['field'] instanceof \think\Paginator): if( count($option['field'])==0 ) : echo "" ;else: foreach($option['field'] as $option_field_key=>$option_field): ?>
                                    <div class="list-group-item">
                                        <em data="<?php echo $field['id']; ?>"><?php echo $option_field; ?></em>
                                        <input type="hidden" name="<?php echo $tab_form['name']; ?>[<?php echo $option_key; ?>][]" value="<?php echo $option_field_key; ?>"/>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <script type="text/javascript">
                //拖曳插件初始化
                $(function(){
                    $(".dragsort_<?php echo $tab_k; ?>").dragsort({
                         dragSelector:'div',
                         placeHolderTemplate: '<div class="clearfix draging-place">&nbsp;</div>',
                         dragBetween:true, //允许拖动到任意地方
                         dragEnd:function(){
                             var self = $(this);
                             self.find('input').attr('name', '<?php echo $tab_form['name']; ?>[' + self.closest('.dragsort_<?php echo $tab_k; ?>').data('group') + '][]');
                         }
                     });
                });
            </script>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "choice": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmember'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此人</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "huxing": ?>
	<style>
		.eeee{line-height: 34px;}
	</style>


    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<div class="row">
        		<div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="ping" value="<?php echo $form['value']['ping']; ?>"><span class="col-xs-4 eeee">平</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="room" value="<?php echo $form['value']['room']; ?>"><span class="col-xs-4 eeee">室</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="office" value="<?php echo $form['value']['office']; ?>"><span class="col-xs-4 eeee">厅</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="guard" value="<?php echo $form['value']['guard']; ?>"><span class="col-xs-4 eeee">卫</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="kitchen" value="<?php echo $form['value']['kitchen']; ?>"><span class="col-xs-4 eeee">厨</span>
			  </div>
			   <div class="col-xs-2">
			    <span class="col-xs-4 eeee" style="text-align: right;">可住</span><input type="text" class="form-control col-xs-4"  name="canlive" value="<?php echo $form['value']['canlive']; ?>"><span class="col-xs-2 eeee">人</span>
			  </div>
			  <div class="col-xs-2">
			    <span class="col-xs-2 eeee" >共</span><input type="text" class="form-control col-xs-4"  name="bed" value="<?php echo $form['value']['bed']; ?>"><span class="col-xs-4 eeee">张床</span>
			  </div>


			</div>
        </div>
    </div>
<?php break; case "sheshi": ?>
    <style>
        .right{display:flex;}
        .kdawi{width:33%;}
    </style>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
<!-- 
<?php

    echo '<pre>';


var_dump($form);
    echo '</pre>';


?> -->
     <script type="text/javascript">
        $(function(){
            $('.auth input[type="checkbox"]').on('change',function(){
                //遍历选中当前权限的子权限
                $('.'+$(this).attr('data-module-name')+' .auth'+$(this).val()).find('input').prop('checked',this.checked);

                //遍历选中当前权限的父权限
                if ($(this).is(':checked') == true) {
                    var $fix = $(this);
                    while ($fix.length > 0) {
                        var $tmp = $fix.closest('div').prev('label').find('input');
                        console.log($tmp);
                        if ($tmp.length > 0) {
                            $tmp.attr("checked",true);
                            $fix = $tmp;
                        } else {
                            break;
                        }
                    }
                }
            });
        });
    </script>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
                <div class="auth">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;$module_name = $key; ?>
                        <div class="<?php echo $vo1['id']; ?>">
                            <div class="lyui-control lyui-checkbox">
                                <label class="checkbox-label checkbox-inline">
                                    <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo1['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo1['id']; ?>">
                                    <span class="lyui-control-indicator"></span>
                                    <span> <?php echo $vo1['title']; ?></span>
                                </label>
                                <div class="auth<?php echo $vo1['id']; ?>" style="padding-left: 25px;margin-top: 10px;">
                                    <?php if(is_array($vo1['zz']) || $vo1['zz'] instanceof \think\Collection || $vo1['zz'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['zz'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                        <label class="checkbox-label checkbox-inline">
                                            <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo2['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo2['id']; ?>">
                                            <span class="lyui-control-indicator"></span>
                                            <span> <?php echo $vo2['title']; ?></span>
                                        </label>
                                      
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
     
    </div>

<?php break; case "address": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
            <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
            <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
          
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址">
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
            var city=$("#cityid").val();
            var district=$("#districtid").val();
            var selCity = $("#seleAreaNext")[0];
            for (var i = selCity.length - 1; i >= 0; i--) {
                selCity.options[i] = null;
            }
            var opt = new Option("请选择省", "-1");
            selCity.options.add(opt);
            // 添加省
            $.ajax({
                type : "post",
                url : "<?php echo U('admin/index/getprovince'); ?>",
                dataType : "json",
                success : function(data) {
                    if (data != null && data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            var opt = new Option(data[i].province_name,
                                    data[i].province_id);
                            selCity.options.add(opt);
                        }
                       // if(province){
                       //  $("#seleAreaNext").val(province);
                       // }
                       
                    }
                }
            });

          
    
            // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }

                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                                                
                                                                <?php case "yaddress": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
    <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
    <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
    <input type="hidden" id="adressid" value="1" />
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址"}>
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
    var city=$("#cityid").val();
    var district=$("#districtid").val();
    var selProvince=$("#seleAreaNext")[0];
    for (var i = selProvince.length - 1; i >= 0; i--) {
        selProvince.options[i] = null;
    }
    var opt = new Option("请选择省", "-1");
    selProvince.options.add(opt);
        //添加省
        $.ajax({
            type : "post",
            url : "<?php echo U('admin/index/getprovince'); ?>",
            dataType : "json",
            success : function(data) {
                if (data != null && data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        var opt = new Option(data[i].province_name, data[i].province_id);
                        selProvince.options.add(opt);
                    }
                    $("#seleAreaNext").val(province);
                }
            }
        });
    var address_id=$("#adressid").val();
    if(address_id!=0){
        //查询这个收货地址的详细地址
        //加载市
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getCity'); ?>",
                    dataType: "json",
                    data: { "province_id": province },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name, data[i].city_id);
                                selCity.options.add(opt);
                            }
                        $("#seleAreaThird").val(city);
                        }
                    }
                });
                //加载区县
            var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区/县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType: "json",
                    data: { "city_id": city },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name, data[i].district_id);
                                selArea.options.add(opt);
                            }
                        $("#seleAreaFouth").val(district);
                        }
                    }
                });
    }
                    // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }
                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                                                
                                                                <?php case "map": ?>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=ASOBZ-U2RK6-PZQSM-ESQWD-7XO3J-TAFF3"></script>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<input type="hidden" name="latitude" id="latitude" value="<?php echo $form['value']['latitude']; ?>">
			<input type="hidden" name="longitude" id="longitude" value="<?php echo $form['value']['longitude']; ?>">
			<div id="container" style="height: 500px; width:70%;"></div>

        </div>
    </div>
   
    <script>
    	var mymap={
			map:'',
			markerArray:[],
			lat:"<?php echo (isset($form['value']['latitude']) && ($form['value']['latitude'] !== '')?$form['value']['latitude']:'39.908859'); ?>",//初始纬度
			lng:"<?php echo (isset($form['value']['longitude']) && ($form['value']['longitude'] !== '')?$form['value']['longitude']:'116.397392'); ?>",//初始经度
			conId:"container",
			jsonArr:[],
			latVal:"latitude",//点击地图后存放纬度INPUT的ID
			lngVal:"longitude",//点击地图后存放经度INPUT的ID
			zoom:12//地图初始缩放比例
		}
    </script>
     <script src="/public/zhuzhuangtu/myqqmap.js"></script>
<?php break; case "modules": ?>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="layui-form" >
            <div class="layui-form-item">
                  <div class="lyui-input-inline">
                    <input type="hidden" id="citys" name="<?php echo $form['name']; ?>" value="<?php echo $form['value']; ?>">
                    <select style="width:100%;" class="form-control lyui-select select" lay-filter="city" lay-verify="required" lay-search="">
                      <option value="">直接选择或搜索选择</option>
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
        </div>

        </div>
    </div>

<script>
layui.use(['form', 'layedit', 'laydate'], function(){

   var  form=layui.form;
  
    form.on('select(city)',function(res){
        $('#citys').val(res.value)
    })
  
  
});
// $("body").on("keyup",".layui-input",function(){
//       $.ajax({
//         url:"<?php echo U('admin/room/getcity'); ?>",
//         type:"post",
//         data:data.field,
//         dataType:'JSON',
//         success:function(res){
            
//             console.log(res)   
//         },
//         error:function(){
//             layer.alert("网络异常")
//         }
//     })
// })

</script>

<?php break; case "timeprice": ?>
	<script src="__PUBLIC__/libs/datetime/dateTime2.js" type="text/javascript" defer="defer"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/datetime/dateTime2.css"/>
    <style type="text/css">
		.dateTime{ position:relative; width:100%; border: 1px solid #ddd; overflow: hidden;}
	</style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
           <div class="dateTime">
    	
		   	    <div id="con" style="width:60%; float:left; overflow: hidden; min-width: 400px;"></div>
			   	<div class="set" style="width:30%; float:left; overflow: hidden;">
			   		<div class="setLock">
			   			<div class="setTime_row">锁房设置：</div>
			   			<input type="checkbox"  name="" id="lock" value="" />锁房
			   			
			   		</div>
			   		<div class="setTime">
			   			<div class="setTime_row">时段设置：</div>
			   			<div class="setTime_row">
			   				
				   		    <select name="s1s" id="s1s" >
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s1e" id="s1e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s1t">%
				   		   
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s2s" id="s2s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s2e" id="s2e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s2t">%
				   		    
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s3s" id="s3s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s3e" id="s3e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s3t">%
				   		    
				   		</div>
				   		
				   		<div class="setTime_row">
				   		    <select name="s4s" id="s4s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s4e" id="s4e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s4t">%
				   		</div>
				   		
				   		
				   		
			   		</div>
			   		<div class="setTotal">
			   			<div class="setTime_row">房价设置：</div>
			   		    <input type="text" id="total" placeholder="请输入价格">元
			   		</div>
			   		<div class="setTime_row"><a onclick="cz.tj()">设置</a></div>
			   	</div>
		   	</div>
        </div>
    </div>
    <input type="hidden" name="<?php echo $form['name']; ?>" id="dateprice" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
    <script>
	layui.use(['form', 'layedit', 'laydate'], function(){
 
  
  
});
		var mydate={
			  hdinput:"<?php echo $form['name']; ?>",
			  con:"con",
		      picker:"",//V-HTML
		      startDate:"",//开始日期
		      endDate:"",// 结束日期
		     startObj:"",//开始LI对象
		      endObj:"",//结束LI对象
		}
	</script>	
<?php break; case "tuikuan": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" name="checkout" <?php if($form['value']['checkout'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="checkout" value="<?php echo (isset($form['value']['checkout']) && ($form['value']['checkout'] !== '')?$form['value']['checkout']:''); ?>">
                </label>
            </div><br><br>
            <div id="dsgj" style="display:none;color:#888;">入住 
                    <select name="day" id="" style="color:red;border:0px;">
                        <option value="1" <?php if($form['value']['day'] == 1): ?>selected<?php endif; ?>>前1天</option>
                        <option value="3" <?php if($form['value']['day'] == 3): ?>selected<?php endif; ?>>前3天</option>
                        <option value="7" <?php if($form['value']['day'] == 7): ?>selected<?php endif; ?>>前7天</option>
                        <option value="15" <?php if($form['value']['day'] == 15): ?>selected<?php endif; ?>>前15天</option>
                        <option value="30" <?php if($form['value']['day'] == 30): ?>selected<?php endif; ?>>前30天</option>
                    </select>
            12点前取消订单，房费可全额退还；<br><br>之后取消订单，收取未住房费的
                    <select name="percent" id="" style="color:red;border:0px;">
                        <option value="10" <?php if($form['value']['percent'] == 10): ?>selected<?php endif; ?>>10%</option>
                        <option value="20" <?php if($form['value']['percent'] == 20): ?>selected<?php endif; ?>>20%</option>
                        <option value="30" <?php if($form['value']['percent'] == 30): ?>selected<?php endif; ?>>30%</option>
                        <option value="40" <?php if($form['value']['percent'] == 40): ?>selected<?php endif; ?>>40%</option>
                        <option value="50" <?php if($form['value']['percent'] == 50): ?>selected<?php endif; ?>>50%</option>
                        <option value="60" <?php if($form['value']['percent'] == 60): ?>selected<?php endif; ?>>60%</option>
                        <option value="70" <?php if($form['value']['percent'] == 70): ?>selected<?php endif; ?>>70%</option>
                        <option value="80" <?php if($form['value']['percent'] == 80): ?>selected<?php endif; ?>>80%</option>
                        <option value="90" <?php if($form['value']['percent'] == 90): ?>selected<?php endif; ?>>90%</option>
                        <option value="100" <?php if($form['value']['percent'] == 100): ?>selected<?php endif; ?>>100%</option>
                    </select>作为违约金支付给房东。（包含未入住和提现离店）</div>
           
            <a href="tuikuan.html"></a>
            <script type="text/javascript">
                if('<?php echo $form['value']['checkout']; ?>' == 1){
                    $('#dsgj').show();
                }
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                            $('#dsgj').show();
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                             $('#dsgj').hide();
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "coupon": ?>
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
                            <input type="radio"  onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                    <div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label">优惠内容：</label>
        <div class="right">
            <div class="" id="yhcon" style="width:100%;">
              <span style="line-height: 34px;">请先选择优惠券类型</span>
            </div>
        </div>
    </div>
    <script>
    	if('<?php echo $form['value']['type']; ?>'){
    		changein('<?php echo $form['value']['type']; ?>')
    	}

    	function changein(id) {
    	
        var youhui1 = ' <span style="float:left;line-height:34px;padding-right:10px;">满</span> <input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_price" value="<?php echo $form['value']['mj_price']; ?>"> <span style="float:left;line-height: 34px;padding:0 10px;">减</span><input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_hui" value="<?php echo $form['value']['mj_hui']; ?>">';
        var youhui2 = '<input type="text" style="width:10%;float: left;" class="text input-2 form-control" name="zhekou" value="<?php echo $form['value']['zhekou']; ?>"> <span  style="float:left;line-height:34px;padding-left:10px;">折</span>';
        if (id == 1) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui1;
        }else if (id == 2) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui2;
        }
      }
    </script>
<?php break; case "choices": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmembers'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此房东</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; ?>

                                                                // 扩展类型
                                                                <?php default: ?>
                                                                <?php echo hook('FormBuilderExtend', array('form' => $tab_form, 'type' => tab_)); endswitch; endforeach; endif; else: echo "" ;endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group"><hr></div>
                                <?php break; ?>

                                // 扩展类型
                                <?php default: ?>
                                <?php echo hook('FormBuilderExtend', array('form' => $form)); endswitch; endforeach; endif; else: echo "" ;endif; if(empty($form_items) || (($form_items instanceof \think\Collection || $form_items instanceof \think\Paginator ) && $form_items->isEmpty())): ?>
                            <div class="builder-data-empty text-center">
                                <div class="empty-info">
                                    <i class="fa fa-database"></i> 暂时没有数据<br>
                                    <span class="small">本系统由 <a href="<?php echo C('WEBSITE_DOMAIN'); ?>" class="text-muted" target="_blank"><?php echo C('PRODUCT_TITLE'); ?></a> v<?php echo C('CURRENT_VERSION'); ?> 强力驱动</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group"></div>
                        <div class="form-group bottom_button_list">
                            <a class="btn btn-primary submit <?php if($ajax_submit) echo 'ajax-post';?>" type="submit" target-form="form-builder"><?php if ($submit_title) {echo $submit_title;} else {echo '确定';} ?></a>
                            <!--底部按钮-->
                            <?php if(is_array($bottom_button_list) || $bottom_button_list instanceof \think\Collection || $bottom_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bottom_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <a <?php if($vo['href']) echo 'href="'.$vo['href'].'"'; if($vo['href']) echo 'url="'.$vo['href'].'"'; ?>  class="<?php echo $vo['class']; if($ajax_submit && $vo['type'] == 'submit') echo 'ajax-post';?> m-r-xs" type="<?php echo $vo['type']; ?>" target-form="form-builder"><?php echo $vo['title']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; if($hide_bottom_cancel === false): ?>
                                <a class="btn btn-danger return" <?php if($is_modal === false){ echo 'onclick="javascript:history.back(-1);return false;"';} else{echo  'data-dismiss="modal"';} ?>>取消</a>
                            <?php endif; ?>
                            <script type="text/javascript">
                                $('a[type="submit"]').click(function(){
                                    if (!$(this).hasClass('ajax-post')) {
                                        $("form.form-builder").submit();
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <?php if(isset($extra_html['bottom'])): ?>
        <?php echo $extra_html['bottom']; endif; ?>
</div>

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
        <div class="builder formbuilder-box">
    
    <?php if(isset($extra_html['top'])): ?>
        <?php echo $extra_html['top']; endif; if(!(empty($tab_nav) || (($tab_nav instanceof \think\Collection || $tab_nav instanceof \think\Paginator ) && $tab_nav->isEmpty()))): ?>
        <div class="builder-tabs builder-tabs-link">
            <ul class="nav nav-tabs">
                <?php if(is_array($tab_nav['tab_list']) || $tab_nav['tab_list'] instanceof \think\Collection || $tab_nav['tab_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $tab_nav['tab_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?>
                    <li class="<?php if($tab_nav['current_tab'] == $key) echo 'active'; ?>"><a href="<?php echo $tab['href']; ?>"><?php echo $tab['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="form-group"></div>
    <?php endif; ?>

    
    <div class="builder-container">
        <div class="row">
            <div class="col-xs-12">
                <form action="<?php echo $post_url; ?>" method="post" class="form-horizontal form form-builder">
                    <div class="form-type-list">
                        <?php if(is_array($form_items) || $form_items instanceof \think\Collection || $form_items instanceof \think\Paginator): $k = 0; $__LIST__ = $form_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form): $mod = ($k % 2 );++$k;switch($form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "static": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <p><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></p>
        </div>
    </div>
<?php break; case "num": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
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
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "textarea": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $form['name']; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></textarea>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "array": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $form['name']; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></textarea>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "password": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="password" class="form-control input password" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
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
<?php break; case "selects": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <select multiple="multiple" size="6" name="<?php echo $form['name']; ?>[]" class="form-control lyui-select select" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php $form['value'] = explode(',', $form['value']); dump($form['value']); ?>
                <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array(($form['value']), is_array($option_key)?$option_key:explode(',',$option_key))): ?> selected<?php endif; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array($option_key, $form['value'])) { echo 'selected'; } ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "icon": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="input-group input" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $k; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i> 点击选择图标</button>
                </span>
                <input type="text" class="form-control" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $("#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $k; ?>").iconpicker({
                        icons: '[{"filter":"glass","name":"glass","selector":"fa-glass"},{"filter":"music","name":"music","selector":"fa-music"},{"filter":"search","name":"search","selector":"fa-search"},{"filter":"envelope-o","name":"envelope-o","selector":"fa-envelope-o"},{"filter":"heart","name":"heart","selector":"fa-heart"},{"filter":"star","name":"star","selector":"fa-star"},{"filter":"star-o","name":"star-o","selector":"fa-star-o"},{"filter":"user","name":"user","selector":"fa-user"},{"filter":"film","name":"film","selector":"fa-film"},{"filter":"th-large","name":"th-large","selector":"fa-th-large"},{"filter":"th","name":"th","selector":"fa-th"},{"filter":"th-list","name":"th-list","selector":"fa-th-list"},{"filter":"check","name":"check","selector":"fa-check"},{"filter":"times","name":"times","selector":"fa-times"},{"filter":"search-plus","name":"search-plus","selector":"fa-search-plus"},{"filter":"search-minus","name":"search-minus","selector":"fa-search-minus"},{"filter":"power-off","name":"power-off","selector":"fa-power-off"},{"filter":"signal","name":"signal","selector":"fa-signal"},{"filter":"cog","name":"cog","selector":"fa-cog"},{"filter":"trash-o","name":"trash-o","selector":"fa-trash-o"},{"filter":"home","name":"home","selector":"fa-home"},{"filter":"file-o","name":"file-o","selector":"fa-file-o"},{"filter":"clock-o","name":"clock-o","selector":"fa-clock-o"},{"filter":"road","name":"road","selector":"fa-road"},{"filter":"download","name":"download","selector":"fa-download"},{"filter":"arrow-circle-o-down","name":"arrow-circle-o-down","selector":"fa-arrow-circle-o-down"},{"filter":"arrow-circle-o-up","name":"arrow-circle-o-up","selector":"fa-arrow-circle-o-up"},{"filter":"inbox","name":"inbox","selector":"fa-inbox"},{"filter":"play-circle-o","name":"play-circle-o","selector":"fa-play-circle-o"},{"filter":"repeat","name":"repeat","selector":"fa-repeat"},{"filter":"refresh","name":"refresh","selector":"fa-refresh"},{"filter":"list-alt","name":"list-alt","selector":"fa-list-alt"},{"filter":"lock","name":"lock","selector":"fa-lock"},{"filter":"flag","name":"flag","selector":"fa-flag"},{"filter":"headphones","name":"headphones","selector":"fa-headphones"},{"filter":"volume-off","name":"volume-off","selector":"fa-volume-off"},{"filter":"volume-down","name":"volume-down","selector":"fa-volume-down"},{"filter":"volume-up","name":"volume-up","selector":"fa-volume-up"},{"filter":"qrcode","name":"qrcode","selector":"fa-qrcode"},{"filter":"barcode","name":"barcode","selector":"fa-barcode"},{"filter":"tag","name":"tag","selector":"fa-tag"},{"filter":"tags","name":"tags","selector":"fa-tags"},{"filter":"book","name":"book","selector":"fa-book"},{"filter":"bookmark","name":"bookmark","selector":"fa-bookmark"},{"filter":"print","name":"print","selector":"fa-print"},{"filter":"camera","name":"camera","selector":"fa-camera"},{"filter":"font","name":"font","selector":"fa-font"},{"filter":"bold","name":"bold","selector":"fa-bold"},{"filter":"italic","name":"italic","selector":"fa-italic"},{"filter":"text-height","name":"text-height","selector":"fa-text-height"},{"filter":"text-width","name":"text-width","selector":"fa-text-width"},{"filter":"align-left","name":"align-left","selector":"fa-align-left"},{"filter":"align-center","name":"align-center","selector":"fa-align-center"},{"filter":"align-right","name":"align-right","selector":"fa-align-right"},{"filter":"align-justify","name":"align-justify","selector":"fa-align-justify"},{"filter":"list","name":"list","selector":"fa-list"},{"filter":"outdent","name":"outdent","selector":"fa-outdent"},{"filter":"indent","name":"indent","selector":"fa-indent"},{"filter":"video-camera","name":"video-camera","selector":"fa-video-camera"},{"filter":"picture-o","name":"picture-o","selector":"fa-picture-o"},{"filter":"pencil","name":"pencil","selector":"fa-pencil"},{"filter":"map-marker","name":"map-marker","selector":"fa-map-marker"},{"filter":"adjust","name":"adjust","selector":"fa-adjust"},{"filter":"tint","name":"tint","selector":"fa-tint"},{"filter":"pencil-square-o","name":"pencil-square-o","selector":"fa-pencil-square-o"},{"filter":"share-square-o","name":"share-square-o","selector":"fa-share-square-o"},{"filter":"check-square-o","name":"check-square-o","selector":"fa-check-square-o"},{"filter":"arrows","name":"arrows","selector":"fa-arrows"},{"filter":"step-backward","name":"step-backward","selector":"fa-step-backward"},{"filter":"fast-backward","name":"fast-backward","selector":"fa-fast-backward"},{"filter":"backward","name":"backward","selector":"fa-backward"},{"filter":"play","name":"play","selector":"fa-play"},{"filter":"pause","name":"pause","selector":"fa-pause"},{"filter":"stop","name":"stop","selector":"fa-stop"},{"filter":"forward","name":"forward","selector":"fa-forward"},{"filter":"fast-forward","name":"fast-forward","selector":"fa-fast-forward"},{"filter":"step-forward","name":"step-forward","selector":"fa-step-forward"},{"filter":"eject","name":"eject","selector":"fa-eject"},{"filter":"chevron-left","name":"chevron-left","selector":"fa-chevron-left"},{"filter":"chevron-right","name":"chevron-right","selector":"fa-chevron-right"},{"filter":"plus-circle","name":"plus-circle","selector":"fa-plus-circle"},{"filter":"minus-circle","name":"minus-circle","selector":"fa-minus-circle"},{"filter":"times-circle","name":"times-circle","selector":"fa-times-circle"},{"filter":"check-circle","name":"check-circle","selector":"fa-check-circle"},{"filter":"question-circle","name":"question-circle","selector":"fa-question-circle"},{"filter":"info-circle","name":"info-circle","selector":"fa-info-circle"},{"filter":"crosshairs","name":"crosshairs","selector":"fa-crosshairs"},{"filter":"times-circle-o","name":"times-circle-o","selector":"fa-times-circle-o"},{"filter":"check-circle-o","name":"check-circle-o","selector":"fa-check-circle-o"},{"filter":"ban","name":"ban","selector":"fa-ban"},{"filter":"arrow-left","name":"arrow-left","selector":"fa-arrow-left"},{"filter":"arrow-right","name":"arrow-right","selector":"fa-arrow-right"},{"filter":"arrow-up","name":"arrow-up","selector":"fa-arrow-up"},{"filter":"arrow-down","name":"arrow-down","selector":"fa-arrow-down"},{"filter":"share","name":"share","selector":"fa-share"},{"filter":"expand","name":"expand","selector":"fa-expand"},{"filter":"compress","name":"compress","selector":"fa-compress"},{"filter":"plus","name":"plus","selector":"fa-plus"},{"filter":"minus","name":"minus","selector":"fa-minus"},{"filter":"asterisk","name":"asterisk","selector":"fa-asterisk"},{"filter":"exclamation-circle","name":"exclamation-circle","selector":"fa-exclamation-circle"},{"filter":"gift","name":"gift","selector":"fa-gift"},{"filter":"leaf","name":"leaf","selector":"fa-leaf"},{"filter":"fire","name":"fire","selector":"fa-fire"},{"filter":"eye","name":"eye","selector":"fa-eye"},{"filter":"eye-slash","name":"eye-slash","selector":"fa-eye-slash"},{"filter":"exclamation-triangle","name":"exclamation-triangle","selector":"fa-exclamation-triangle"},{"filter":"plane","name":"plane","selector":"fa-plane"},{"filter":"calendar","name":"calendar","selector":"fa-calendar"},{"filter":"random","name":"random","selector":"fa-random"},{"filter":"comment","name":"comment","selector":"fa-comment"},{"filter":"magnet","name":"magnet","selector":"fa-magnet"},{"filter":"chevron-up","name":"chevron-up","selector":"fa-chevron-up"},{"filter":"chevron-down","name":"chevron-down","selector":"fa-chevron-down"},{"filter":"retweet","name":"retweet","selector":"fa-retweet"},{"filter":"shopping-cart","name":"shopping-cart","selector":"fa-shopping-cart"},{"filter":"folder","name":"folder","selector":"fa-folder"},{"filter":"folder-open","name":"folder-open","selector":"fa-folder-open"},{"filter":"arrows-v","name":"arrows-v","selector":"fa-arrows-v"},{"filter":"arrows-h","name":"arrows-h","selector":"fa-arrows-h"},{"filter":"bar-chart-o","name":"bar-chart-o","selector":"fa-bar-chart-o"},{"filter":"twitter-square","name":"twitter-square","selector":"fa-twitter-square"},{"filter":"facebook-square","name":"facebook-square","selector":"fa-facebook-square"},{"filter":"camera-retro","name":"camera-retro","selector":"fa-camera-retro"},{"filter":"key","name":"key","selector":"fa-key"},{"filter":"cogs","name":"cogs","selector":"fa-cogs"},{"filter":"comments","name":"comments","selector":"fa-comments"},{"filter":"thumbs-o-up","name":"thumbs-o-up","selector":"fa-thumbs-o-up"},{"filter":"thumbs-o-down","name":"thumbs-o-down","selector":"fa-thumbs-o-down"},{"filter":"star-half","name":"star-half","selector":"fa-star-half"},{"filter":"heart-o","name":"heart-o","selector":"fa-heart-o"},{"filter":"sign-out","name":"sign-out","selector":"fa-sign-out"},{"filter":"linkedin-square","name":"linkedin-square","selector":"fa-linkedin-square"},{"filter":"thumb-tack","name":"thumb-tack","selector":"fa-thumb-tack"},{"filter":"external-link","name":"external-link","selector":"fa-external-link"},{"filter":"sign-in","name":"sign-in","selector":"fa-sign-in"},{"filter":"trophy","name":"trophy","selector":"fa-trophy"},{"filter":"github-square","name":"github-square","selector":"fa-github-square"},{"filter":"upload","name":"upload","selector":"fa-upload"},{"filter":"lemon-o","name":"lemon-o","selector":"fa-lemon-o"},{"filter":"phone","name":"phone","selector":"fa-phone"},{"filter":"square-o","name":"square-o","selector":"fa-square-o"},{"filter":"bookmark-o","name":"bookmark-o","selector":"fa-bookmark-o"},{"filter":"phone-square","name":"phone-square","selector":"fa-phone-square"},{"filter":"twitter","name":"twitter","selector":"fa-twitter"},{"filter":"facebook","name":"facebook","selector":"fa-facebook"},{"filter":"github","name":"github","selector":"fa-github"},{"filter":"unlock","name":"unlock","selector":"fa-unlock"},{"filter":"credit-card","name":"credit-card","selector":"fa-credit-card"},{"filter":"rss","name":"rss","selector":"fa-rss"},{"filter":"hdd-o","name":"hdd-o","selector":"fa-hdd-o"},{"filter":"bullhorn","name":"bullhorn","selector":"fa-bullhorn"},{"filter":"bell","name":"bell","selector":"fa-bell"},{"filter":"certificate","name":"certificate","selector":"fa-certificate"},{"filter":"hand-o-right","name":"hand-o-right","selector":"fa-hand-o-right"},{"filter":"hand-o-left","name":"hand-o-left","selector":"fa-hand-o-left"},{"filter":"hand-o-up","name":"hand-o-up","selector":"fa-hand-o-up"},{"filter":"hand-o-down","name":"hand-o-down","selector":"fa-hand-o-down"},{"filter":"arrow-circle-left","name":"arrow-circle-left","selector":"fa-arrow-circle-left"},{"filter":"arrow-circle-right","name":"arrow-circle-right","selector":"fa-arrow-circle-right"},{"filter":"arrow-circle-up","name":"arrow-circle-up","selector":"fa-arrow-circle-up"},{"filter":"arrow-circle-down","name":"arrow-circle-down","selector":"fa-arrow-circle-down"},{"filter":"globe","name":"globe","selector":"fa-globe"},{"filter":"wrench","name":"wrench","selector":"fa-wrench"},{"filter":"tasks","name":"tasks","selector":"fa-tasks"},{"filter":"filter","name":"filter","selector":"fa-filter"},{"filter":"briefcase","name":"briefcase","selector":"fa-briefcase"},{"filter":"arrows-alt","name":"arrows-alt","selector":"fa-arrows-alt"},{"filter":"users","name":"users","selector":"fa-users"},{"filter":"link","name":"link","selector":"fa-link"},{"filter":"cloud","name":"cloud","selector":"fa-cloud"},{"filter":"flask","name":"flask","selector":"fa-flask"},{"filter":"scissors","name":"scissors","selector":"fa-scissors"},{"filter":"files-o","name":"files-o","selector":"fa-files-o"},{"filter":"paperclip","name":"paperclip","selector":"fa-paperclip"},{"filter":"floppy-o","name":"floppy-o","selector":"fa-floppy-o"},{"filter":"square","name":"square","selector":"fa-square"},{"filter":"bars","name":"bars","selector":"fa-bars"},{"filter":"list-ul","name":"list-ul","selector":"fa-list-ul"},{"filter":"list-ol","name":"list-ol","selector":"fa-list-ol"},{"filter":"strikethrough","name":"strikethrough","selector":"fa-strikethrough"},{"filter":"underline","name":"underline","selector":"fa-underline"},{"filter":"table","name":"table","selector":"fa-table"},{"filter":"magic","name":"magic","selector":"fa-magic"},{"filter":"truck","name":"truck","selector":"fa-truck"},{"filter":"pinterest","name":"pinterest","selector":"fa-pinterest"},{"filter":"pinterest-square","name":"pinterest-square","selector":"fa-pinterest-square"},{"filter":"google-plus-square","name":"google-plus-square","selector":"fa-google-plus-square"},{"filter":"google-plus","name":"google-plus","selector":"fa-google-plus"},{"filter":"money","name":"money","selector":"fa-money"},{"filter":"caret-down","name":"caret-down","selector":"fa-caret-down"},{"filter":"caret-up","name":"caret-up","selector":"fa-caret-up"},{"filter":"caret-left","name":"caret-left","selector":"fa-caret-left"},{"filter":"caret-right","name":"caret-right","selector":"fa-caret-right"},{"filter":"columns","name":"columns","selector":"fa-columns"},{"filter":"sort","name":"sort","selector":"fa-sort"},{"filter":"sort-asc","name":"sort-asc","selector":"fa-sort-asc"},{"filter":"sort-desc","name":"sort-desc","selector":"fa-sort-desc"},{"filter":"envelope","name":"envelope","selector":"fa-envelope"},{"filter":"linkedin","name":"linkedin","selector":"fa-linkedin"},{"filter":"undo","name":"undo","selector":"fa-undo"},{"filter":"gavel","name":"gavel","selector":"fa-gavel"},{"filter":"tachometer","name":"tachometer","selector":"fa-tachometer"},{"filter":"comment-o","name":"comment-o","selector":"fa-comment-o"},{"filter":"comments-o","name":"comments-o","selector":"fa-comments-o"},{"filter":"bolt","name":"bolt","selector":"fa-bolt"},{"filter":"sitemap","name":"sitemap","selector":"fa-sitemap"},{"filter":"umbrella","name":"umbrella","selector":"fa-umbrella"},{"filter":"clipboard","name":"clipboard","selector":"fa-clipboard"},{"filter":"lightbulb-o","name":"lightbulb-o","selector":"fa-lightbulb-o"},{"filter":"exchange","name":"exchange","selector":"fa-exchange"},{"filter":"cloud-download","name":"cloud-download","selector":"fa-cloud-download"},{"filter":"cloud-upload","name":"cloud-upload","selector":"fa-cloud-upload"},{"filter":"user-md","name":"user-md","selector":"fa-user-md"},{"filter":"stethoscope","name":"stethoscope","selector":"fa-stethoscope"},{"filter":"suitcase","name":"suitcase","selector":"fa-suitcase"},{"filter":"bell-o","name":"bell-o","selector":"fa-bell-o"},{"filter":"coffee","name":"coffee","selector":"fa-coffee"},{"filter":"cutlery","name":"cutlery","selector":"fa-cutlery"},{"filter":"file-text-o","name":"file-text-o","selector":"fa-file-text-o"},{"filter":"building-o","name":"building-o","selector":"fa-building-o"},{"filter":"hospital-o","name":"hospital-o","selector":"fa-hospital-o"},{"filter":"ambulance","name":"ambulance","selector":"fa-ambulance"},{"filter":"medkit","name":"medkit","selector":"fa-medkit"},{"filter":"fighter-jet","name":"fighter-jet","selector":"fa-fighter-jet"},{"filter":"beer","name":"beer","selector":"fa-beer"},{"filter":"h-square","name":"h-square","selector":"fa-h-square"},{"filter":"plus-square","name":"plus-square","selector":"fa-plus-square"},{"filter":"angle-double-left","name":"angle-double-left","selector":"fa-angle-double-left"},{"filter":"angle-double-right","name":"angle-double-right","selector":"fa-angle-double-right"},{"filter":"angle-double-up","name":"angle-double-up","selector":"fa-angle-double-up"},{"filter":"angle-double-down","name":"angle-double-down","selector":"fa-angle-double-down"},{"filter":"angle-left","name":"angle-left","selector":"fa-angle-left"},{"filter":"angle-right","name":"angle-right","selector":"fa-angle-right"},{"filter":"angle-up","name":"angle-up","selector":"fa-angle-up"},{"filter":"angle-down","name":"angle-down","selector":"fa-angle-down"},{"filter":"desktop","name":"desktop","selector":"fa-desktop"},{"filter":"laptop","name":"laptop","selector":"fa-laptop"},{"filter":"tablet","name":"tablet","selector":"fa-tablet"},{"filter":"mobile","name":"mobile","selector":"fa-mobile"},{"filter":"circle-o","name":"circle-o","selector":"fa-circle-o"},{"filter":"quote-left","name":"quote-left","selector":"fa-quote-left"},{"filter":"quote-right","name":"quote-right","selector":"fa-quote-right"},{"filter":"spinner","name":"spinner","selector":"fa-spinner"},{"filter":"circle","name":"circle","selector":"fa-circle"},{"filter":"reply","name":"reply","selector":"fa-reply"},{"filter":"github-alt","name":"github-alt","selector":"fa-github-alt"},{"filter":"folder-o","name":"folder-o","selector":"fa-folder-o"},{"filter":"folder-open-o","name":"folder-open-o","selector":"fa-folder-open-o"},{"filter":"smile-o","name":"smile-o","selector":"fa-smile-o"},{"filter":"frown-o","name":"frown-o","selector":"fa-frown-o"},{"filter":"meh-o","name":"meh-o","selector":"fa-meh-o"},{"filter":"gamepad","name":"gamepad","selector":"fa-gamepad"},{"filter":"keyboard-o","name":"keyboard-o","selector":"fa-keyboard-o"},{"filter":"flag-o","name":"flag-o","selector":"fa-flag-o"},{"filter":"flag-checkered","name":"flag-checkered","selector":"fa-flag-checkered"},{"filter":"terminal","name":"terminal","selector":"fa-terminal"},{"filter":"code","name":"code","selector":"fa-code"},{"filter":"reply-all","name":"reply-all","selector":"fa-reply-all"},{"filter":"mail-reply-all","name":"mail-reply-all","selector":"fa-mail-reply-all"},{"filter":"star-half-o","name":"star-half-o","selector":"fa-star-half-o"},{"filter":"location-arrow","name":"location-arrow","selector":"fa-location-arrow"},{"filter":"crop","name":"crop","selector":"fa-crop"},{"filter":"code-fork","name":"code-fork","selector":"fa-code-fork"},{"filter":"chain-broken","name":"chain-broken","selector":"fa-chain-broken"},{"filter":"question","name":"question","selector":"fa-question"},{"filter":"info","name":"info","selector":"fa-info"},{"filter":"exclamation","name":"exclamation","selector":"fa-exclamation"},{"filter":"superscript","name":"superscript","selector":"fa-superscript"},{"filter":"subscript","name":"subscript","selector":"fa-subscript"},{"filter":"eraser","name":"eraser","selector":"fa-eraser"},{"filter":"puzzle-piece","name":"puzzle-piece","selector":"fa-puzzle-piece"},{"filter":"microphone","name":"microphone","selector":"fa-microphone"},{"filter":"microphone-slash","name":"microphone-slash","selector":"fa-microphone-slash"},{"filter":"shield","name":"shield","selector":"fa-shield"},{"filter":"calendar-o","name":"calendar-o","selector":"fa-calendar-o"},{"filter":"fire-extinguisher","name":"fire-extinguisher","selector":"fa-fire-extinguisher"},{"filter":"rocket","name":"rocket","selector":"fa-rocket"},{"filter":"maxcdn","name":"maxcdn","selector":"fa-maxcdn"},{"filter":"chevron-circle-left","name":"chevron-circle-left","selector":"fa-chevron-circle-left"},{"filter":"chevron-circle-right","name":"chevron-circle-right","selector":"fa-chevron-circle-right"},{"filter":"chevron-circle-up","name":"chevron-circle-up","selector":"fa-chevron-circle-up"},{"filter":"chevron-circle-down","name":"chevron-circle-down","selector":"fa-chevron-circle-down"},{"filter":"html5","name":"html5","selector":"fa-html5"},{"filter":"css3","name":"css3","selector":"fa-css3"},{"filter":"anchor","name":"anchor","selector":"fa-anchor"},{"filter":"unlock-alt","name":"unlock-alt","selector":"fa-unlock-alt"},{"filter":"bullseye","name":"bullseye","selector":"fa-bullseye"},{"filter":"ellipsis-h","name":"ellipsis-h","selector":"fa-ellipsis-h"},{"filter":"ellipsis-v","name":"ellipsis-v","selector":"fa-ellipsis-v"},{"filter":"rss-square","name":"rss-square","selector":"fa-rss-square"},{"filter":"play-circle","name":"play-circle","selector":"fa-play-circle"},{"filter":"ticket","name":"ticket","selector":"fa-ticket"},{"filter":"minus-square","name":"minus-square","selector":"fa-minus-square"},{"filter":"minus-square-o","name":"minus-square-o","selector":"fa-minus-square-o"},{"filter":"level-up","name":"level-up","selector":"fa-level-up"},{"filter":"level-down","name":"level-down","selector":"fa-level-down"},{"filter":"check-square","name":"check-square","selector":"fa-check-square"},{"filter":"pencil-square","name":"pencil-square","selector":"fa-pencil-square"},{"filter":"external-link-square","name":"external-link-square","selector":"fa-external-link-square"},{"filter":"share-square","name":"share-square","selector":"fa-share-square"},{"filter":"compass","name":"compass","selector":"fa-compass"},{"filter":"caret-square-o-down","name":"caret-square-o-down","selector":"fa-caret-square-o-down"},{"filter":"caret-square-o-up","name":"caret-square-o-up","selector":"fa-caret-square-o-up"},{"filter":"caret-square-o-right","name":"caret-square-o-right","selector":"fa-caret-square-o-right"},{"filter":"eur","name":"eur","selector":"fa-eur"},{"filter":"gbp","name":"gbp","selector":"fa-gbp"},{"filter":"usd","name":"usd","selector":"fa-usd"},{"filter":"inr","name":"inr","selector":"fa-inr"},{"filter":"jpy","name":"jpy","selector":"fa-jpy"},{"filter":"rub","name":"rub","selector":"fa-rub"},{"filter":"krw","name":"krw","selector":"fa-krw"},{"filter":"btc","name":"btc","selector":"fa-btc"},{"filter":"file","name":"file","selector":"fa-file"},{"filter":"file-text","name":"file-text","selector":"fa-file-text"},{"filter":"sort-alpha-asc","name":"sort-alpha-asc","selector":"fa-sort-alpha-asc"},{"filter":"sort-alpha-desc","name":"sort-alpha-desc","selector":"fa-sort-alpha-desc"},{"filter":"sort-amount-asc","name":"sort-amount-asc","selector":"fa-sort-amount-asc"},{"filter":"sort-amount-desc","name":"sort-amount-desc","selector":"fa-sort-amount-desc"},{"filter":"sort-numeric-asc","name":"sort-numeric-asc","selector":"fa-sort-numeric-asc"},{"filter":"sort-numeric-desc","name":"sort-numeric-desc","selector":"fa-sort-numeric-desc"},{"filter":"thumbs-up","name":"thumbs-up","selector":"fa-thumbs-up"},{"filter":"thumbs-down","name":"thumbs-down","selector":"fa-thumbs-down"},{"filter":"youtube-square","name":"youtube-square","selector":"fa-youtube-square"},{"filter":"youtube","name":"youtube","selector":"fa-youtube"},{"filter":"xing","name":"xing","selector":"fa-xing"},{"filter":"xing-square","name":"xing-square","selector":"fa-xing-square"},{"filter":"youtube-play","name":"youtube-play","selector":"fa-youtube-play"},{"filter":"dropbox","name":"dropbox","selector":"fa-dropbox"},{"filter":"stack-overflow","name":"stack-overflow","selector":"fa-stack-overflow"},{"filter":"instagram","name":"instagram","selector":"fa-instagram"},{"filter":"flickr","name":"flickr","selector":"fa-flickr"},{"filter":"adn","name":"adn","selector":"fa-adn"},{"filter":"bitbucket","name":"bitbucket","selector":"fa-bitbucket"},{"filter":"bitbucket-square","name":"bitbucket-square","selector":"fa-bitbucket-square"},{"filter":"tumblr","name":"tumblr","selector":"fa-tumblr"},{"filter":"tumblr-square","name":"tumblr-square","selector":"fa-tumblr-square"},{"filter":"long-arrow-down","name":"long-arrow-down","selector":"fa-long-arrow-down"},{"filter":"long-arrow-up","name":"long-arrow-up","selector":"fa-long-arrow-up"},{"filter":"long-arrow-left","name":"long-arrow-left","selector":"fa-long-arrow-left"},{"filter":"long-arrow-right","name":"long-arrow-right","selector":"fa-long-arrow-right"},{"filter":"apple","name":"apple","selector":"fa-apple"},{"filter":"windows","name":"windows","selector":"fa-windows"},{"filter":"android","name":"android","selector":"fa-android"},{"filter":"linux","name":"linux","selector":"fa-linux"},{"filter":"dribbble","name":"dribbble","selector":"fa-dribbble"},{"filter":"skype","name":"skype","selector":"fa-skype"},{"filter":"foursquare","name":"foursquare","selector":"fa-foursquare"},{"filter":"trello","name":"trello","selector":"fa-trello"},{"filter":"female","name":"female","selector":"fa-female"},{"filter":"male","name":"male","selector":"fa-male"},{"filter":"gittip","name":"gittip","selector":"fa-gittip"},{"filter":"sun-o","name":"sun-o","selector":"fa-sun-o"},{"filter":"moon-o","name":"moon-o","selector":"fa-moon-o"},{"filter":"archive","name":"archive","selector":"fa-archive"},{"filter":"bug","name":"bug","selector":"fa-bug"},{"filter":"vk","name":"vk","selector":"fa-vk"},{"filter":"weibo","name":"weibo","selector":"fa-weibo"},{"filter":"renren","name":"renren","selector":"fa-renren"},{"filter":"pagelines","name":"pagelines","selector":"fa-pagelines"},{"filter":"stack-exchange","name":"stack-exchange","selector":"fa-stack-exchange"},{"filter":"arrow-circle-o-right","name":"arrow-circle-o-right","selector":"fa-arrow-circle-o-right"},{"filter":"arrow-circle-o-left","name":"arrow-circle-o-left","selector":"fa-arrow-circle-o-left"},{"filter":"caret-square-o-left","name":"caret-square-o-left","selector":"fa-caret-square-o-left"},{"filter":"dot-circle-o","name":"dot-circle-o","selector":"fa-dot-circle-o"},{"filter":"wheelchair","name":"wheelchair","selector":"fa-wheelchair"},{"filter":"vimeo-square","name":"vimeo-square","selector":"fa-vimeo-square"},{"filter":"try","name":"try","selector":"fa-try"},{"filter":"plus-square-o","name":"plus-square-o","selector":"fa-plus-square-o"}]'
                    });
                });
            </script>
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
<?php break; case "picture": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "picture_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.path);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.id);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.path);
                            } else {
                                input.val(response.path);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.path);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "file": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "files": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                                 if (is_array($form['value'])) {
                                    $files = $form['value'];
                                    $input_value = implode(',', $form['value']);
                                } else {
                                    $files = explode(',', $form['value']);
                                    $input_value = $form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage) {
                        var $li = $( '#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css( 'width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $('#'+file.id).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if ( !$error.length ) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "media": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传视频</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file, response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.id);
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "medias": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                                 if (is_array($form['value'])) {
                                    $files = $form['value'];
                                    $input_value = implode(',', $form['value']);
                                } else {
                                    $files = explode(',', $form['value']);
                                    $input_value = $form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file, response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $( '#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "summernote": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <textarea name="<?php echo $form['name']; ?>" rwos="5" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $k; ?>" class="form-control" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>
            </textarea>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/summernote/summernote.css">
            <style type="text/css" media="screen">
                .note-editor .modal-body .form-group {
                    margin: 0;
                }
            </style>
            <script type="text/javascript" src="__PUBLIC__/libs/summernote/summernote.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $k; ?>').summernote({
                        height: 300,
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "kindeditor": ?>
    <style>
        .ke-container{width:70% !important;}
    </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" >
            <textarea name="<?php echo $form['name']; ?>" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $k; ?>" style="width:70%" class="form-control " <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>
            </textarea><br>
           
            <script type="text/javascript" src="__PUBLIC__/libs/kindeditor/kindeditor-min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    KindEditor.ready(function(K) {
                        kindeditor_<?php echo $k; ?> = K.create('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $k; ?>', {
                            allowFileManager : true,
                            filePostName : 'file',
                            cssPath : [
                                '__LYUI__/css/lyui.min.css',
                                '__PUBLIC__/libs/kindeditor/plugins/code/prettify.css'
                            ],
                            width : '100%',
                            height : '500px',
                            resizeType: 1,
                            pasteType : 2,
                            filterMode: <?php if(MODULE_MARK === 'Admin') {echo 'false';} else {echo 'true';} ?>,
                            urlType : "domain",
                            fileManagerJson : '<?php echo U(MODULE_MARK."/Upload/fileManager", '', true, true); ?>',
                            uploadJson : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "kindeditor", "module_name" => request()->module()), true, true); ?>',
                            extraFileUploadParams: {
                                session_id : '<?php echo session_id(); ?>'
                            },
                            afterBlur: function(){this.sync();}
                        });
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "editormd": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div name="<?php echo $form['name']; ?>" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>" style="z-index: 1000;" class="form-control" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>></div>
            <pre id="default_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>" class="hidden"><?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?></pre>

            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/editormd/css/editormd.min.css">
            <script type="text/javascript" src="__PUBLIC__/libs/editormd/js/editormd.min.js"></script>

            <script type="text/javascript">
                //解码
                function html_decode(str){
                    var s = "";
                    if (str.length == 0) return "";
                    s = str.replace(/&amp;/g, "&");
                    s = s.replace(/&lt;/g, "<");
                    s = s.replace(/&gt;/g, ">");
                    s = s.replace(/&nbsp;/g, " ");
                    s = s.replace(/&#39;/g, "\'");
                    s = s.replace(/&quot;/g, "\"");
                    s = s.replace(/<br>/g, "\n");
                    return s;
                }

                $(function(){
                    var editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>_content = html_decode($('#default_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>').html());
                    var editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?> = editormd({
                        id                : '<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>',
                        path              : '__PUBLIC__/libs/editormd/lib/',
                        pluginPath        : '__PUBLIC__/libs/editormd/plugins/',
                        name              : '<?php echo $form['name']; ?>',
                        markdown          : editormd_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $k; ?>_content,
                        imageUpload       : true,
                        imageFormats      : ["jpg", "jpeg", "gif", "png", "bmp"],
                        imageUploadURL    : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "editormd", "module_name" => request()->module()), true, true); ?>',
                        placeholder       : '有范科技积木式云平台！',
                        width             : '100%',
                        height            : 640,
                        watch             : <?php if(MODULE_MARK === 'Admin'){ echo 'false';} else {echo 'true';} ?>,
                        codeFold          : true,
                        htmlDecode        : false,
                        toolbarAutoFixed  : false,
                        crossDomainUpload : true
                    });
                });
            </script>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "tags": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="text" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>" class="form-control" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input.css">
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $k; ?>'), tagsPre = [];
                    if (tags.length > 0) {
                        var items = tags.val().split(','), result = [];
                        for (var i = 0; i < items.length; i ++) {
                            var tag = items[i];
                            if (!tag) {
                                continue;
                            }
                            tagsPre.push({
                                id      :   tag,
                                title   :   tag
                            });
                        }
                    }
                    tags.tokenInput("<?php echo $form['extra']['self']['search']; ?>",{
                        propertyToSearch    :   'title',
                        tokenValue          :   'title',
                        searchDelay         :   0,
                        tokenLimit          :   <?php echo $form['extra']['self']['limit'] ? : 5; ?>,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   <?php echo $form['extra']['self']['free'] ? : true; ?>, // 是否允许添加搜索结果中没有的数据
                        hintText            :   '请输入标签名',
                        noResultsText       :   '此标签不存在, 按回车创建',
                        searchingText       :   '查找中...',
                        prePopulate         :   tagsPre,
                        theme               :   'bootstrap',
                        onAdd: function (item){  //新增系统没有的标签时提交到数据库
                            <?php if($form['extra']['self']['new']): ?>
                                $.post("<?php echo $form['extra']['self']['new']; ?>", {'title': item.title});
                            <?php endif; ?>
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "board": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" name="<?php echo $form['name']; ?>" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
            <div class="row board_list boards_<?php echo $k; ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
                <div class="container-fluid">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                        <div class="panel panel-default board col-xs-12 col-sm-3" data-id="<?php echo $option_key; ?>">
                            <div class="panel-heading">
                                <strong><?php echo $option['title']; ?></strong>
                            </div>
                            <div class="list-group dragsort_<?php echo $k; ?>" data-group="<?php echo $option_key; ?>">
                                <?php if(is_array($option['field']) || $option['field'] instanceof \think\Collection || $option['field'] instanceof \think\Paginator): if( count($option['field'])==0 ) : echo "" ;else: foreach($option['field'] as $option_field_key=>$option_field): ?>
                                    <div class="list-group-item">
                                        <em data="<?php echo $field['id']; ?>"><?php echo $option_field; ?></em>
                                        <input type="hidden" name="<?php echo $form['name']; ?>[<?php echo $option_key; ?>][]" value="<?php echo $option_field_key; ?>"/>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <script type="text/javascript">
                //拖曳插件初始化
                $(function(){
                    $(".dragsort_<?php echo $k; ?>").dragsort({
                         dragSelector:'div',
                         placeHolderTemplate: '<div class="clearfix draging-place">&nbsp;</div>',
                         dragBetween:true, //允许拖动到任意地方
                         dragEnd:function(){
                             var self = $(this);
                             self.find('input').attr('name', '<?php echo $form['name']; ?>[' + self.closest('.dragsort_<?php echo $k; ?>').data('group') + '][]');
                         }
                     });
                });
            </script>
            <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "choice": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmember'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此人</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "huxing": ?>
	<style>
		.eeee{line-height: 34px;}
	</style>


    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<div class="row">
        		<div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="ping" value="<?php echo $form['value']['ping']; ?>"><span class="col-xs-4 eeee">平</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="room" value="<?php echo $form['value']['room']; ?>"><span class="col-xs-4 eeee">室</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="office" value="<?php echo $form['value']['office']; ?>"><span class="col-xs-4 eeee">厅</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="guard" value="<?php echo $form['value']['guard']; ?>"><span class="col-xs-4 eeee">卫</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="kitchen" value="<?php echo $form['value']['kitchen']; ?>"><span class="col-xs-4 eeee">厨</span>
			  </div>
			   <div class="col-xs-2">
			    <span class="col-xs-4 eeee" style="text-align: right;">可住</span><input type="text" class="form-control col-xs-4"  name="canlive" value="<?php echo $form['value']['canlive']; ?>"><span class="col-xs-2 eeee">人</span>
			  </div>
			  <div class="col-xs-2">
			    <span class="col-xs-2 eeee" >共</span><input type="text" class="form-control col-xs-4"  name="bed" value="<?php echo $form['value']['bed']; ?>"><span class="col-xs-4 eeee">张床</span>
			  </div>


			</div>
        </div>
    </div>
<?php break; case "sheshi": ?>
    <style>
        .right{display:flex;}
        .kdawi{width:33%;}
    </style>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
<!-- 
<?php

    echo '<pre>';


var_dump($form);
    echo '</pre>';


?> -->
     <script type="text/javascript">
        $(function(){
            $('.auth input[type="checkbox"]').on('change',function(){
                //遍历选中当前权限的子权限
                $('.'+$(this).attr('data-module-name')+' .auth'+$(this).val()).find('input').prop('checked',this.checked);

                //遍历选中当前权限的父权限
                if ($(this).is(':checked') == true) {
                    var $fix = $(this);
                    while ($fix.length > 0) {
                        var $tmp = $fix.closest('div').prev('label').find('input');
                        console.log($tmp);
                        if ($tmp.length > 0) {
                            $tmp.attr("checked",true);
                            $fix = $tmp;
                        } else {
                            break;
                        }
                    }
                }
            });
        });
    </script>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
                <div class="auth">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;$module_name = $key; ?>
                        <div class="<?php echo $vo1['id']; ?>">
                            <div class="lyui-control lyui-checkbox">
                                <label class="checkbox-label checkbox-inline">
                                    <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo1['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo1['id']; ?>">
                                    <span class="lyui-control-indicator"></span>
                                    <span> <?php echo $vo1['title']; ?></span>
                                </label>
                                <div class="auth<?php echo $vo1['id']; ?>" style="padding-left: 25px;margin-top: 10px;">
                                    <?php if(is_array($vo1['zz']) || $vo1['zz'] instanceof \think\Collection || $vo1['zz'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['zz'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                        <label class="checkbox-label checkbox-inline">
                                            <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo2['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo2['id']; ?>">
                                            <span class="lyui-control-indicator"></span>
                                            <span> <?php echo $vo2['title']; ?></span>
                                        </label>
                                      
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
     
    </div>

<?php break; case "address": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
            <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
            <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
          
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址">
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
            var city=$("#cityid").val();
            var district=$("#districtid").val();
            var selCity = $("#seleAreaNext")[0];
            for (var i = selCity.length - 1; i >= 0; i--) {
                selCity.options[i] = null;
            }
            var opt = new Option("请选择省", "-1");
            selCity.options.add(opt);
            // 添加省
            $.ajax({
                type : "post",
                url : "<?php echo U('admin/index/getprovince'); ?>",
                dataType : "json",
                success : function(data) {
                    if (data != null && data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            var opt = new Option(data[i].province_name,
                                    data[i].province_id);
                            selCity.options.add(opt);
                        }
                       // if(province){
                       //  $("#seleAreaNext").val(province);
                       // }
                       
                    }
                }
            });

          
    
            // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }

                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                
                                <?php case "yaddress": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
    <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
    <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
    <input type="hidden" id="adressid" value="1" />
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址"}>
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
    var city=$("#cityid").val();
    var district=$("#districtid").val();
    var selProvince=$("#seleAreaNext")[0];
    for (var i = selProvince.length - 1; i >= 0; i--) {
        selProvince.options[i] = null;
    }
    var opt = new Option("请选择省", "-1");
    selProvince.options.add(opt);
        //添加省
        $.ajax({
            type : "post",
            url : "<?php echo U('admin/index/getprovince'); ?>",
            dataType : "json",
            success : function(data) {
                if (data != null && data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        var opt = new Option(data[i].province_name, data[i].province_id);
                        selProvince.options.add(opt);
                    }
                    $("#seleAreaNext").val(province);
                }
            }
        });
    var address_id=$("#adressid").val();
    if(address_id!=0){
        //查询这个收货地址的详细地址
        //加载市
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getCity'); ?>",
                    dataType: "json",
                    data: { "province_id": province },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name, data[i].city_id);
                                selCity.options.add(opt);
                            }
                        $("#seleAreaThird").val(city);
                        }
                    }
                });
                //加载区县
            var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区/县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType: "json",
                    data: { "city_id": city },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name, data[i].district_id);
                                selArea.options.add(opt);
                            }
                        $("#seleAreaFouth").val(district);
                        }
                    }
                });
    }
                    // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }
                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                
                                <?php case "map": ?>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=ASOBZ-U2RK6-PZQSM-ESQWD-7XO3J-TAFF3"></script>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<input type="hidden" name="latitude" id="latitude" value="<?php echo $form['value']['latitude']; ?>">
			<input type="hidden" name="longitude" id="longitude" value="<?php echo $form['value']['longitude']; ?>">
			<div id="container" style="height: 500px; width:70%;"></div>

        </div>
    </div>
   
    <script>
    	var mymap={
			map:'',
			markerArray:[],
			lat:"<?php echo (isset($form['value']['latitude']) && ($form['value']['latitude'] !== '')?$form['value']['latitude']:'39.908859'); ?>",//初始纬度
			lng:"<?php echo (isset($form['value']['longitude']) && ($form['value']['longitude'] !== '')?$form['value']['longitude']:'116.397392'); ?>",//初始经度
			conId:"container",
			jsonArr:[],
			latVal:"latitude",//点击地图后存放纬度INPUT的ID
			lngVal:"longitude",//点击地图后存放经度INPUT的ID
			zoom:12//地图初始缩放比例
		}
    </script>
     <script src="/public/zhuzhuangtu/myqqmap.js"></script>
<?php break; case "modules": ?>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="layui-form" >
            <div class="layui-form-item">
                  <div class="lyui-input-inline">
                    <input type="hidden" id="citys" name="<?php echo $form['name']; ?>" value="<?php echo $form['value']; ?>">
                    <select style="width:100%;" class="form-control lyui-select select" lay-filter="city" lay-verify="required" lay-search="">
                      <option value="">直接选择或搜索选择</option>
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
        </div>

        </div>
    </div>

<script>
layui.use(['form', 'layedit', 'laydate'], function(){

   var  form=layui.form;
  
    form.on('select(city)',function(res){
        $('#citys').val(res.value)
    })
  
  
});
// $("body").on("keyup",".layui-input",function(){
//       $.ajax({
//         url:"<?php echo U('admin/room/getcity'); ?>",
//         type:"post",
//         data:data.field,
//         dataType:'JSON',
//         success:function(res){
            
//             console.log(res)   
//         },
//         error:function(){
//             layer.alert("网络异常")
//         }
//     })
// })

</script>

<?php break; case "timeprice": ?>
	<script src="__PUBLIC__/libs/datetime/dateTime2.js" type="text/javascript" defer="defer"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/datetime/dateTime2.css"/>
    <style type="text/css">
		.dateTime{ position:relative; width:100%; border: 1px solid #ddd; overflow: hidden;}
	</style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
           <div class="dateTime">
    	
		   	    <div id="con" style="width:60%; float:left; overflow: hidden; min-width: 400px;"></div>
			   	<div class="set" style="width:30%; float:left; overflow: hidden;">
			   		<div class="setLock">
			   			<div class="setTime_row">锁房设置：</div>
			   			<input type="checkbox"  name="" id="lock" value="" />锁房
			   			
			   		</div>
			   		<div class="setTime">
			   			<div class="setTime_row">时段设置：</div>
			   			<div class="setTime_row">
			   				
				   		    <select name="s1s" id="s1s" >
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s1e" id="s1e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s1t">%
				   		   
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s2s" id="s2s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s2e" id="s2e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s2t">%
				   		    
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s3s" id="s3s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s3e" id="s3e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s3t">%
				   		    
				   		</div>
				   		
				   		<div class="setTime_row">
				   		    <select name="s4s" id="s4s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s4e" id="s4e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s4t">%
				   		</div>
				   		
				   		
				   		
			   		</div>
			   		<div class="setTotal">
			   			<div class="setTime_row">房价设置：</div>
			   		    <input type="text" id="total" placeholder="请输入价格">元
			   		</div>
			   		<div class="setTime_row"><a onclick="cz.tj()">设置</a></div>
			   	</div>
		   	</div>
        </div>
    </div>
    <input type="hidden" name="<?php echo $form['name']; ?>" id="dateprice" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
    <script>
	layui.use(['form', 'layedit', 'laydate'], function(){
 
  
  
});
		var mydate={
			  hdinput:"<?php echo $form['name']; ?>",
			  con:"con",
		      picker:"",//V-HTML
		      startDate:"",//开始日期
		      endDate:"",// 结束日期
		     startObj:"",//开始LI对象
		      endObj:"",//结束LI对象
		}
	</script>	
<?php break; case "tuikuan": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" name="checkout" <?php if($form['value']['checkout'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="checkout" value="<?php echo (isset($form['value']['checkout']) && ($form['value']['checkout'] !== '')?$form['value']['checkout']:''); ?>">
                </label>
            </div><br><br>
            <div id="dsgj" style="display:none;color:#888;">入住 
                    <select name="day" id="" style="color:red;border:0px;">
                        <option value="1" <?php if($form['value']['day'] == 1): ?>selected<?php endif; ?>>前1天</option>
                        <option value="3" <?php if($form['value']['day'] == 3): ?>selected<?php endif; ?>>前3天</option>
                        <option value="7" <?php if($form['value']['day'] == 7): ?>selected<?php endif; ?>>前7天</option>
                        <option value="15" <?php if($form['value']['day'] == 15): ?>selected<?php endif; ?>>前15天</option>
                        <option value="30" <?php if($form['value']['day'] == 30): ?>selected<?php endif; ?>>前30天</option>
                    </select>
            12点前取消订单，房费可全额退还；<br><br>之后取消订单，收取未住房费的
                    <select name="percent" id="" style="color:red;border:0px;">
                        <option value="10" <?php if($form['value']['percent'] == 10): ?>selected<?php endif; ?>>10%</option>
                        <option value="20" <?php if($form['value']['percent'] == 20): ?>selected<?php endif; ?>>20%</option>
                        <option value="30" <?php if($form['value']['percent'] == 30): ?>selected<?php endif; ?>>30%</option>
                        <option value="40" <?php if($form['value']['percent'] == 40): ?>selected<?php endif; ?>>40%</option>
                        <option value="50" <?php if($form['value']['percent'] == 50): ?>selected<?php endif; ?>>50%</option>
                        <option value="60" <?php if($form['value']['percent'] == 60): ?>selected<?php endif; ?>>60%</option>
                        <option value="70" <?php if($form['value']['percent'] == 70): ?>selected<?php endif; ?>>70%</option>
                        <option value="80" <?php if($form['value']['percent'] == 80): ?>selected<?php endif; ?>>80%</option>
                        <option value="90" <?php if($form['value']['percent'] == 90): ?>selected<?php endif; ?>>90%</option>
                        <option value="100" <?php if($form['value']['percent'] == 100): ?>selected<?php endif; ?>>100%</option>
                    </select>作为违约金支付给房东。（包含未入住和提现离店）</div>
           
            <a href="tuikuan.html"></a>
            <script type="text/javascript">
                if('<?php echo $form['value']['checkout']; ?>' == 1){
                    $('#dsgj').show();
                }
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                            $('#dsgj').show();
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                             $('#dsgj').hide();
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "coupon": ?>
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
                            <input type="radio"  onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                    <div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label">优惠内容：</label>
        <div class="right">
            <div class="" id="yhcon" style="width:100%;">
              <span style="line-height: 34px;">请先选择优惠券类型</span>
            </div>
        </div>
    </div>
    <script>
    	if('<?php echo $form['value']['type']; ?>'){
    		changein('<?php echo $form['value']['type']; ?>')
    	}

    	function changein(id) {
    	
        var youhui1 = ' <span style="float:left;line-height:34px;padding-right:10px;">满</span> <input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_price" value="<?php echo $form['value']['mj_price']; ?>"> <span style="float:left;line-height: 34px;padding:0 10px;">减</span><input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_hui" value="<?php echo $form['value']['mj_hui']; ?>">';
        var youhui2 = '<input type="text" style="width:10%;float: left;" class="text input-2 form-control" name="zhekou" value="<?php echo $form['value']['zhekou']; ?>"> <span  style="float:left;line-height:34px;padding-left:10px;">折</span>';
        if (id == 1) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui1;
        }else if (id == 2) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui2;
        }
      }
    </script>
<?php break; case "choices": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmembers'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此房东</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "group": ?>
                                    <div class="form-group"></div>
                                    <div class="builder-tabs builder-tabs-tab form-group">
                                        <?php $group_k = 0; ?>
                                        <ul class="nav nav-tabs">
                                            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $group_k = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($group_k % 2 );++$group_k;?>
                                                <li data-tab="tab<?php echo $group_k; ?>" <?php if($group_k == '1'): ?>class="active"<?php endif; ?>><a href="#tab<?php echo $group_k; ?>" data-toggle="tab"><?php echo $li['title']; ?></a></li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                    <div class="builder-container">
                                        <div class="tab-content">
                                            <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $group_k = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($group_k % 2 );++$group_k;?>
                                                <div id="tab<?php echo $group_k; ?>" class='tab-pane <?php if($group_k == '1'): ?>active<?php endif; ?> tab<?php echo $group_k; ?>'>
                                                    <div class="group">
                                                        <?php if(is_array($tab['options']) || $tab['options'] instanceof \think\Collection || $tab['options'] instanceof \think\Paginator): $tab_k = 0; $__LIST__ = $tab['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab_form): $mod = ($tab_k % 2 );++$tab_k;switch($tab_form['type']): case "hidden": ?>
    <div class="form-group hidden item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "static": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <p><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></p>
        </div>
    </div>
<?php break; case "num": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "uid": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($tab_form['value']) {
                    $map['id'] = array('in', $tab_form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>')
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php
                if ($tab_form['value']) {
                    $map['id'] = array('in', $tab_form['value']);
                    $uids = D('Admin/User')->where($map)->select();
                }
                if ($uids) {
                    $uids = json_encode($uids);
                } else {
                    $uids = '[]';
                }
            ?>
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control input" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>')
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input num" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "text": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" class="form-control input text" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "textarea": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $tab_form['name']; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></textarea>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "array": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea class="form-control textarea" rows="5" name="<?php echo $tab_form['name']; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></textarea>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "password": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="password" class="form-control input password" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
        </div>
    </div>
<?php break; case "toggle": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>" type="checkbox" <?php if($tab_form['value'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <input id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input" type="hidden" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                </label>
            </div>
            <a href="toggle.html"></a>
            <script type="text/javascript">
                $(function(){
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input').val('1');
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>_input').val('0');
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): ?>
                <div class="radio-inline lyui-control lyui-radio">
                    <label for="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>">
                        <?php if(is_array($option)): ?>
                            <input type="radio" id="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $tab_form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($tab_form['value'] == $option_key) echo 'checked';?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" id="<?php echo $tab_form['name']; ?><?php echo $option_key; ?>" class="radio" name="<?php echo $tab_form['name']; ?>" value="<?php echo $option_key; ?>" <?php if($tab_form['value'] == $option_key) echo 'checked';?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>> 
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): ?>
                <div class="checkbox-inline lyui-control lyui-checkbox">
                    <label class="checkbox-label">
                        <?php if(is_array($option)): ?>
                            <input type="checkbox" name="<?php echo $tab_form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($tab_form['value'])?$tab_form['value']:explode(',',$tab_form['value']))): ?> checked<?php endif; ?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="checkbox" name="<?php echo $tab_form['name']; ?>[]" value="<?php echo $option_key; ?>" <?php if(in_array(($option_key), is_array($tab_form['value'])?$tab_form['value']:explode(',',$tab_form['value']))): ?> checked<?php endif; ?> <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <select name="<?php echo $tab_form['name']; ?>" class="form-control lyui-select select" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <option value=''>请选择：</option>
                <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($tab_form['value']) && ($tab_form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($tab_form['value']) && ($tab_form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "selects": ?>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <select multiple="multiple" size="6" name="<?php echo $tab_form['name']; ?>[]" class="form-control lyui-select select" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php $tab_form['value'] = explode(',', $tab_form['value']); dump($tab_form['value']); ?>
                <option value=''>请选择：</option>
                <?php if(is_array($tab_form['options']) || $tab_form['options'] instanceof \think\Collection || $tab_form['options'] instanceof \think\Paginator): if( count($tab_form['options'])==0 ) : echo "" ;else: foreach($tab_form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array(($tab_form['value']), is_array($option_key)?$option_key:explode(',',$option_key))): ?> selected<?php endif; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(in_array($option_key, $tab_form['value'])) { echo 'selected'; } ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
<?php break; case "icon": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group input" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $tab_k; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-fw fa-info-circle"></i> 点击选择图标</button>
                </span>
                <input type="text" class="form-control" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $("#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_icon_<?php echo $tab_k; ?>").iconpicker({
                        icons: '[{"filter":"glass","name":"glass","selector":"fa-glass"},{"filter":"music","name":"music","selector":"fa-music"},{"filter":"search","name":"search","selector":"fa-search"},{"filter":"envelope-o","name":"envelope-o","selector":"fa-envelope-o"},{"filter":"heart","name":"heart","selector":"fa-heart"},{"filter":"star","name":"star","selector":"fa-star"},{"filter":"star-o","name":"star-o","selector":"fa-star-o"},{"filter":"user","name":"user","selector":"fa-user"},{"filter":"film","name":"film","selector":"fa-film"},{"filter":"th-large","name":"th-large","selector":"fa-th-large"},{"filter":"th","name":"th","selector":"fa-th"},{"filter":"th-list","name":"th-list","selector":"fa-th-list"},{"filter":"check","name":"check","selector":"fa-check"},{"filter":"times","name":"times","selector":"fa-times"},{"filter":"search-plus","name":"search-plus","selector":"fa-search-plus"},{"filter":"search-minus","name":"search-minus","selector":"fa-search-minus"},{"filter":"power-off","name":"power-off","selector":"fa-power-off"},{"filter":"signal","name":"signal","selector":"fa-signal"},{"filter":"cog","name":"cog","selector":"fa-cog"},{"filter":"trash-o","name":"trash-o","selector":"fa-trash-o"},{"filter":"home","name":"home","selector":"fa-home"},{"filter":"file-o","name":"file-o","selector":"fa-file-o"},{"filter":"clock-o","name":"clock-o","selector":"fa-clock-o"},{"filter":"road","name":"road","selector":"fa-road"},{"filter":"download","name":"download","selector":"fa-download"},{"filter":"arrow-circle-o-down","name":"arrow-circle-o-down","selector":"fa-arrow-circle-o-down"},{"filter":"arrow-circle-o-up","name":"arrow-circle-o-up","selector":"fa-arrow-circle-o-up"},{"filter":"inbox","name":"inbox","selector":"fa-inbox"},{"filter":"play-circle-o","name":"play-circle-o","selector":"fa-play-circle-o"},{"filter":"repeat","name":"repeat","selector":"fa-repeat"},{"filter":"refresh","name":"refresh","selector":"fa-refresh"},{"filter":"list-alt","name":"list-alt","selector":"fa-list-alt"},{"filter":"lock","name":"lock","selector":"fa-lock"},{"filter":"flag","name":"flag","selector":"fa-flag"},{"filter":"headphones","name":"headphones","selector":"fa-headphones"},{"filter":"volume-off","name":"volume-off","selector":"fa-volume-off"},{"filter":"volume-down","name":"volume-down","selector":"fa-volume-down"},{"filter":"volume-up","name":"volume-up","selector":"fa-volume-up"},{"filter":"qrcode","name":"qrcode","selector":"fa-qrcode"},{"filter":"barcode","name":"barcode","selector":"fa-barcode"},{"filter":"tag","name":"tag","selector":"fa-tag"},{"filter":"tags","name":"tags","selector":"fa-tags"},{"filter":"book","name":"book","selector":"fa-book"},{"filter":"bookmark","name":"bookmark","selector":"fa-bookmark"},{"filter":"print","name":"print","selector":"fa-print"},{"filter":"camera","name":"camera","selector":"fa-camera"},{"filter":"font","name":"font","selector":"fa-font"},{"filter":"bold","name":"bold","selector":"fa-bold"},{"filter":"italic","name":"italic","selector":"fa-italic"},{"filter":"text-height","name":"text-height","selector":"fa-text-height"},{"filter":"text-width","name":"text-width","selector":"fa-text-width"},{"filter":"align-left","name":"align-left","selector":"fa-align-left"},{"filter":"align-center","name":"align-center","selector":"fa-align-center"},{"filter":"align-right","name":"align-right","selector":"fa-align-right"},{"filter":"align-justify","name":"align-justify","selector":"fa-align-justify"},{"filter":"list","name":"list","selector":"fa-list"},{"filter":"outdent","name":"outdent","selector":"fa-outdent"},{"filter":"indent","name":"indent","selector":"fa-indent"},{"filter":"video-camera","name":"video-camera","selector":"fa-video-camera"},{"filter":"picture-o","name":"picture-o","selector":"fa-picture-o"},{"filter":"pencil","name":"pencil","selector":"fa-pencil"},{"filter":"map-marker","name":"map-marker","selector":"fa-map-marker"},{"filter":"adjust","name":"adjust","selector":"fa-adjust"},{"filter":"tint","name":"tint","selector":"fa-tint"},{"filter":"pencil-square-o","name":"pencil-square-o","selector":"fa-pencil-square-o"},{"filter":"share-square-o","name":"share-square-o","selector":"fa-share-square-o"},{"filter":"check-square-o","name":"check-square-o","selector":"fa-check-square-o"},{"filter":"arrows","name":"arrows","selector":"fa-arrows"},{"filter":"step-backward","name":"step-backward","selector":"fa-step-backward"},{"filter":"fast-backward","name":"fast-backward","selector":"fa-fast-backward"},{"filter":"backward","name":"backward","selector":"fa-backward"},{"filter":"play","name":"play","selector":"fa-play"},{"filter":"pause","name":"pause","selector":"fa-pause"},{"filter":"stop","name":"stop","selector":"fa-stop"},{"filter":"forward","name":"forward","selector":"fa-forward"},{"filter":"fast-forward","name":"fast-forward","selector":"fa-fast-forward"},{"filter":"step-forward","name":"step-forward","selector":"fa-step-forward"},{"filter":"eject","name":"eject","selector":"fa-eject"},{"filter":"chevron-left","name":"chevron-left","selector":"fa-chevron-left"},{"filter":"chevron-right","name":"chevron-right","selector":"fa-chevron-right"},{"filter":"plus-circle","name":"plus-circle","selector":"fa-plus-circle"},{"filter":"minus-circle","name":"minus-circle","selector":"fa-minus-circle"},{"filter":"times-circle","name":"times-circle","selector":"fa-times-circle"},{"filter":"check-circle","name":"check-circle","selector":"fa-check-circle"},{"filter":"question-circle","name":"question-circle","selector":"fa-question-circle"},{"filter":"info-circle","name":"info-circle","selector":"fa-info-circle"},{"filter":"crosshairs","name":"crosshairs","selector":"fa-crosshairs"},{"filter":"times-circle-o","name":"times-circle-o","selector":"fa-times-circle-o"},{"filter":"check-circle-o","name":"check-circle-o","selector":"fa-check-circle-o"},{"filter":"ban","name":"ban","selector":"fa-ban"},{"filter":"arrow-left","name":"arrow-left","selector":"fa-arrow-left"},{"filter":"arrow-right","name":"arrow-right","selector":"fa-arrow-right"},{"filter":"arrow-up","name":"arrow-up","selector":"fa-arrow-up"},{"filter":"arrow-down","name":"arrow-down","selector":"fa-arrow-down"},{"filter":"share","name":"share","selector":"fa-share"},{"filter":"expand","name":"expand","selector":"fa-expand"},{"filter":"compress","name":"compress","selector":"fa-compress"},{"filter":"plus","name":"plus","selector":"fa-plus"},{"filter":"minus","name":"minus","selector":"fa-minus"},{"filter":"asterisk","name":"asterisk","selector":"fa-asterisk"},{"filter":"exclamation-circle","name":"exclamation-circle","selector":"fa-exclamation-circle"},{"filter":"gift","name":"gift","selector":"fa-gift"},{"filter":"leaf","name":"leaf","selector":"fa-leaf"},{"filter":"fire","name":"fire","selector":"fa-fire"},{"filter":"eye","name":"eye","selector":"fa-eye"},{"filter":"eye-slash","name":"eye-slash","selector":"fa-eye-slash"},{"filter":"exclamation-triangle","name":"exclamation-triangle","selector":"fa-exclamation-triangle"},{"filter":"plane","name":"plane","selector":"fa-plane"},{"filter":"calendar","name":"calendar","selector":"fa-calendar"},{"filter":"random","name":"random","selector":"fa-random"},{"filter":"comment","name":"comment","selector":"fa-comment"},{"filter":"magnet","name":"magnet","selector":"fa-magnet"},{"filter":"chevron-up","name":"chevron-up","selector":"fa-chevron-up"},{"filter":"chevron-down","name":"chevron-down","selector":"fa-chevron-down"},{"filter":"retweet","name":"retweet","selector":"fa-retweet"},{"filter":"shopping-cart","name":"shopping-cart","selector":"fa-shopping-cart"},{"filter":"folder","name":"folder","selector":"fa-folder"},{"filter":"folder-open","name":"folder-open","selector":"fa-folder-open"},{"filter":"arrows-v","name":"arrows-v","selector":"fa-arrows-v"},{"filter":"arrows-h","name":"arrows-h","selector":"fa-arrows-h"},{"filter":"bar-chart-o","name":"bar-chart-o","selector":"fa-bar-chart-o"},{"filter":"twitter-square","name":"twitter-square","selector":"fa-twitter-square"},{"filter":"facebook-square","name":"facebook-square","selector":"fa-facebook-square"},{"filter":"camera-retro","name":"camera-retro","selector":"fa-camera-retro"},{"filter":"key","name":"key","selector":"fa-key"},{"filter":"cogs","name":"cogs","selector":"fa-cogs"},{"filter":"comments","name":"comments","selector":"fa-comments"},{"filter":"thumbs-o-up","name":"thumbs-o-up","selector":"fa-thumbs-o-up"},{"filter":"thumbs-o-down","name":"thumbs-o-down","selector":"fa-thumbs-o-down"},{"filter":"star-half","name":"star-half","selector":"fa-star-half"},{"filter":"heart-o","name":"heart-o","selector":"fa-heart-o"},{"filter":"sign-out","name":"sign-out","selector":"fa-sign-out"},{"filter":"linkedin-square","name":"linkedin-square","selector":"fa-linkedin-square"},{"filter":"thumb-tack","name":"thumb-tack","selector":"fa-thumb-tack"},{"filter":"external-link","name":"external-link","selector":"fa-external-link"},{"filter":"sign-in","name":"sign-in","selector":"fa-sign-in"},{"filter":"trophy","name":"trophy","selector":"fa-trophy"},{"filter":"github-square","name":"github-square","selector":"fa-github-square"},{"filter":"upload","name":"upload","selector":"fa-upload"},{"filter":"lemon-o","name":"lemon-o","selector":"fa-lemon-o"},{"filter":"phone","name":"phone","selector":"fa-phone"},{"filter":"square-o","name":"square-o","selector":"fa-square-o"},{"filter":"bookmark-o","name":"bookmark-o","selector":"fa-bookmark-o"},{"filter":"phone-square","name":"phone-square","selector":"fa-phone-square"},{"filter":"twitter","name":"twitter","selector":"fa-twitter"},{"filter":"facebook","name":"facebook","selector":"fa-facebook"},{"filter":"github","name":"github","selector":"fa-github"},{"filter":"unlock","name":"unlock","selector":"fa-unlock"},{"filter":"credit-card","name":"credit-card","selector":"fa-credit-card"},{"filter":"rss","name":"rss","selector":"fa-rss"},{"filter":"hdd-o","name":"hdd-o","selector":"fa-hdd-o"},{"filter":"bullhorn","name":"bullhorn","selector":"fa-bullhorn"},{"filter":"bell","name":"bell","selector":"fa-bell"},{"filter":"certificate","name":"certificate","selector":"fa-certificate"},{"filter":"hand-o-right","name":"hand-o-right","selector":"fa-hand-o-right"},{"filter":"hand-o-left","name":"hand-o-left","selector":"fa-hand-o-left"},{"filter":"hand-o-up","name":"hand-o-up","selector":"fa-hand-o-up"},{"filter":"hand-o-down","name":"hand-o-down","selector":"fa-hand-o-down"},{"filter":"arrow-circle-left","name":"arrow-circle-left","selector":"fa-arrow-circle-left"},{"filter":"arrow-circle-right","name":"arrow-circle-right","selector":"fa-arrow-circle-right"},{"filter":"arrow-circle-up","name":"arrow-circle-up","selector":"fa-arrow-circle-up"},{"filter":"arrow-circle-down","name":"arrow-circle-down","selector":"fa-arrow-circle-down"},{"filter":"globe","name":"globe","selector":"fa-globe"},{"filter":"wrench","name":"wrench","selector":"fa-wrench"},{"filter":"tasks","name":"tasks","selector":"fa-tasks"},{"filter":"filter","name":"filter","selector":"fa-filter"},{"filter":"briefcase","name":"briefcase","selector":"fa-briefcase"},{"filter":"arrows-alt","name":"arrows-alt","selector":"fa-arrows-alt"},{"filter":"users","name":"users","selector":"fa-users"},{"filter":"link","name":"link","selector":"fa-link"},{"filter":"cloud","name":"cloud","selector":"fa-cloud"},{"filter":"flask","name":"flask","selector":"fa-flask"},{"filter":"scissors","name":"scissors","selector":"fa-scissors"},{"filter":"files-o","name":"files-o","selector":"fa-files-o"},{"filter":"paperclip","name":"paperclip","selector":"fa-paperclip"},{"filter":"floppy-o","name":"floppy-o","selector":"fa-floppy-o"},{"filter":"square","name":"square","selector":"fa-square"},{"filter":"bars","name":"bars","selector":"fa-bars"},{"filter":"list-ul","name":"list-ul","selector":"fa-list-ul"},{"filter":"list-ol","name":"list-ol","selector":"fa-list-ol"},{"filter":"strikethrough","name":"strikethrough","selector":"fa-strikethrough"},{"filter":"underline","name":"underline","selector":"fa-underline"},{"filter":"table","name":"table","selector":"fa-table"},{"filter":"magic","name":"magic","selector":"fa-magic"},{"filter":"truck","name":"truck","selector":"fa-truck"},{"filter":"pinterest","name":"pinterest","selector":"fa-pinterest"},{"filter":"pinterest-square","name":"pinterest-square","selector":"fa-pinterest-square"},{"filter":"google-plus-square","name":"google-plus-square","selector":"fa-google-plus-square"},{"filter":"google-plus","name":"google-plus","selector":"fa-google-plus"},{"filter":"money","name":"money","selector":"fa-money"},{"filter":"caret-down","name":"caret-down","selector":"fa-caret-down"},{"filter":"caret-up","name":"caret-up","selector":"fa-caret-up"},{"filter":"caret-left","name":"caret-left","selector":"fa-caret-left"},{"filter":"caret-right","name":"caret-right","selector":"fa-caret-right"},{"filter":"columns","name":"columns","selector":"fa-columns"},{"filter":"sort","name":"sort","selector":"fa-sort"},{"filter":"sort-asc","name":"sort-asc","selector":"fa-sort-asc"},{"filter":"sort-desc","name":"sort-desc","selector":"fa-sort-desc"},{"filter":"envelope","name":"envelope","selector":"fa-envelope"},{"filter":"linkedin","name":"linkedin","selector":"fa-linkedin"},{"filter":"undo","name":"undo","selector":"fa-undo"},{"filter":"gavel","name":"gavel","selector":"fa-gavel"},{"filter":"tachometer","name":"tachometer","selector":"fa-tachometer"},{"filter":"comment-o","name":"comment-o","selector":"fa-comment-o"},{"filter":"comments-o","name":"comments-o","selector":"fa-comments-o"},{"filter":"bolt","name":"bolt","selector":"fa-bolt"},{"filter":"sitemap","name":"sitemap","selector":"fa-sitemap"},{"filter":"umbrella","name":"umbrella","selector":"fa-umbrella"},{"filter":"clipboard","name":"clipboard","selector":"fa-clipboard"},{"filter":"lightbulb-o","name":"lightbulb-o","selector":"fa-lightbulb-o"},{"filter":"exchange","name":"exchange","selector":"fa-exchange"},{"filter":"cloud-download","name":"cloud-download","selector":"fa-cloud-download"},{"filter":"cloud-upload","name":"cloud-upload","selector":"fa-cloud-upload"},{"filter":"user-md","name":"user-md","selector":"fa-user-md"},{"filter":"stethoscope","name":"stethoscope","selector":"fa-stethoscope"},{"filter":"suitcase","name":"suitcase","selector":"fa-suitcase"},{"filter":"bell-o","name":"bell-o","selector":"fa-bell-o"},{"filter":"coffee","name":"coffee","selector":"fa-coffee"},{"filter":"cutlery","name":"cutlery","selector":"fa-cutlery"},{"filter":"file-text-o","name":"file-text-o","selector":"fa-file-text-o"},{"filter":"building-o","name":"building-o","selector":"fa-building-o"},{"filter":"hospital-o","name":"hospital-o","selector":"fa-hospital-o"},{"filter":"ambulance","name":"ambulance","selector":"fa-ambulance"},{"filter":"medkit","name":"medkit","selector":"fa-medkit"},{"filter":"fighter-jet","name":"fighter-jet","selector":"fa-fighter-jet"},{"filter":"beer","name":"beer","selector":"fa-beer"},{"filter":"h-square","name":"h-square","selector":"fa-h-square"},{"filter":"plus-square","name":"plus-square","selector":"fa-plus-square"},{"filter":"angle-double-left","name":"angle-double-left","selector":"fa-angle-double-left"},{"filter":"angle-double-right","name":"angle-double-right","selector":"fa-angle-double-right"},{"filter":"angle-double-up","name":"angle-double-up","selector":"fa-angle-double-up"},{"filter":"angle-double-down","name":"angle-double-down","selector":"fa-angle-double-down"},{"filter":"angle-left","name":"angle-left","selector":"fa-angle-left"},{"filter":"angle-right","name":"angle-right","selector":"fa-angle-right"},{"filter":"angle-up","name":"angle-up","selector":"fa-angle-up"},{"filter":"angle-down","name":"angle-down","selector":"fa-angle-down"},{"filter":"desktop","name":"desktop","selector":"fa-desktop"},{"filter":"laptop","name":"laptop","selector":"fa-laptop"},{"filter":"tablet","name":"tablet","selector":"fa-tablet"},{"filter":"mobile","name":"mobile","selector":"fa-mobile"},{"filter":"circle-o","name":"circle-o","selector":"fa-circle-o"},{"filter":"quote-left","name":"quote-left","selector":"fa-quote-left"},{"filter":"quote-right","name":"quote-right","selector":"fa-quote-right"},{"filter":"spinner","name":"spinner","selector":"fa-spinner"},{"filter":"circle","name":"circle","selector":"fa-circle"},{"filter":"reply","name":"reply","selector":"fa-reply"},{"filter":"github-alt","name":"github-alt","selector":"fa-github-alt"},{"filter":"folder-o","name":"folder-o","selector":"fa-folder-o"},{"filter":"folder-open-o","name":"folder-open-o","selector":"fa-folder-open-o"},{"filter":"smile-o","name":"smile-o","selector":"fa-smile-o"},{"filter":"frown-o","name":"frown-o","selector":"fa-frown-o"},{"filter":"meh-o","name":"meh-o","selector":"fa-meh-o"},{"filter":"gamepad","name":"gamepad","selector":"fa-gamepad"},{"filter":"keyboard-o","name":"keyboard-o","selector":"fa-keyboard-o"},{"filter":"flag-o","name":"flag-o","selector":"fa-flag-o"},{"filter":"flag-checkered","name":"flag-checkered","selector":"fa-flag-checkered"},{"filter":"terminal","name":"terminal","selector":"fa-terminal"},{"filter":"code","name":"code","selector":"fa-code"},{"filter":"reply-all","name":"reply-all","selector":"fa-reply-all"},{"filter":"mail-reply-all","name":"mail-reply-all","selector":"fa-mail-reply-all"},{"filter":"star-half-o","name":"star-half-o","selector":"fa-star-half-o"},{"filter":"location-arrow","name":"location-arrow","selector":"fa-location-arrow"},{"filter":"crop","name":"crop","selector":"fa-crop"},{"filter":"code-fork","name":"code-fork","selector":"fa-code-fork"},{"filter":"chain-broken","name":"chain-broken","selector":"fa-chain-broken"},{"filter":"question","name":"question","selector":"fa-question"},{"filter":"info","name":"info","selector":"fa-info"},{"filter":"exclamation","name":"exclamation","selector":"fa-exclamation"},{"filter":"superscript","name":"superscript","selector":"fa-superscript"},{"filter":"subscript","name":"subscript","selector":"fa-subscript"},{"filter":"eraser","name":"eraser","selector":"fa-eraser"},{"filter":"puzzle-piece","name":"puzzle-piece","selector":"fa-puzzle-piece"},{"filter":"microphone","name":"microphone","selector":"fa-microphone"},{"filter":"microphone-slash","name":"microphone-slash","selector":"fa-microphone-slash"},{"filter":"shield","name":"shield","selector":"fa-shield"},{"filter":"calendar-o","name":"calendar-o","selector":"fa-calendar-o"},{"filter":"fire-extinguisher","name":"fire-extinguisher","selector":"fa-fire-extinguisher"},{"filter":"rocket","name":"rocket","selector":"fa-rocket"},{"filter":"maxcdn","name":"maxcdn","selector":"fa-maxcdn"},{"filter":"chevron-circle-left","name":"chevron-circle-left","selector":"fa-chevron-circle-left"},{"filter":"chevron-circle-right","name":"chevron-circle-right","selector":"fa-chevron-circle-right"},{"filter":"chevron-circle-up","name":"chevron-circle-up","selector":"fa-chevron-circle-up"},{"filter":"chevron-circle-down","name":"chevron-circle-down","selector":"fa-chevron-circle-down"},{"filter":"html5","name":"html5","selector":"fa-html5"},{"filter":"css3","name":"css3","selector":"fa-css3"},{"filter":"anchor","name":"anchor","selector":"fa-anchor"},{"filter":"unlock-alt","name":"unlock-alt","selector":"fa-unlock-alt"},{"filter":"bullseye","name":"bullseye","selector":"fa-bullseye"},{"filter":"ellipsis-h","name":"ellipsis-h","selector":"fa-ellipsis-h"},{"filter":"ellipsis-v","name":"ellipsis-v","selector":"fa-ellipsis-v"},{"filter":"rss-square","name":"rss-square","selector":"fa-rss-square"},{"filter":"play-circle","name":"play-circle","selector":"fa-play-circle"},{"filter":"ticket","name":"ticket","selector":"fa-ticket"},{"filter":"minus-square","name":"minus-square","selector":"fa-minus-square"},{"filter":"minus-square-o","name":"minus-square-o","selector":"fa-minus-square-o"},{"filter":"level-up","name":"level-up","selector":"fa-level-up"},{"filter":"level-down","name":"level-down","selector":"fa-level-down"},{"filter":"check-square","name":"check-square","selector":"fa-check-square"},{"filter":"pencil-square","name":"pencil-square","selector":"fa-pencil-square"},{"filter":"external-link-square","name":"external-link-square","selector":"fa-external-link-square"},{"filter":"share-square","name":"share-square","selector":"fa-share-square"},{"filter":"compass","name":"compass","selector":"fa-compass"},{"filter":"caret-square-o-down","name":"caret-square-o-down","selector":"fa-caret-square-o-down"},{"filter":"caret-square-o-up","name":"caret-square-o-up","selector":"fa-caret-square-o-up"},{"filter":"caret-square-o-right","name":"caret-square-o-right","selector":"fa-caret-square-o-right"},{"filter":"eur","name":"eur","selector":"fa-eur"},{"filter":"gbp","name":"gbp","selector":"fa-gbp"},{"filter":"usd","name":"usd","selector":"fa-usd"},{"filter":"inr","name":"inr","selector":"fa-inr"},{"filter":"jpy","name":"jpy","selector":"fa-jpy"},{"filter":"rub","name":"rub","selector":"fa-rub"},{"filter":"krw","name":"krw","selector":"fa-krw"},{"filter":"btc","name":"btc","selector":"fa-btc"},{"filter":"file","name":"file","selector":"fa-file"},{"filter":"file-text","name":"file-text","selector":"fa-file-text"},{"filter":"sort-alpha-asc","name":"sort-alpha-asc","selector":"fa-sort-alpha-asc"},{"filter":"sort-alpha-desc","name":"sort-alpha-desc","selector":"fa-sort-alpha-desc"},{"filter":"sort-amount-asc","name":"sort-amount-asc","selector":"fa-sort-amount-asc"},{"filter":"sort-amount-desc","name":"sort-amount-desc","selector":"fa-sort-amount-desc"},{"filter":"sort-numeric-asc","name":"sort-numeric-asc","selector":"fa-sort-numeric-asc"},{"filter":"sort-numeric-desc","name":"sort-numeric-desc","selector":"fa-sort-numeric-desc"},{"filter":"thumbs-up","name":"thumbs-up","selector":"fa-thumbs-up"},{"filter":"thumbs-down","name":"thumbs-down","selector":"fa-thumbs-down"},{"filter":"youtube-square","name":"youtube-square","selector":"fa-youtube-square"},{"filter":"youtube","name":"youtube","selector":"fa-youtube"},{"filter":"xing","name":"xing","selector":"fa-xing"},{"filter":"xing-square","name":"xing-square","selector":"fa-xing-square"},{"filter":"youtube-play","name":"youtube-play","selector":"fa-youtube-play"},{"filter":"dropbox","name":"dropbox","selector":"fa-dropbox"},{"filter":"stack-overflow","name":"stack-overflow","selector":"fa-stack-overflow"},{"filter":"instagram","name":"instagram","selector":"fa-instagram"},{"filter":"flickr","name":"flickr","selector":"fa-flickr"},{"filter":"adn","name":"adn","selector":"fa-adn"},{"filter":"bitbucket","name":"bitbucket","selector":"fa-bitbucket"},{"filter":"bitbucket-square","name":"bitbucket-square","selector":"fa-bitbucket-square"},{"filter":"tumblr","name":"tumblr","selector":"fa-tumblr"},{"filter":"tumblr-square","name":"tumblr-square","selector":"fa-tumblr-square"},{"filter":"long-arrow-down","name":"long-arrow-down","selector":"fa-long-arrow-down"},{"filter":"long-arrow-up","name":"long-arrow-up","selector":"fa-long-arrow-up"},{"filter":"long-arrow-left","name":"long-arrow-left","selector":"fa-long-arrow-left"},{"filter":"long-arrow-right","name":"long-arrow-right","selector":"fa-long-arrow-right"},{"filter":"apple","name":"apple","selector":"fa-apple"},{"filter":"windows","name":"windows","selector":"fa-windows"},{"filter":"android","name":"android","selector":"fa-android"},{"filter":"linux","name":"linux","selector":"fa-linux"},{"filter":"dribbble","name":"dribbble","selector":"fa-dribbble"},{"filter":"skype","name":"skype","selector":"fa-skype"},{"filter":"foursquare","name":"foursquare","selector":"fa-foursquare"},{"filter":"trello","name":"trello","selector":"fa-trello"},{"filter":"female","name":"female","selector":"fa-female"},{"filter":"male","name":"male","selector":"fa-male"},{"filter":"gittip","name":"gittip","selector":"fa-gittip"},{"filter":"sun-o","name":"sun-o","selector":"fa-sun-o"},{"filter":"moon-o","name":"moon-o","selector":"fa-moon-o"},{"filter":"archive","name":"archive","selector":"fa-archive"},{"filter":"bug","name":"bug","selector":"fa-bug"},{"filter":"vk","name":"vk","selector":"fa-vk"},{"filter":"weibo","name":"weibo","selector":"fa-weibo"},{"filter":"renren","name":"renren","selector":"fa-renren"},{"filter":"pagelines","name":"pagelines","selector":"fa-pagelines"},{"filter":"stack-exchange","name":"stack-exchange","selector":"fa-stack-exchange"},{"filter":"arrow-circle-o-right","name":"arrow-circle-o-right","selector":"fa-arrow-circle-o-right"},{"filter":"arrow-circle-o-left","name":"arrow-circle-o-left","selector":"fa-arrow-circle-o-left"},{"filter":"caret-square-o-left","name":"caret-square-o-left","selector":"fa-caret-square-o-left"},{"filter":"dot-circle-o","name":"dot-circle-o","selector":"fa-dot-circle-o"},{"filter":"wheelchair","name":"wheelchair","selector":"fa-wheelchair"},{"filter":"vimeo-square","name":"vimeo-square","selector":"fa-vimeo-square"},{"filter":"try","name":"try","selector":"fa-try"},{"filter":"plus-square-o","name":"plus-square-o","selector":"fa-plus-square-o"}]'
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "date": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>"
                    class="form-control input date" name="<?php echo $tab_form['name']; ?>" value="
<?php
    if(isset($tab_form['value'])) {
        if(is_numeric($tab_form['value'])) {
            echo time_format($tab_form['value'], 'Y-m-d');
        } else {
            echo $tab_form['value'];
        }
    } else {
        echo(date('Y-m-d'));
    }
?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $tab_k; ?>').datetimepicker({
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $tab_k; ?>"
                    class="form-control input time" name="<?php echo $tab_form['name']; ?>" value="
<?php
    if(isset($tab_form['value'])) {
        if(is_numeric($tab_form['value'])) {
            echo time_format($tab_form['value'], 'Y-m-d H:i:s');
        } else {
            echo $tab_form['value'];
        }
    } else {
        echo(date('Y-m-d H:i:s'));
    }
?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_time_<?php echo $tab_k; ?>').datetimepicker({
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
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $tab_k; ?>" class="form-control input time" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_clock_<?php echo $tab_k; ?>').datetimepicker({
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
<?php break; case "picture": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right row">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($tab_form['value']); ?>" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-picture', function() {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "picture_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))): ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-xs-6 col-sm-3 file-item thumbnail">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img src="<?php echo get_cover($form['value']); ?>" data-id="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                        </div>
                    <?php else: ?>
                        <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>" class="col-sm-3 file-item thumbnail hidden">
                            <i class="fa fa-times-circle remove-picture"></i>
                            <img>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传图片</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').removeClass('hidden');
                        var $li = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadComplete', function(file) {
                        $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').attr('value', response.path);
                            $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?> img').attr('src', response.url);
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' ).val('') //删除后覆盖原input的值为空
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right row">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                             if (is_array($tab_form['value'])) {
                                $images = $tab_form['value'];
                                $input_value = implode(',', $tab_form['value']);
                            } else {
                                $images = explode(',', $tab_form['value']);
                                $input_value = $tab_form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.id);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "pictures_temp": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right row">
            <div  id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>" class="uploader-list col-xs-12 img-box">
                    <?php if(!(empty($form['value']) || (($form['value'] instanceof \think\Collection || $form['value'] instanceof \think\Paginator ) && $form['value']->isEmpty()))):                             if (is_array($form['value'])) {
                                $images = $form['value'];
                                $input_value = implode(',', $form['value']);
                            } else {
                                $images = explode(',', $form['value']);
                                $input_value = $form['value'];
                            }
                        if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): if( count($images)==0 ) : echo "" ;else: foreach($images as $key=>$img): ?>
                            <div class="col-xs-6 col-sm-3 thumbnail">
                                <i class="fa fa-times-circle remove-picture"></i>
                                <img class="img" src="<?php echo get_cover($img); ?>" data-id="<?php echo $img; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
                <div class="btns col-xs-12">
                    <input type="hidden" id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>" name="<?php echo $form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>" class="btn btn-primary-outline btn-pill">上传多图</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($form['tip']) || (($form['tip'] instanceof \think\Collection || $form['tip'] instanceof \think\Paginator ) && $form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "image", "module_name" => request()->module(), "temp" => "true"), true, true); ?>', // 文件接收服务端
                        pick: '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($form['extra']['self']['size']) ? : C('UPLOAD_IMAGE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Images',
                            extensions: "<?php echo isset($form['extra']['self']['ext']) ? : 'gif,jpg,jpeg,bmp,png'; ?>",
                            mimeTypes: 'image/gif,image/jpg,image/jpeg,image/bmp,image/png'
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<div id="' + file.id + '" class="thumbnail col-xs-6 col-sm-3 ">' +
                                    '<i class="fa fa-times-circle remove-picture"></i>' +
                                    '<img>' +
                                '</div>'
                                );

                        // $list为容器jQuery实例
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?>').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id).addClass('upload-state-done');
                        if(response.status == 1){
                            var input = $( '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>' );
                            if (input.val()) {
                                input.val(input.val() + ',' + response.path);
                            } else {
                                input.val(response.path);
                            }
                            $('#'+file.id + ' img').attr('src', response.url);
                            $('#'+file.id + ' img').attr('data-id', response.path);
                        } else {
                            $.alertMessager('错误：：' + response.message);
                            $('#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_IMAGE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除图片
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $k; ?> .remove-picture', function() {
                        var ready_for_remove_id = $(this).closest('.thumbnail').find('img').attr('data-id'); //获取待删除的图片ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_picture_ids = $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val().split(","); //获取当前图集以逗号分隔的ID并转换成数组
                        current_picture_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的图片ID
                        $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $k; ?>').val(current_picture_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.thumbnail').remove(); //删除图片预览图
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "file": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($tab_form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage) {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>' ).val('') //删除后覆盖原input的值为空
                        $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "files": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                                 if (is_array($tab_form['value'])) {
                                    $files = $tab_form['value'];
                                    $input_value = implode(',', $tab_form['value']);
                                } else {
                                    $files = explode(',', $tab_form['value']);
                                    $input_value = $tab_form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                            // 跨域请求提供凭证
                        auto: true,                                                                       // 选完文件后，是否自动上传
                        duplicate: true,                                                                  // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "file", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                      // 选择文件的按钮
                        resize: false,                                                                    // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Files',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'doc,docx,xls,xlsx,ppt,pptx,pdf,wps,txt,zip,rar,gz,bz2,7z,ipa,apk,dmg,iso'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage) {
                        var $li = $( '#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css( 'width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file , response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $('#'+file.id).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if ( !$error.length ) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "media": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>">
                            <ul class="list-group file-box">
                                <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))): ?>
                                    <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                        <i class="fa fa-file"></i>
                                        <span><?php echo D('Admin/Upload')->getUploadInfo($tab_form['value'], 'name'); ?></span>
                                        <i class="fa fa-times-circle remove-file"></i>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>" class="hidden">
                            <ul class="list-group file-box">
                                <li class="list-group-item file-item" data-id="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                                    <i class="fa fa-file"></i>
                                    <span></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传视频</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        //fileNumLimit: 1,                                                                 // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadProgress', function(file, percentage ) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').removeClass('hidden');
                        var $li = $( '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if (!$percent.length) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadComplete', function(file) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>' ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file, response) {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('upload-state-done');
                        if (eval('response').status == 0) {
                            $.alertMessager(response.message);
                        } else {
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').attr('value', response.id);
                            $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?> span').text(response.name);
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>'),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val('') //删除后覆盖原input的值为空
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_preview_<?php echo $tab_k; ?>').addClass('hidden');
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "medias": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div  id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_box_<?php echo $tab_k; ?>" class="wu-example">
                <!--用来存放文件信息-->
                <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?>" class="uploader-list">
                    <ul class="list-group file-box">
                        <?php if(!(empty($tab_form['value']) || (($tab_form['value'] instanceof \think\Collection || $tab_form['value'] instanceof \think\Paginator ) && $tab_form['value']->isEmpty()))):                                 if (is_array($tab_form['value'])) {
                                    $files = $tab_form['value'];
                                    $input_value = implode(',', $tab_form['value']);
                                } else {
                                    $files = explode(',', $tab_form['value']);
                                    $input_value = $tab_form['value'];
                                }
                            if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): if( count($files)==0 ) : echo "" ;else: foreach($files as $key=>$file): ?>
                                <li class="list-group-item file-item" data-id="<?php echo $file; ?>">
                                    <i class="fa fa-file"></i>
                                    <span><?php echo D('Admin/Upload')->getUploadInfo($file, 'name'); ?></span>
                                    <i class="fa fa-times-circle pull-right remove-file"></i>
                                </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div class="btns">
                    <input type="hidden" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>" name="<?php echo $tab_form['name']; ?>" value="<?php echo $input_value; ?>">
                    <div id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>" class="btn btn-primary-outline btn-pill">上传多文件</div>
                    <button id="ctlBtn" class="btn btn-default hidden">开始上传</button>
                    <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                        <span class="check-tips text-muted small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <script type="text/javascript" src="__PUBLIC__/libs/webuploader/webuploader.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    var uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?> = WebUploader.create({
                        withCredentials: true,                                                             // 跨域请求提供凭证
                        auto: true,                                                                        // 选完文件后，是否自动上传
                        duplicate: true,                                                                   // 同一文件是否可以重复上传
                        server: '<?php echo U(MODULE_MARK."/Upload/upload", array("dir" => "media", "module_name" => request()->module()), true, true); ?>', // 文件接收服务端
                        pick: '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>',                                       // 选择文件的按钮
                        resize: false,                                                                     // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
                        fileNumLimit: 20,                                                                  // 验证文件总数量, 超出则不允许加入队列
                        fileSingleSizeLimit:<?php echo isset($tab_form['extra']['self']['size']) ? : C('UPLOAD_FILE_SIZE'); ?>*1024*1024, // 验证单个文件大小是否超出限制, 超出则不允许加入队列
                        // 文件过滤
                        accept: {
                            title: 'Medias',
                            extensions: "<?php echo isset($tab_form['extra']['self']['ext']) ? : 'swf,flv,mp3,wav,wma,wmv,mid,avi,mpg,asf,rm,rmvb,mp4'; ?>"
                        }
                    });

                    // 当有文件添加进来的时候
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('fileQueued', function(file) {
                        var $li = $(
                                '<li id="' + file.id + '" class="list-group-item file-item">' +
                                    '<i class="fa fa-file"></i>' +
                                    '<span>' + file.name + '</span>' +
                                    '<i class="fa fa-times-circle pull-right remove-file"></i>' +
                                '</li>'
                                );

                        // $list为容器jQuery实例
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> ul.list-group').append($li);
                    });

                    // 文件上传过程中创建进度条实时显示。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadProgress', function(file, percentage ) {
                        var $li = $('#'+file.id),
                            $percent = $li.find('.progress .progress-bar');
                        // 避免重复创建
                        if ( !$percent.length ) {
                            $percent = $('<div class="progress"><div class="progress-bar"></div></div>')
                                    .appendTo( $li )
                                    .find('.progress-bar');
                        }
                        $percent.css('width', percentage * 100 + '%');
                    });

                    // 完成上传完了，成功或者失败，先删除进度条。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on( 'uploadComplete', function(file) {
                        $( '#'+file.id ).find('.progress').remove();
                    });

                    // 文件上传成功，给item添加成功class, 用样式标记上传成功。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadSuccess', function(file, response) {
                        $('#'+file.id ).addClass('upload-state-done');
                        if (response.status == 1) {
                            $('#'+file.id ).attr('data-id', response.id);
                            var input = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>');
                            if (input.val()) {
                                input.val(input.val() + ',' + response.id);
                            } else {
                                input.val(response.id);
                            }
                        } else {
                            $.alertMessager('错误：' + response.message);
                            $( '#'+file.id ).remove();
                        }
                    });

                    // 上传错误
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on("error",function (type){
                        if (type=="Q_TYPE_DENIED") {
                            $.alertMessager('该文件格式不支持');
                        } else if(type=="F_EXCEED_SIZE") {
                            $.alertMessager("文件大小不允许超过<?php echo C('UPLOAD_FILE_SIZE'); ?>MB");
                        } else if(type=="Q_EXCEED_NUM_LIMIT") {
                            $.alertMessager("超过允许的文件数量");
                        } else {
                            $.alertMessager(type);
                        }
                    });

                    // 文件上传失败，显示上传出错。
                    uploader_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_<?php echo $tab_k; ?>.on('uploadError', function(file) {
                        $.alertMessager('上传接口出错');
                        var $li = $('#'+file.id),
                            $error = $li.find('div.error');
                        // 避免重复创建
                        if (!$error.length) {
                            $error = $('<div class="error"></div>').appendTo($li);
                        }
                        $error.text('上传失败');
                    });

                    // 删除文件
                    $(document).on('click', '#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_list_<?php echo $tab_k; ?> .remove-file', function() {
                        var ready_for_remove_id = $(this).closest('.file-item').attr('data-id'); //获取待删除的文件ID
                        if (!ready_for_remove_id) {
                            $.alertMessager('错误', 'danger');
                        }
                        var current_file_ids = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val().split(","); //获取当前文件列表以逗号分隔的ID并转换成数组
                        current_file_ids.ly_delete(ready_for_remove_id); //从数组中删除待删除的文件ID
                        $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_upload_input_<?php echo $tab_k; ?>').val(current_file_ids.join(',')) //删除后覆盖原input的值
                        $(this).closest('.file-item').remove(); //删除文件预览
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "summernote": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <textarea name="<?php echo $tab_form['name']; ?>" rwos="5" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $tab_k; ?>" class="form-control" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>
            </textarea>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/summernote/summernote.css">
            <style type="text/css" media="screen">
                .note-editor .modal-body .form-group {
                    margin: 0;
                }
            </style>
            <script type="text/javascript" src="__PUBLIC__/libs/summernote/summernote.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_summernote_<?php echo $tab_k; ?>').summernote({
                        height: 300,
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "kindeditor": ?>
    <style>
        .ke-container{width:70% !important;}
    </style>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right" >
            <textarea name="<?php echo $tab_form['name']; ?>" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $tab_k; ?>" style="width:70%" class="form-control " <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>
            </textarea><br>
           
            <script type="text/javascript" src="__PUBLIC__/libs/kindeditor/kindeditor-min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    KindEditor.ready(function(K) {
                        kindeditor_<?php echo $tab_k; ?> = K.create('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_kindeditor_<?php echo $tab_k; ?>', {
                            allowFileManager : true,
                            filePostName : 'file',
                            cssPath : [
                                '__LYUI__/css/lyui.min.css',
                                '__PUBLIC__/libs/kindeditor/plugins/code/prettify.css'
                            ],
                            width : '100%',
                            height : '500px',
                            resizeType: 1,
                            pasteType : 2,
                            filterMode: <?php if(MODULE_MARK === 'Admin') {echo 'false';} else {echo 'true';} ?>,
                            urlType : "domain",
                            fileManagerJson : '<?php echo U(MODULE_MARK."/Upload/fileManager", '', true, true); ?>',
                            uploadJson : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "kindeditor", "module_name" => request()->module()), true, true); ?>',
                            extraFileUploadParams: {
                                session_id : '<?php echo session_id(); ?>'
                            },
                            afterBlur: function(){this.sync();}
                        });
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "editormd": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <div name="<?php echo $tab_form['name']; ?>" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>" style="z-index: 1000;" class="form-control" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>></div>
            <pre id="default_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>" class="hidden"><?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?></pre>

            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/editormd/css/editormd.min.css">
            <script type="text/javascript" src="__PUBLIC__/libs/editormd/js/editormd.min.js"></script>

            <script type="text/javascript">
                //解码
                function html_decode(str){
                    var s = "";
                    if (str.length == 0) return "";
                    s = str.replace(/&amp;/g, "&");
                    s = s.replace(/&lt;/g, "<");
                    s = s.replace(/&gt;/g, ">");
                    s = s.replace(/&nbsp;/g, " ");
                    s = s.replace(/&#39;/g, "\'");
                    s = s.replace(/&quot;/g, "\"");
                    s = s.replace(/<br>/g, "\n");
                    return s;
                }

                $(function(){
                    var editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>_content = html_decode($('#default_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>').html());
                    var editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?> = editormd({
                        id                : 'tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>',
                        path              : '__PUBLIC__/libs/editormd/lib/',
                        pluginPath        : '__PUBLIC__/libs/editormd/plugins/',
                        name              : '<?php echo $tab_form['name']; ?>',
                        markdown          : editormd_tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_markdown_<?php echo $tab_k; ?>_content,
                        imageUpload       : true,
                        imageFormats      : ["jpg", "jpeg", "gif", "png", "bmp"],
                        imageUploadURL    : '<?php echo U(MODULE_MARK."/Upload/upload", array("callback_type" => "editormd", "module_name" => request()->module()), true, true); ?>',
                        placeholder       : '有范科技积木式云平台！',
                        width             : '100%',
                        height            : 640,
                        watch             : <?php if(MODULE_MARK === 'Admin'){ echo 'false';} else {echo 'true';} ?>,
                        codeFold          : true,
                        htmlDecode        : false,
                        toolbarAutoFixed  : false,
                        crossDomainUpload : true
                    });
                });
            </script>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "tags": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="text" id="tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>" class="form-control" name="<?php echo $tab_form['name']; ?>" value="<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>" placeholder="<?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input.css">
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/jquery_tokeninput/css/token-input-bootstrap.css">
            <script type="text/javascript" src="__PUBLIC__/libs/jquery_tokeninput/js/jquery.tokeninput.min.js" charset="utf-8"></script>
            <script type="text/javascript">
                $(function(){
                    //标签自动完成
                    var tags = $('#tab_<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_tag_<?php echo $tab_k; ?>'), tagsPre = [];
                    if (tags.length > 0) {
                        var items = tags.val().split(','), result = [];
                        for (var i = 0; i < items.length; i ++) {
                            var tag = items[i];
                            if (!tag) {
                                continue;
                            }
                            tagsPre.push({
                                id      :   tag,
                                title   :   tag
                            });
                        }
                    }
                    tags.tokenInput("<?php echo $tab_form['extra']['self']['search']; ?>",{
                        propertyToSearch    :   'title',
                        tokenValue          :   'title',
                        searchDelay         :   0,
                        tokenLimit          :   <?php echo $tab_form['extra']['self']['limit'] ? : 5; ?>,
                        preventDuplicates   :   true,
                        animateDropdown     :   true,
                        allowFreeTagging    :   <?php echo $tab_form['extra']['self']['free'] ? : true; ?>, // 是否允许添加搜索结果中没有的数据
                        hintText            :   '请输入标签名',
                        noResultsText       :   '此标签不存在, 按回车创建',
                        searchingText       :   '查找中...',
                        prePopulate         :   tagsPre,
                        theme               :   'bootstrap',
                        onAdd: function (item){  //新增系统没有的标签时提交到数据库
                            <?php if($tab_form['extra']['self']['new']): ?>
                                $.post("<?php echo $tab_form['extra']['self']['new']; ?>", {'title': item.title});
                            <?php endif; ?>
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "board": ?>
    <div class="form-group item_<?php echo $tab_form['name']; ?> <?php echo (isset($tab_form['extra']['class']) && ($tab_form['extra']['class'] !== '')?$tab_form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $tab_form['title']; ?>：</label>
        <div class="right">
            <input type="hidden" name="<?php echo $tab_form['name']; ?>" value='<?php echo (isset($tab_form['value']) && ($tab_form['value'] !== '')?$tab_form['value']:''); ?>'>
            <div class="row board_list boards_<?php echo $tab_k; ?>" <?php echo (isset($tab_form['extra']['attr']) && ($tab_form['extra']['attr'] !== '')?$tab_form['extra']['attr']:''); ?>>
                <div class="container-fluid">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): ?>
                        <div class="panel panel-default board col-xs-12 col-sm-3" data-id="<?php echo $option_key; ?>">
                            <div class="panel-heading">
                                <strong><?php echo $option['title']; ?></strong>
                            </div>
                            <div class="list-group dragsort_<?php echo $tab_k; ?>" data-group="<?php echo $option_key; ?>">
                                <?php if(is_array($option['field']) || $option['field'] instanceof \think\Collection || $option['field'] instanceof \think\Paginator): if( count($option['field'])==0 ) : echo "" ;else: foreach($option['field'] as $option_field_key=>$option_field): ?>
                                    <div class="list-group-item">
                                        <em data="<?php echo $field['id']; ?>"><?php echo $option_field; ?></em>
                                        <input type="hidden" name="<?php echo $tab_form['name']; ?>[<?php echo $option_key; ?>][]" value="<?php echo $option_field_key; ?>"/>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <script type="text/javascript">
                //拖曳插件初始化
                $(function(){
                    $(".dragsort_<?php echo $tab_k; ?>").dragsort({
                         dragSelector:'div',
                         placeHolderTemplate: '<div class="clearfix draging-place">&nbsp;</div>',
                         dragBetween:true, //允许拖动到任意地方
                         dragEnd:function(){
                             var self = $(this);
                             self.find('input').attr('name', '<?php echo $tab_form['name']; ?>[' + self.closest('.dragsort_<?php echo $tab_k; ?>').data('group') + '][]');
                         }
                     });
                });
            </script>
            <?php if(!(empty($tab_form['tip']) || (($tab_form['tip'] instanceof \think\Collection || $tab_form['tip'] instanceof \think\Paginator ) && $tab_form['tip']->isEmpty()))): ?>
                <span class="check-tips small"><?php echo (isset($tab_form['tip']) && ($tab_form['tip'] !== '')?$tab_form['tip']:''); ?></span>
            <?php endif; ?>
        </div>
    </div>
<?php break; case "choice": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmember'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此人</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; case "huxing": ?>
	<style>
		.eeee{line-height: 34px;}
	</style>


    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<div class="row">
        		<div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="ping" value="<?php echo $form['value']['ping']; ?>"><span class="col-xs-4 eeee">平</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="room" value="<?php echo $form['value']['room']; ?>"><span class="col-xs-4 eeee">室</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="office" value="<?php echo $form['value']['office']; ?>"><span class="col-xs-4 eeee">厅</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="guard" value="<?php echo $form['value']['guard']; ?>"><span class="col-xs-4 eeee">卫</span>
			  </div>
			  <div class="col-xs-1">
			    <input type="text" class="form-control col-xs-8"  name="kitchen" value="<?php echo $form['value']['kitchen']; ?>"><span class="col-xs-4 eeee">厨</span>
			  </div>
			   <div class="col-xs-2">
			    <span class="col-xs-4 eeee" style="text-align: right;">可住</span><input type="text" class="form-control col-xs-4"  name="canlive" value="<?php echo $form['value']['canlive']; ?>"><span class="col-xs-2 eeee">人</span>
			  </div>
			  <div class="col-xs-2">
			    <span class="col-xs-2 eeee" >共</span><input type="text" class="form-control col-xs-4"  name="bed" value="<?php echo $form['value']['bed']; ?>"><span class="col-xs-4 eeee">张床</span>
			  </div>


			</div>
        </div>
    </div>
<?php break; case "sheshi": ?>
    <style>
        .right{display:flex;}
        .kdawi{width:33%;}
    </style>
    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
<!-- 
<?php

    echo '<pre>';


var_dump($form);
    echo '</pre>';


?> -->
     <script type="text/javascript">
        $(function(){
            $('.auth input[type="checkbox"]').on('change',function(){
                //遍历选中当前权限的子权限
                $('.'+$(this).attr('data-module-name')+' .auth'+$(this).val()).find('input').prop('checked',this.checked);

                //遍历选中当前权限的父权限
                if ($(this).is(':checked') == true) {
                    var $fix = $(this);
                    while ($fix.length > 0) {
                        var $tmp = $fix.closest('div').prev('label').find('input');
                        console.log($tmp);
                        if ($tmp.length > 0) {
                            $tmp.attr("checked",true);
                            $fix = $tmp;
                        } else {
                            break;
                        }
                    }
                }
            });
        });
    </script>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
                <div class="auth">
                    <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): $i = 0; $__LIST__ = $form['options'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;$module_name = $key; ?>
                        <div class="<?php echo $vo1['id']; ?>">
                            <div class="lyui-control lyui-checkbox">
                                <label class="checkbox-label checkbox-inline">
                                    <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo1['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo1['id']; ?>">
                                    <span class="lyui-control-indicator"></span>
                                    <span> <?php echo $vo1['title']; ?></span>
                                </label>
                                <div class="auth<?php echo $vo1['id']; ?>" style="padding-left: 25px;margin-top: 10px;">
                                    <?php if(is_array($vo1['zz']) || $vo1['zz'] instanceof \think\Collection || $vo1['zz'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo1['zz'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                        <label class="checkbox-label checkbox-inline">
                                            <input type="checkbox" name="<?php echo $form['name']; ?>[<?php echo $vo1['id']; ?>][]" data-module-name="<?php echo $vo1['id']; ?>" <?php if(in_array($vo2['id'],$form['value'][$vo1['id']])) echo "checked"; ?> value="<?php echo $vo2['id']; ?>">
                                            <span class="lyui-control-indicator"></span>
                                            <span> <?php echo $vo2['title']; ?></span>
                                        </label>
                                      
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
     
    </div>

<?php break; case "address": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
            <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
            <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
          
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址">
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
            var city=$("#cityid").val();
            var district=$("#districtid").val();
            var selCity = $("#seleAreaNext")[0];
            for (var i = selCity.length - 1; i >= 0; i--) {
                selCity.options[i] = null;
            }
            var opt = new Option("请选择省", "-1");
            selCity.options.add(opt);
            // 添加省
            $.ajax({
                type : "post",
                url : "<?php echo U('admin/index/getprovince'); ?>",
                dataType : "json",
                success : function(data) {
                    if (data != null && data.length > 0) {
                        for (var i = 0; i < data.length; i++) {
                            var opt = new Option(data[i].province_name,
                                    data[i].province_id);
                            selCity.options.add(opt);
                        }
                       // if(province){
                       //  $("#seleAreaNext").val(province);
                       // }
                       
                    }
                }
            });

          
    
            // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }

                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                                                
                                                                <?php case "yaddress": ?>

    <!--
        如果选项的值是自定义数组(必须定义key为title的元素)需要解析，如果选项的值是常规字符串直接显示
        此处主要是用来给option定义更多的属性，比如data-ia=1，那么option应为
        $option = array('title' => 标题, 'data-id' => 1);
    -->
    <input type="hidden" id="provinceid" value="<?php echo $form['value']['province']; ?>" />
    <input type="hidden" id="cityid" value="<?php echo $form['value']['city']; ?>" />
    <input type="hidden" id="districtid" value="<?php echo $form['value']['district']; ?>" />
    <input type="hidden" id="adressid" value="1" />
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">

        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
             <select name="province" id="seleAreaNext"  class="form-control lyui-select select inputBg"  style="width:150px;" onchange="GetProvince();getSelCity();">
                 <option value="">请选择省</option>
            </select>
            <select name="city" id="seleAreaThird"  class="form-control lyui-select select inputBg" style="width:150px;" onchange="getSelCity();" >
                <option value="">请选择市</option>
            </select>
            <select name="district" id="seleAreaFouth"  class="form-control lyui-select select inputBg" style="width:150px;" >
                <option value="-1">请选择区/县</option>
            </select>
            <input type="text" class="form-control input text" name="address" value="<?php echo $form['value']['address']; ?>" style="width:30%;" placeholder="详细地址"}>
        </div>
    </div>
    <script>    
            var province=$("#provinceid").val();
    var city=$("#cityid").val();
    var district=$("#districtid").val();
    var selProvince=$("#seleAreaNext")[0];
    for (var i = selProvince.length - 1; i >= 0; i--) {
        selProvince.options[i] = null;
    }
    var opt = new Option("请选择省", "-1");
    selProvince.options.add(opt);
        //添加省
        $.ajax({
            type : "post",
            url : "<?php echo U('admin/index/getprovince'); ?>",
            dataType : "json",
            success : function(data) {
                if (data != null && data.length > 0) {
                    for (var i = 0; i < data.length; i++) {
                        var opt = new Option(data[i].province_name, data[i].province_id);
                        selProvince.options.add(opt);
                    }
                    $("#seleAreaNext").val(province);
                }
            }
        });
    var address_id=$("#adressid").val();
    if(address_id!=0){
        //查询这个收货地址的详细地址
        //加载市
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getCity'); ?>",
                    dataType: "json",
                    data: { "province_id": province },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name, data[i].city_id);
                                selCity.options.add(opt);
                            }
                        $("#seleAreaThird").val(city);
                        }
                    }
                });
                //加载区县
            var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区/县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type: "post",
                    url: "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType: "json",
                    data: { "city_id": city },
                    success: function (data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name, data[i].district_id);
                                selArea.options.add(opt);
                            }
                        $("#seleAreaFouth").val(district);
                        }
                    }
                });
    }
                    // 选择省份弹出市区
            function GetProvince() {
                var id = $("#seleAreaNext").find("option:selected").val();
                var selCity = $("#seleAreaThird")[0];
                for (var i = selCity.length - 1; i >= 0; i--) {
                    selCity.options[i] = null;
                }
                var opt = new Option("请选择市", "-1");
                selCity.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getCity'); ?>",
                    dataType : "json",
                    data : {
                        "province_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].city_name,data[i].city_id);
                                selCity.options.add(opt);
                            }
                        }
                    }
                });
            };
            // 选择市区弹出区域
            function getSelCity() {
                var id = $("#seleAreaThird").find("option:selected").val();
                var selArea = $("#seleAreaFouth")[0];
                for (var i = selArea.length - 1; i >= 0; i--) {
                    selArea.options[i] = null;
                }
                var opt = new Option("请选择区县", "-1");
                selArea.options.add(opt);
                $.ajax({
                    type : "post",
                    url : "<?php echo U('admin/index/getDistrict'); ?>",
                    dataType : "json",
                    data : {
                        "city_id" : id
                    },
                    success : function(data) {
                        if (data != null && data.length > 0) {
                            for (var i = 0; i < data.length; i++) {
                                var opt = new Option(data[i].district_name,data[i].district_id);
                                selArea.options.add(opt);
                            }
                        }
                    }
                });
            }



    </script>
<?php break; ?>
<!--  <option value=''>请选择：</option>
                <?php if(is_array($form['options']) || $form['options'] instanceof \think\Collection || $form['options'] instanceof \think\Paginator): if( count($form['options'])==0 ) : echo "" ;else: foreach($form['options'] as $option_key=>$option): if(is_array($option)): ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                            <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <?php echo $option['title']; ?>
                        </option>
                    <?php else: ?>
                        <option value="<?php echo $option_key; ?>" <?php if(isset($form['value']) && ($form['value'] == $option_key)) echo 'selected'; ?>><?php echo $option; ?></option>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?> -->
<!-- <tr>
<td align="right" width="10%">配送区域：</td>
<td colspan="3" align="left">
    <select name="province" id="seleAreaNext" onchange="GetProvince();getSelCity();" class="inputBg">
        <option value="">请选择省</option>
    </select>
    <select name="city" id="seleAreaThird" onchange="getSelCity();" class="inputBg">
        <option value="">请选择市</option>
    </select>
    <select name="district" id="seleAreaFouth" class="inputBg">
        <option value="-1">请选择区/县</option>
    </select>
    (必填)
</td>
</tr> -->

                                                                
                                                                <?php case "map": ?>
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=ASOBZ-U2RK6-PZQSM-ESQWD-7XO3J-TAFF3"></script>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <!-- <input type="text" class="form-control input text" name="<?php echo $form['name']; ?>" value="<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> -->
        	<input type="hidden" name="latitude" id="latitude" value="<?php echo $form['value']['latitude']; ?>">
			<input type="hidden" name="longitude" id="longitude" value="<?php echo $form['value']['longitude']; ?>">
			<div id="container" style="height: 500px; width:70%;"></div>

        </div>
    </div>
   
    <script>
    	var mymap={
			map:'',
			markerArray:[],
			lat:"<?php echo (isset($form['value']['latitude']) && ($form['value']['latitude'] !== '')?$form['value']['latitude']:'39.908859'); ?>",//初始纬度
			lng:"<?php echo (isset($form['value']['longitude']) && ($form['value']['longitude'] !== '')?$form['value']['longitude']:'116.397392'); ?>",//初始经度
			conId:"container",
			jsonArr:[],
			latVal:"latitude",//点击地图后存放纬度INPUT的ID
			lngVal:"longitude",//点击地图后存放经度INPUT的ID
			zoom:12//地图初始缩放比例
		}
    </script>
     <script src="/public/zhuzhuangtu/myqqmap.js"></script>
<?php break; case "modules": ?>

    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="layui-form" >
            <div class="layui-form-item">
                  <div class="lyui-input-inline">
                    <input type="hidden" id="citys" name="<?php echo $form['name']; ?>" value="<?php echo $form['value']; ?>">
                    <select style="width:100%;" class="form-control lyui-select select" lay-filter="city" lay-verify="required" lay-search="">
                      <option value="">直接选择或搜索选择</option>
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
        </div>

        </div>
    </div>

<script>
layui.use(['form', 'layedit', 'laydate'], function(){

   var  form=layui.form;
  
    form.on('select(city)',function(res){
        $('#citys').val(res.value)
    })
  
  
});
// $("body").on("keyup",".layui-input",function(){
//       $.ajax({
//         url:"<?php echo U('admin/room/getcity'); ?>",
//         type:"post",
//         data:data.field,
//         dataType:'JSON',
//         success:function(res){
            
//             console.log(res)   
//         },
//         error:function(){
//             layer.alert("网络异常")
//         }
//     })
// })

</script>

<?php break; case "timeprice": ?>
	<script src="__PUBLIC__/libs/datetime/dateTime2.js" type="text/javascript" defer="defer"></script>
   <link rel="stylesheet" type="text/css" href="__PUBLIC__/libs/datetime/dateTime2.css"/>
    <style type="text/css">
		.dateTime{ position:relative; width:100%; border: 1px solid #ddd; overflow: hidden;}
	</style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
           <div class="dateTime">
    	
		   	    <div id="con" style="width:60%; float:left; overflow: hidden; min-width: 400px;"></div>
			   	<div class="set" style="width:30%; float:left; overflow: hidden;">
			   		<div class="setLock">
			   			<div class="setTime_row">锁房设置：</div>
			   			<input type="checkbox"  name="" id="lock" value="" />锁房
			   			
			   		</div>
			   		<div class="setTime">
			   			<div class="setTime_row">时段设置：</div>
			   			<div class="setTime_row">
			   				
				   		    <select name="s1s" id="s1s" >
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s1e" id="s1e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s1t">%
				   		   
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s2s" id="s2s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s2e" id="s2e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s2t">%
				   		    
				   		</div>
				   		<div class="setTime_row">
				   		    <select name="s3s" id="s3s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s3e" id="s3e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s3t">%
				   		    
				   		</div>
				   		
				   		<div class="setTime_row">
				   		    <select name="s4s" id="s4s">
				   		    	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <span>至</span>
				   		     <select name="s4e" id="s4e">
				   		     	<option value="">请选择</option>
				   		    	<option value="1">1点</option><option value="2">2点</option><option value="3">3点</option>
				   		    	<option value="4">4点</option><option value="5">5点</option><option value="6">6点</option>
				   		    	<option value="7">7点</option><option value="8">8点</option><option value="9">9点</option>
				   		    	<option value="10">10点</option><option value="11">11点</option><option value="12">12点</option>
				   		    	<option value="13">13点</option><option value="14">14点</option><option value="15">15点</option>
				   		    	<option value="16">16点</option><option value="17">17点</option><option value="18">18点</option>
				   		    	<option value="19">19点</option><option value="20">20点</option><option value="21">21点</option>
				   		    	<option value="22">22点</option><option value="23">23点</option><option value="24">24点</option>
				   		    </select>
				   		    <input type="text" value="" id="s4t">%
				   		</div>
				   		
				   		
				   		
			   		</div>
			   		<div class="setTotal">
			   			<div class="setTime_row">房价设置：</div>
			   		    <input type="text" id="total" placeholder="请输入价格">元
			   		</div>
			   		<div class="setTime_row"><a onclick="cz.tj()">设置</a></div>
			   	</div>
		   	</div>
        </div>
    </div>
    <input type="hidden" name="<?php echo $form['name']; ?>" id="dateprice" value='<?php echo (isset($form['value']) && ($form['value'] !== '')?$form['value']:''); ?>'>
    <script>
	layui.use(['form', 'layedit', 'laydate'], function(){
 
  
  
});
		var mydate={
			  hdinput:"<?php echo $form['name']; ?>",
			  con:"con",
		      picker:"",//V-HTML
		      startDate:"",//开始日期
		      endDate:"",// 结束日期
		     startObj:"",//开始LI对象
		      endObj:"",//结束LI对象
		}
	</script>	
<?php break; case "tuikuan": ?>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right">
            <div class="checkbox checkbox-slider--b-flat checkbox-slider-md">
                <label style="position: relative;">
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>" type="checkbox" name="checkout" <?php if($form['value']['checkout'] == 1) { echo 'checked="checked"'; } ?> >
                    <span><?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?></span>
                    <input id="<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input" type="hidden" name="checkout" value="<?php echo (isset($form['value']['checkout']) && ($form['value']['checkout'] !== '')?$form['value']['checkout']:''); ?>">
                </label>
            </div><br><br>
            <div id="dsgj" style="display:none;color:#888;">入住 
                    <select name="day" id="" style="color:red;border:0px;">
                        <option value="1" <?php if($form['value']['day'] == 1): ?>selected<?php endif; ?>>前1天</option>
                        <option value="3" <?php if($form['value']['day'] == 3): ?>selected<?php endif; ?>>前3天</option>
                        <option value="7" <?php if($form['value']['day'] == 7): ?>selected<?php endif; ?>>前7天</option>
                        <option value="15" <?php if($form['value']['day'] == 15): ?>selected<?php endif; ?>>前15天</option>
                        <option value="30" <?php if($form['value']['day'] == 30): ?>selected<?php endif; ?>>前30天</option>
                    </select>
            12点前取消订单，房费可全额退还；<br><br>之后取消订单，收取未住房费的
                    <select name="percent" id="" style="color:red;border:0px;">
                        <option value="10" <?php if($form['value']['percent'] == 10): ?>selected<?php endif; ?>>10%</option>
                        <option value="20" <?php if($form['value']['percent'] == 20): ?>selected<?php endif; ?>>20%</option>
                        <option value="30" <?php if($form['value']['percent'] == 30): ?>selected<?php endif; ?>>30%</option>
                        <option value="40" <?php if($form['value']['percent'] == 40): ?>selected<?php endif; ?>>40%</option>
                        <option value="50" <?php if($form['value']['percent'] == 50): ?>selected<?php endif; ?>>50%</option>
                        <option value="60" <?php if($form['value']['percent'] == 60): ?>selected<?php endif; ?>>60%</option>
                        <option value="70" <?php if($form['value']['percent'] == 70): ?>selected<?php endif; ?>>70%</option>
                        <option value="80" <?php if($form['value']['percent'] == 80): ?>selected<?php endif; ?>>80%</option>
                        <option value="90" <?php if($form['value']['percent'] == 90): ?>selected<?php endif; ?>>90%</option>
                        <option value="100" <?php if($form['value']['percent'] == 100): ?>selected<?php endif; ?>>100%</option>
                    </select>作为违约金支付给房东。（包含未入住和提现离店）</div>
           
            <a href="tuikuan.html"></a>
            <script type="text/javascript">
                if('<?php echo $form['value']['checkout']; ?>' == 1){
                    $('#dsgj').show();
                }
                $(function(){
                    $(document).on('click', '#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>', function() {
                        var ch = $(this).is(':checked');
                        if (ch == true) {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('1');
                            $('#dsgj').show();
                        } else {
                            $('#<?php echo (isset($group_k) && ($group_k !== '')?$group_k:''); ?>_date_<?php echo $k; ?>_input').val('0');
                             $('#dsgj').hide();
                        }
                    });
                });
            </script>
        </div>
    </div>
<?php break; case "coupon": ?>
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
                            <input type="radio"  onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); if(is_array($option) || $option instanceof \think\Collection || $option instanceof \think\Paginator): if( count($option)==0 ) : echo "" ;else: foreach($option as $option_key2=>$option2): ?>
                                    <?php echo $option_key2; ?>="<?php echo $option2; ?>"
                                <?php endforeach; endif; else: echo "" ;endif; ?>>
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option['title']; ?></span>
                        <?php else: ?>
                            <input type="radio" onclick="changein('<?php echo $option_key; ?>')" id="<?php echo $form['name']; ?><?php echo $option_key; ?>" class="radio" name="type" value="<?php echo $option_key; ?>" <?php if($form['value']['type'] == $option_key) echo 'checked';?> <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>> 
                            <span class="lyui-control-indicator"></span>
                            <span><?php echo $option; ?></span>
                        <?php endif; ?>
                    </label>
                    <div>
                    </div>
                </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label">优惠内容：</label>
        <div class="right">
            <div class="" id="yhcon" style="width:100%;">
              <span style="line-height: 34px;">请先选择优惠券类型</span>
            </div>
        </div>
    </div>
    <script>
    	if('<?php echo $form['value']['type']; ?>'){
    		changein('<?php echo $form['value']['type']; ?>')
    	}

    	function changein(id) {
    	
        var youhui1 = ' <span style="float:left;line-height:34px;padding-right:10px;">满</span> <input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_price" value="<?php echo $form['value']['mj_price']; ?>"> <span style="float:left;line-height: 34px;padding:0 10px;">减</span><input type="text" style="width:10%;float:left;" class="text input-2 form-control" name="mj_hui" value="<?php echo $form['value']['mj_hui']; ?>">';
        var youhui2 = '<input type="text" style="width:10%;float: left;" class="text input-2 form-control" name="zhekou" value="<?php echo $form['value']['zhekou']; ?>"> <span  style="float:left;line-height:34px;padding-left:10px;">折</span>';
        if (id == 1) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui1;
        }else if (id == 2) {
          document.getElementById("yhcon").innerHTML='';
          document.getElementById("yhcon").innerHTML=youhui2;
        }
      }
    </script>
<?php break; case "choices": ?>
	<style>	
.kdwoa td{text-align: center;}
.warp-wai{padding:2% 4%; }
   </style>
    <div class="form-group item_<?php echo $form['name']; ?> <?php echo (isset($form['extra']['class']) && ($form['extra']['class'] !== '')?$form['extra']['class']:''); ?>">
        <label class="left control-label"><?php echo $form['title']; ?>：</label>
        <div class="right" style="width:77%;">
            <input type="text" style="float:left" readonly="readonly"  class="form-control input text mingzi" value="<?php echo $form['value']['nickname']; ?>" placeholder="<?php echo (isset($form['tip']) && ($form['tip'] !== '')?$form['tip']:''); ?>" <?php echo (isset($form['extra']['attr']) && ($form['extra']['attr'] !== '')?$form['extra']['attr']:''); ?>>
            <input type="hidden" name="uid" value="<?php echo $form['value']['uid']; ?>" class="idid">
            <a  style="float:left;width:10%;max-width:10%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">选择人员</a>
         </div>
    </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">选择人员</h4>
          </div>
          <div class="modal-body">
          	<div class="row">
          		 <div class="col-md-1"></div>
              <div class="col-md-9" style="padding-right:0;"><input type="text" id="keywordssdf"  class="form-control input text" value="" placeholder="请输入微信昵称/真实姓名/手机号" style="width:100%;"></div>
              <div class="col-md-1 "><a type="button" id="fehbkj" class="btn btn-primary" >搜索</a></div>
              <div class="col-md-1"></div>
            </div>
           <div class="row" style="margin-top:2%;">
           	<div class="col-md-1"></div>
    	<div class="col-md-10" id="dhwsj">
    			
    </div>

			<div class="col-md-1"></div>
       	</div>	
      </div>
      <div class="modal-footer" style="text-align: center;">
       
        <button type="button" class="btn btn-primary" data-dismiss="modal">点击关闭</button>
      </div>
    </div>
  </div>
</div>
	<script>
		$('#fehbkj').click(function(){

      keywords = $('#keywordssdf').val();
      if(!keywords){
        alert('请输入搜索条件')
        return;
      }
         $.ajax({
            url:"<?php echo U('room/index/getmembers'); ?>",
            type:"post",
            data:{'keywords':keywords},
            dataType:'JSON',
            success:function(res){
             if(res.status == 1){
                info ='<table class="table kdwoa"><tr><td>头像</td><td>昵称</td><td>真实姓名</td><td>手机号</td><td>操作</td></tr>'
                for(var i=0;i<res.info.length;i++)
                {
                   nickname = !res.info[i].nickname?"":res.info[i].nickname
                   username = !res.info[i].username?"":res.info[i].username
                   mobile = !res.info[i].mobile?"":res.info[i].mobile
                  info+='<tr><td><img width="30px" src="'+res.info[i].headimgurl+'" alt=""></td><td>'+nickname+'</td><td>'+username+'</td><td>'+mobile+'</td><td><a style="color:red;" class="xuanze" mingzi="'+nickname+'" data-id="'+res.info[i].id+'">选择</a></td></tr>'
                }
                info += '</table>';
             }else{
                info = '<div style="text-align:center;">暂无此房东</div>';
             }
             $('#dhwsj').html(info);
            }
          })
    })
     $("body").on("click",".xuanze",function(){
          // $(this).attr("data-id")
          // $(this).attr("mingzi")
          // alert($(this).attr("mingzi"))
          $(".mingzi").val($(this).attr("mingzi"))
           $(".idid").val($(this).attr("data-id"))
           $(".fade").trigger("click")
     })
	</script>

<?php break; ?>

                                                                // 扩展类型
                                                                <?php default: ?>
                                                                <?php echo hook('FormBuilderExtend', array('form' => $tab_form, 'type' => tab_)); endswitch; endforeach; endif; else: echo "" ;endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group"><hr></div>
                                <?php break; ?>

                                // 扩展类型
                                <?php default: ?>
                                <?php echo hook('FormBuilderExtend', array('form' => $form)); endswitch; endforeach; endif; else: echo "" ;endif; if(empty($form_items) || (($form_items instanceof \think\Collection || $form_items instanceof \think\Paginator ) && $form_items->isEmpty())): ?>
                            <div class="builder-data-empty text-center">
                                <div class="empty-info">
                                    <i class="fa fa-database"></i> 暂时没有数据<br>
                                    <span class="small">本系统由 <a href="<?php echo C('WEBSITE_DOMAIN'); ?>" class="text-muted" target="_blank"><?php echo C('PRODUCT_TITLE'); ?></a> v<?php echo C('CURRENT_VERSION'); ?> 强力驱动</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group"></div>
                        <div class="form-group bottom_button_list">
                            <a class="btn btn-primary submit <?php if($ajax_submit) echo 'ajax-post';?>" type="submit" target-form="form-builder"><?php if ($submit_title) {echo $submit_title;} else {echo '确定';} ?></a>
                            <!--底部按钮-->
                            <?php if(is_array($bottom_button_list) || $bottom_button_list instanceof \think\Collection || $bottom_button_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bottom_button_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <a <?php if($vo['href']) echo 'href="'.$vo['href'].'"'; if($vo['href']) echo 'url="'.$vo['href'].'"'; ?>  class="<?php echo $vo['class']; if($ajax_submit && $vo['type'] == 'submit') echo 'ajax-post';?> m-r-xs" type="<?php echo $vo['type']; ?>" target-form="form-builder"><?php echo $vo['title']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; if($hide_bottom_cancel === false): ?>
                                <a class="btn btn-danger return" <?php if($is_modal === false){ echo 'onclick="javascript:history.back(-1);return false;"';} else{echo  'data-dismiss="modal"';} ?>>取消</a>
                            <?php endif; ?>
                            <script type="text/javascript">
                                $('a[type="submit"]').click(function(){
                                    if (!$(this).hasClass('ajax-post')) {
                                        $("form.form-builder").submit();
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <?php if(isset($extra_html['bottom'])): ?>
        <?php echo $extra_html['bottom']; endif; ?>
</div>

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
