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
namespace addon\rocketToTop;

use \app\common\controller\Addon;

/**
 * 小火箭返回顶部
 * @<youfai@youfai.cn>
 */
class RocketToTop extends Addon
{
    /**
     * 插件信息
     * @author <youfai@youfai.cn>
     */
    public $info = array(
        'name'        => 'RocketToTop',
        'title'       => '小火箭返回顶部',
        'description' => '小火箭返回顶部',
        'status'      => '1',
        'author'      => '有范科技',
        'version'     => '1.0.0',
    );

    /**
     * 插件安装方法
     * @author <youfai@youfai.cn>
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @author <youfai@youfai.cn>
     */
    public function uninstall()
    {
        return true;
    }

    /**
     * 实现的PageFooter钩子方法
     * @author <youfai@youfai.cn>
     */
    public function PageFooter($param)
    {
        $addons_config = $this->getConfig();
        if ($addons_config['status']) {
            $this->display('rocket');
        }
    }
}
