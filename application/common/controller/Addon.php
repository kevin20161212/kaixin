<?php
// +----------------------------------------------------------------------
// | OpenCMF [ Simple Efficient Excellent ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014 http://www.youfai.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: <youfai@youfai.cn>
// +----------------------------------------------------------------------
namespace app\common\controller;

/**
 * 插件类
 * 该类参考了OneThink的部分实现
 * @author <youfai@youfai.cn>
 */
abstract class Addon
{
    /**
     * 视图实例对象
     * @var view
     * @access protected
     * @author <youfai@youfai.cn>
     */
    protected $view          = null;
    public $info             = array();
    public $addon_path       = '';
    public $config_file      = '';
    public $custom_config    = '';
    public $admin_list       = array();
    public $custom_adminlist = '';
    public $access_url       = array();

    /**
     * 构造方法
     * @author <youfai@youfai.cn>
     */
    public function __construct()
    {
        // 实例化View
        $this->view       = \think\View::instance();
        $this->addon_path = config('addon_path') . $this->getName() . '/';

        if (is_file('./' . $this->addon_path . 'config.php')) {
            $this->config_file = $this->addon_path . 'config.php';
        }
    }

    /**
     * 模板主题设置
     * @access protected
     * @param string $theme 模版主题
     * @return Action
     * @author <youfai@youfai.cn>
     */
    final protected function theme($theme)
    {
        $this->view->theme($theme);
        return $this;
    }

    /**
     * 显示方法
     * @author <youfai@youfai.cn>
     */
    final protected function display($file = '')
    {
        if ($file == '') {
            $file = request()->controller();
        }
        if (MODULE_MARK === 'Home') {
            if (C('CURRENT_THEME')) {
                $template = './theme/' . C('CURRENT_THEME') . '/home/addon/' . $this->getName() . '/' . $file . '.html';
                if (is_file($template)) {
                    $file = $template;
                }
                if (request()->isMobile()) {
                    $wap_template = './theme/' . C('CURRENT_THEME') . '/home/Wap/addon/' . $this->getName() . '/' . $file . '.html';
                    if (is_file($wap_template)) {
                        $file = $wap_template;
                    }
                }
            } else {
                if (request()->isMobile()) {
                    $wap_template = './addon/' . $this->getName() . '/Wap/' . $file . '.html';
                    if (is_file($wap_template)) {
                        $file = $wap_template;
                    }
                }
            }
        }
        echo $this->fetch($file);
    }

    /**
     * 模板变量赋值
     * @access protected
     * @param mixed $name 要显示的模板变量
     * @param mixed $value 变量的值
     * @return Action
     * @author <youfai@youfai.cn>
     */
    final protected function assign($name, $value = '')
    {
        $this->view->assign($name, $value);
        return $this;
    }

    /**
     * 用于显示模板的方法
     * @author <youfai@youfai.cn>
     */
    final protected function fetch($templateFile = '')
    {
        if ($templateFile == '') {
            $templateFile = request()->controller();
        }
        if (!is_file($templateFile)) {
            $templateFile = $this->addon_path
            . $templateFile . '.'
            . C('template.view_suffix');
            if (!is_file($templateFile)) {
                throw new \Exception("模板不存在:$templateFile");
            }
        }
        return $this->view->fetch($templateFile, [], ['__ADDONROOT__' => __ROOT__ . '/addon/' . $this->getName()]);
    }

    /**
     * 获取名称
     * @author <youfai@youfai.cn>
     */
    final public function getName()
    {
        $class = explode('\\', get_class($this));
        return $class[1];
    }

    /**
     * 检查信息
     * @author <youfai@youfai.cn>
     */
    final public function checkInfo()
    {
        $info_check_keys = array(
            'name', 'title', 'description', 'status', 'author', 'version',
        );
        foreach ($info_check_keys as $value) {
            if (!array_key_exists($value, $this->info)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 获取插件的配置数组
     * @author <youfai@youfai.cn>
     */
    final public function getConfig($name = '')
    {
        static $_config = array();
        if (empty($name)) {
            $name = $this->getName();
        }
        if (isset($_config[$name])) {
            return $_config[$name];
        }
        $config        = array();
        $map['name']   = $name;
        $map['status'] = 1;
        $config        = D('Admin/Addon')->where($map)->getField('config');
        if ($config) {
            $config = json_decode($config, true);
        } else {
            $temp_arr = include $this->config_file;
            foreach ($temp_arr as $key => $value) {
                if ($value['type'] == 'group') {
                    foreach ($value['options'] as $gkey => $gvalue) {
                        foreach ($gvalue['options'] as $ikey => $ivalue) {
                            $config[$ikey] = $ivalue['value'];
                        }
                    }
                } else {
                    $config[$key] = $temp_arr[$key]['value'];
                }
            }
        }
        $_config[$name] = $config;
        return $config;
    }

    /**
     * 必须实现安装
     * @author <youfai@youfai.cn>
     */
    abstract public function install();

    /**
     * 必须卸载插件方法
     * @author <youfai@youfai.cn>
     */
    abstract public function uninstall();
}
