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

namespace Topic\TagLib;
use yfthink\template\TagLib;

/**
 * 标签库
 * @author youfai.cn <280962430@qq.com>
 */
class Topic extends TagLib {
    /**
     * 定义标签列表
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tags = array(
        'list' => array('attr' => 'name', 'close' => 1),  //文档列表
    );

    /**
     * 文档列表
     * @author youfai.cn <280962430@qq.com>
     */
    public function _list($tag, $content) {
        $name   = $tag["name"];
        $parse  = '<?php ';
        $parse .= '$__Topic_LIST__ = D("Topic/Index")->select();';
        $parse .= ' ?>';
        $parse .= '<volist name="__Topic_LIST__" id="'. $name .'">';
        $parse .= $content;
        $parse .= '</volist>';
        return $parse;
    }
}
