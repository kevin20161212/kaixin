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
namespace addon\link;

use \app\common\controller\Addon;

/**
 * 友情链接插件
 * @author jry 598821125@qq.com
 */
class Link extends Addon
{
    /**
     * 插件信息
     * @author <youfai@youfai.cn>
     */
    public $info = array(
        'name'        => 'Link',
        'title'       => '友情链接插件',
        'description' => '友情链接插件',
        'status'      => 1,
        'author'      => '有范科技',
        'version'     => '1.0.0',
    );

    /**
     * 自定义插件后台
     * @author <youfai@youfai.cn>
     */
    public $custom_adminlist = 'Link://Link/index';

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
}
