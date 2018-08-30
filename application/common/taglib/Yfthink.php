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
namespace app\common\taglib;

use yfthink\template\TagLib;

/**
 * 标签库
 * @author <youfai@youfai.cn>
 */
class Yfthink extends TagLib
{
    // 兼容TP3版本TagLib
    protected $prefix = '_';

    /**
     * 定义标签列表
     * @author <youfai@youfai.cn>
     */
    protected $tags = array(
        'sql_query'   => array('attr' => 'sql,result', 'close' => 0), //SQL查询
        'nav_list'    => array('attr' => 'name,pid,group', 'close' => 1), //导航列表
        'slider_list' => array('attr' => 'name,limit,page,order', 'close' => 1), //幻灯列表
        'post_list'   => array('attr' => 'name,limit,page,order,cid', 'close' => 1), //文章列表
    );

    /**
     * SQL查询
     */
    public function _sql_query($tag, $content)
    {
        $sql    = $tag['sql'];
        $result = !empty($tag['result']) ? $tag['result'] : 'result';
        $parse  = '<?php $' . $result . ' = M()->query("' . $sql . '");';
        $parse .= 'if($' . $result . '):?>' . $content;
        $parse .= "<?php endif;?>";
        return $parse;
    }

    /**
     * 导航列表
     */
    public function _nav_list($tag, $content)
    {
        $name  = $tag['name'];
        $pid   = $tag['pid'] ?: 0;
        $group = $tag['group'] ?: 'main';
        $parse = '<?php ';
        $parse .= '$__NAV_LIST__ = D(\'Admin/Nav\')->getNavTree(' . $pid . ', "' . $group . '");';
        $parse .= ' ?>';
        $parse .= '<volist name="__NAV_LIST__" id="' . $name . '">';
        $parse .= $content;
        $parse .= '</volist>';
        return $parse;
    }

    /**
     * 幻灯列表
     * @author <youfai@youfai.cn>
     */
    public function _slider_list($tag, $content)
    {
        $name  = $tag['name'];
        $limit = isset($tag['limit']) ?: 10;
        $page  = isset($tag['page']) ?: 1;
        $order = isset($tag['order']) ?: 'sort desc,id desc';
        $parse = '<?php ';
        $parse .= '$map = array(); ';
        $parse .= '$map["status"] = array("eq", "1");';
        $parse .= '$__SLIDER_LIST__ = D("Admin/Slider")->getList(' . $limit . ', ' . $page . ', "' . $order . '", $map);';
        $parse .= ' ?>';
        $parse .= '<volist name="__SLIDER_LIST__" id="' . $name . '">';
        $parse .= $content;
        $parse .= '</volist>';
        return $parse;
    }

    /**
     * 文章列表
     * @author <youfai@youfai.cn>
     */
    public function _post_list($tag, $content)
    {
        $name = $tag['name'];
        $cid  = $tag['cid'];
        if (!$cid) {
            return;
        }
        $limit = $tag['limit'] ?: 10;
        $page  = $tag['page'] ?: 1;
        $order = $tag['order'] ?: 'sort desc,id desc';
        $parse = '<?php ';
        $parse .= '$map = array(); ';
        $parse .= '$map["status"] = array("eq", "1");';
        $parse .= '$__POST_LIST__ = D("Admin/Post")->getList(' . $cid . ', ' . $limit . ', ' . $page . ', "' . $order . '", $map);';
        $parse .= ' ?>';
        $parse .= '<volist name="__POST_LIST__" id="' . $name . '">';
        $parse .= $content;
        $parse .= '</volist>';
        return $parse;
    }
}
