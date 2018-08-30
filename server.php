<?php
/**
 * run with command 
 * php start.php start
 */
header("Content-type: text/html; charset=utf-8");

/**
 * 开发模式环境变量前缀
 */
define('ENV_PRE', 'LY_');
define('__ROOT__','');
/**
 * 定义前台标记
 */
define('MODULE_MARK', 'Room');

/**
 * 演示模式
 */
// define('APP_DEMO', true);
// namespace Workerman;
define('APP_PATH', __DIR__ . '/application/');
define('BIND_MODULE','workman/push/Worker');

if (@$_SERVER[ENV_PRE . 'DEV_MODE'] !== 'true') {
    @include __DIR__ . '/data/dev.php';
}
// 加载框架引导文件
require __DIR__ . '/yfthink.php';