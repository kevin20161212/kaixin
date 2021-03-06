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

namespace app\Course\Model;
use app\common\model\Model;

/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class Course extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */                    
    protected $tableName = 'Course';

    /**
     * 自动验证规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_validate = array(
        array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );
   
    /**
     * 自动完成规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
    );


    /**
     * 存储课程信息
     */
    
    public function save_data($data){
        //dump($data);exit;
        $data['high_unit_price'] = max($data['danjia']);
        $data['low_unit_price'] = min($data['danjia']);
        $data['create_time'] = time();
        if($data['guigeids']){
            foreach($data['guigeids'] as $key => $value){
                db('course_grade_standard')->where(['id'=>$value])->update(['guige'=>$data['guigename'][$key],'keshi'=>$data['keshi'][$key],'cost'=>$data['cost'][$key],'num'=>$data['num'][$key],'danjia'=>$data['danjia'][$key]]);
                unset($data['guigename'][$key]);
                unset($data['keshi'][$key]);
                unset($data['cost'][$key]);
                unset($data['danjia'][$key]);
                unset($data['num'][$key]);
            }
        }
        $guigename = $data['guigename'];
        $keshi = $data['keshi'];
        $cost = $data['cost'];
        $danjia = $data['danjia'];
        $num = $data['num'];
        unset($data['guigename']);
        unset($data['keshi']);
        unset($data['cost']);
        unset($data['danjia']);
        unset($data['num']);
        unset($data['guigeids']);
        if(!$data['id']){
            $id = db('course')->insertGetId($data);
        }else{
            $id = $data['id'];
            db('course')->where(['id'=>$id])->update($data);
        }
        foreach ($guigename as $key => $value) {
            $course_grade_standard[$key]['course_id'] = $id;
            $course_grade_standard[$key]['guige'] = $value;
            $course_grade_standard[$key]['keshi'] = $keshi[$key];
            $course_grade_standard[$key]['cost'] = $cost[$key];
            $course_grade_standard[$key]['danjia'] = $danjia[$key];
            $course_grade_standard[$key]['num'] = $num[$key];
        }
        //dump($course_grade_standard);exit;
        //db('course_grade_standard')->where(['course_id'=>$id])->delete();
        if($course_grade_standard){
            db('course_grade_standard')->insertAll($course_grade_standard);
        }
        $ids = db('course_grade_standard')->where(['course_id'=>$id])->field('id')->select();
         foreach ($ids as $key => $value) {
            $idss[] = $value['id'];
         }
        $idss = implode(',',$idss);
        db('course')->where(['id'=>$id])->update(['course_grade_standard'=>$idss]);
       
        return true;
    }
}
