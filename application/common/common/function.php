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

require_once APP_DIR . 'common/common/developer.php'; //加载开发者二次开发公共函数库
require_once APP_DIR . 'common/common/extra.php'; //加载兼容公共函数库

// 异常错误报错级别
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

/**
 * 处理插件钩子
 * @param string $hook   钩子名称
 * @param mixed $params 传入参数
 * @return void
 * @author <youfai@youfai.cn>
 */
function hook($hook, $params = array())
{
    $result = \think\Hook::listen($hook, $params);
}

/**
 * 获取插件类的类名
 * @param strng $name 插件名
 * @author <youfai@youfai.cn>
 */
function get_addon_class($name)
{
    $class = 'addon\\' . lcfirst($name) . '\\' . ucfirst($name);
    return $class;
}

/**
 * 插件显示内容里生成访问插件的url
 * @param string $url url
 * @param array $param 参数
 * @author <youfai@youfai.cn>
 */
function addons_url($url, $param = array())
{
    return D('Admin/Addon')->getAddonUrl($url, $param);
}

/**
 * POST数据提前处理
 * @return array
 * @author <youfai@youfai.cn>
 */
function format_data($data = null)
{
    //解析数据类似复选框类型的数组型值
    if (!$data) {
        $data = $_POST;
    }
    $data_object = new \yfthink\Date;
    foreach ($data as $key => $val) {
        if (!is_array($val)) {
            $val = trim($val);
            if ($data_object->checkDatetime($val)) {
                $data[$key] = strtotime($val);
            } else if ($data_object->checkDatetime($val, 'Y-m-d H:i')) {
                $data[$key] = strtotime($val);
            } else if ($data_object->checkDatetime($val, 'Y-m-d')) {
                $data[$key] = strtotime($val);
            } else {
                $data[$key] = $val;
            }
        } else {
            $data[$key] = implode(',', $val);
        }
    }
    return $data;
}

/**
 * 获取所有数据并转换成一维数组
 * $model string 查询模型
 * $map array 查询条件
 * $extra string 额外增加数据
 * $key string 结果数组key
 * $config array Tree参数
 * @author <youfai@youfai.cn>
 */
function select_list_as_tree($model, $map = null, $extra = null, $key = 'id', $param = null)
{
    //获取列表
    $con['status'] = array('eq', 1);
    if ($map) {
        $con = array_merge($con, $map);
    }
    // dump($map);die;
    $model_object = D($model);
    if (in_array('sort', $model_object->getDbFields())) {
        $list = $model_object->where($con)->order('sort asc, id asc')->select();
    } else {
        $list = $model_object->where($con)->order('id asc')->select();
    }

    //转换成树状列表(非严格模式)
    $tree             = new \yfthink\Tree();
    $_param           = array();
    $_param['title']  = 'title';
    $_param['pk']     = 'id';
    $_param['pid']    = 'pid';
    $_param['root']   = 0;
    $_param['scrict'] = true;
    if ($param) {
        $_param = array_merge($_param, $param);
    }
    $list = $tree->array2tree($list, $_param['title'], $_param['pk'], $_param['pid'], $_param['root'], $_param['scrict']);

    if ($extra) {
        $result[0] = $extra;
    }

    //转换成一维数组
    foreach ($list as $val) {
        $result[$val[$key]] = $val['title_show'];
    }
    return $result;
}

/**
 * 解析文档内容
 * @param string $str 待解析内容
 * @return string
 * @author <youfai@youfai.cn>
 */
function parse_content($str)
{
    // 将img标签的src改为lazy-src用户前台图片lazyload加载
    if (C('STATIC_DOMAIN')) {
        $tmp = preg_replace('/<img.*?src="(.*?Uploads.*?)"(.*?)>/i', "<img class='lazy lazy-fadein img-responsive' style='display:inline-block;' data-src='" . C('STATIC_DOMAIN') . "$1'>", $str);
        $tmp = preg_replace('/<img.*?src="(\/.*?)"(.*?)>/i', "<img class='img-responsive' style='display:inline-block;' src='" . C('STATIC_DOMAIN') . "$1'>", $tmp);
    } else {
        $domain = request()->domain();
        $tmp    = preg_replace('/<img.*?src="(.*?Uploads.*?)"(.*?)>/i', "<img class='lazy lazy-fadein img-responsive' style='display:inline-block;' data-src='" . $domain . "$1'>", $str);
        $tmp    = preg_replace('/<img.*?src="(\/.*?)"(.*?)>/i', "<img class='img-responsive' style='display:inline-block;' src='" . $domain . "$1'>", $tmp);
    }
    return $tmp;
}

/**
 * 字符串截取(中文按2个字符数计算)，支持中文和其他编码
 * @static
 * @access public
 * @param str $str 需要转换的字符串
 * @param str $start 开始位置
 * @param str $length 截取长度
 * @param str $charset 编码格式
 * @param str $suffix 截断显示字符
 * @return str
 */
function cut_str($str, $start, $length, $charset = 'utf-8', $suffix = true)
{
    return \yfthink\Str::cutStr(
        $str, $start, $length, $charset, $suffix
    );
}

/**
 * 过滤标签，输出纯文本
 * @param string $str 文本内容
 * @return string 处理后内容
 * @author <youfai@youfai.cn>
 */
function html2text($str)
{
    return \yfthink\Str::html2text($str);
}

/**
 * 友好的时间显示
 * @param int    $sTime 待显示的时间
 * @param string $type  类型. normal | mohu | full | ymd | other
 * @param string $alt   已失效
 * @return string
 * @author <youfai@youfai.cn>
 */
function friendly_date($sTime, $type = 'mohu', $alt = 'false')
{
    $date = new \yfthink\Date((int) $sTime);
    return $date->friendlyDate($type, $alt);
}

/**
 * 时间戳格式化
 * @param int $time
 * @return string 完整的时间显示
 * @author <youfai@youfai.cn>
 */
function time_format($time = null, $format = 'Y-m-d H:i')
{
    $time = $time === null ? time() : intval($time);
    return date($format, $time);
}

/**
 * 系统非常规MD5加密方法
 * @param  string $str 要加密的字符串
 * @return string
 * @author <youfai@youfai.cn>
 */
function user_md5($str, $auth_key = '')
{
    if (!$auth_key) {
        $auth_key = C('AUTH_KEY') ?: 'OpenCMF';
    }
    return '' === $str ? '' : md5(sha1($str) . $auth_key);
}

/**
 * 检测用户是否登录
 * @return integer 0-未登录，大于0-当前登录用户ID
 * @author <youfai@youfai.cn>
 */
function is_login()
{
    return D('Admin/User')->is_login();
}
function is_logins()
{
    return D('Home/User')->is_logins();
}


/**
 * 检测用户是否VIP
 * @return integer VIP等级
 * @author <youfai@youfai.cn>
 */
function is_vip($uid)
{
    if (D('Admin/Module')->where('name="Vip" and status="1"')->count()) {
        $uid = $uid ? $uid : is_login();
        return D('Vip/Index')->isVip($uid);
    }
    return false;
}

/**
 * 获取上传文件路径
 * @param  int $id 文件ID
 * @return string
 * @author <youfai@youfai.cn>
 */
function get_cover($id = null, $type = null)
{
    return D('Admin/Upload')->getCover($id, $type);
}

/**
 * 是否微信访问
 * @return bool
 * @author <youfai@youfai.cn>
 */
function is_weixin()
{
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    } else {
        return false;
    }
}

/**
 * 当前请求的host(不包含端口)
 * @access public
 * @return string
 */
function hostname()
{
    $host = explode(':', $_SERVER['HTTP_HOST']);
    return $host[0];
}

/**
 * 自动生成URL，支持在后台生成前台链接
 * @param string $url URL表达式，格式：'[模块/控制器/操作#锚点@域名]?参数1=值1&参数2=值2...'
 * @param string|array $vars 传入的参数，支持数组和字符串
 * @param string|boolean $suffix 伪静态后缀，默认为true表示获取配置值
 * @param boolean $domain 是否显示域名
 * @return string
 * @author <youfai@youfai.cn>
 */
function oc_url($url = '', $vars = '', $suffix = true, $domain = true)
{
    $url = U($url, $vars, $suffix, $domain);
    if (MODULE_MARK === 'Admin') {
        $url_model = D('Admin/Config')->where(array('name' => 'URL_MODEL'))->getField('value');
        switch ($url_model) {
            case '1':
                $result = strtr($url, array('admin.php?s=' => 'index.php'));
                break;
            case '2':
                $result = strtr($url, array('admin.php?s=/' => ''));
                break;
            case '3':
                $result = strtr($url, array('admin.php' => 'index.php'));
                break;
            default:
                $result = strtr($url, array('admin.php' => 'index.php'));
                break;
        }
        return $result;
    } else {
        return $url;
    }
}

function weekday($time)
{
    if(is_numeric($time))
    {
        $weekday = array('星期日','星期一','星期二','星期三','星期四','星期五','星期六');
        return $weekday[date('w', $time)];
    }
    return false;
}


