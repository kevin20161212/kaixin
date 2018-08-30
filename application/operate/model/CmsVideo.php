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

namespace app\Cms\Model;
use app\common\model\Model;
use app\cms\model\CmsCategory;

/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class CmsVideo extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'cms_video';

    /**
     * 自动验证规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_validate = array(
        array('title', 'require', '职位不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('video', 'require', '人数不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        //array('content', 'require', '内容不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
    );

    public function lists($where=[],$type=0,$page=1,$num=8,$type1=false){
        if($type==1){
            $data = $this->where($where)->order('id desc')->limit(8)->select();
        }else{
            if($type1 == true){
                $cate_model = new CmsCategory();
                $ids = []; 
                $cate_data = $cate_model->where($where)->select();
                foreach ($cate_data as $key => &$val) {
                    $val = $val->toArray();
                    $ids[] = $val['id'];
                }
                $data = $this->order('id desc')->where(['pid'=>['in',$ids]])->select();
            }else{
                $data = $this->where($where)->order('id desc')->limit(($page-1)*$num,$num)->select();
            }
        }
        foreach ($data as $key => &$value) {
            $value['thumb'] = get_cover($value['thumb']);
        }
        return $data;
    }

    public function getOne(){
        $data = $this->order('id desc')->find();
        $data['video'] = $_SERVER['SERVER_NAME'].db('admin_upload')->where(['id'=>$data['video']])->value('path');
        return $data;
    }
}
