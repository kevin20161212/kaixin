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
// use app\common\model\Model;
use think\Model;
use yfthink\Tree;
/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class CmsCategory extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'cms_category';

    /**
     * 自动验证规则
     * @author youfai.cn <280962430@qq.com>
     */
    // protected $_validate = array(
    //     array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    //     array('content', 'require', '内容不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    // );

    /**
     * 自动完成规则
     * @author youfai.cn <280962430@qq.com>
     */
    // protected $_auto = array(
    //     array('create_time', 'time', self::MODEL_INSERT, 'function'),
    //     array('update_time', 'time', self::MODEL_BOTH, 'function'),
    //     array('sort', '0', self::MODEL_INSERT),
    //     array('status', '1', self::MODEL_INSERT),
    // );
    public function lists(){
        $datas = $this->all(function($query){
            $query->where('status', '>', -1)->order('sort desc , id asc');
        });
        if($datas){
            foreach ($datas as $volue){
                 $data[] = $volue->toArray();
            }
         }
         unset($datas);
        return $data;
    }
    public function treelists(){
        $datas = $this->all(function($query){
            $query->where('status', '>', -1)->order('sort desc , id asc');
        });
        if($datas){
            foreach ($datas as $volue){
                 $data[] = $volue->toArray();
            }
         }
         unset($datas);
         $tree      = new Tree();
        $data_list = $tree->array2tree($data);
        return $data_list;
    }

    public function editcat($id){
        $this->isUpdate($id)->allowField(true)->save($_POST);
        return $this->id;
    }

    public function listss($where=[],$type='false',$num=8){
        if($type=='true'){
            $data1 = $this->where($where)->find();
            $data1 = $data1->toArray();
            $data = $this->order('id desc')->where(['pid'=>$data1['id']])->select();
            foreach ($data as $key => &$value) {
               $value = $value->toArray();
            }
            return $data;
        }else{
            $data = $this->where($where)->order('id desc')->limit($num)->select();
            foreach ($data as $key => &$value) {
               $value = $value->toArray();
            }
            return $data;
        }
    }
    
}
