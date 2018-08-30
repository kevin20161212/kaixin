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
namespace app\common\widget;

use yfthink\template\TagLib;

/**
 * 标签库
 * @author <youfai@youfai.cn>
 */
class Upload extends \think\Controller
{
    
    public function Image($attributes = array())
    {
        $value = $attributes['value'];
        $name = $attributes['name'];
        $limit = $attributes['limit'];
        $tip = $attributes['tip'];
        $service = $attributes['service'];
        $type = $attributes['type'];
        $default = $attributes['default'];
        $limit || $limit = 1;
        $tip || $tip = '请不要上传过大的图片,宽度最大尺寸1400像素1M以内';
        $service || $service = U("Core/Public/UploadBox");
        $type || $type = 'picture';
        $isLoadScript = $attributes['isLoadScript'] ? 1 : 0;
        $this->assign('isLoadScript', $isLoadScript);
        $this->assign($attributes);
        $this->assign('limit',$limit);
        $this->assign('tip',$tip);
        $this->assign('service',$service);
        $this->assign('type',$type);
        $this->assign('default',$default);
        // dump($this->fetch('Common@default/Widget/uploadimage'));exit;
        echo $this->fetch('Common@default/Widget/uploadimage');

    }
    public function Media($attributes = array()){
        $value = $attributes['value'];
        $name = $attributes['name'];
        $limit = $attributes['limit'];
        $tip = $attributes['tip'];
        $service = $attributes['service'];
        $type = $attributes['type'];
        $default = $attributes['default'];
        $limit || $limit = 1;
          if($value){
           $file = M('Media')->where(array('id'=>$value))->find();
           $this->assign('file',$file);
        }
        $this->assign($attributes);
        $this->assign('limit',$limit);
        $this->assign('service',$service);
        $this->assign('type',$type);
        $this->assign('default',$default);
        $this->fetch(T('Core@default/Widget/uploadmedia'));
    }
    public function Avatar($uid, $width){
        $this->assign('uid',$uid);
        $this->assign('width',$width);
        $this->fetch(T('Core@default/Widget/uploadavatar'));
    }
}
