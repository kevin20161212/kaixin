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
namespace app\admin\model;

// use app\common\model\Model;
use think\Model;

/**
 * 幻灯片模型
 * @author <youfai@youfai.cn>
 */
class AdminSlider extends Model
{
     //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
        //TODO:自定义的初始化
    }
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author <youfai@youfai.cn>
     */
    protected $tableName = 'admin_slider';
     protected $type = [
        'status'    =>  'integer',
        'score'     =>  'float',
        'birthday'  =>  'datetime',
        'info'      =>  'array',
    ];
    /**
     * 自动验证规则
     * @author <youfai@youfai.cn>
     */
    // protected $_validate = array(
    //     array('title', 'require', '标题不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    //     array('title', '1,80', '标题长度为1-80个字符', self::EXISTS_VALIDATE, 'length'),
    //     array('title', '', '标题已经存在', self::VALUE_VALIDATE, 'unique', self::MODEL_BOTH),
    // );

    /**
     * 自动完成规则
     * @author <youfai@youfai.cn>
     */
    // protected $_auto = array(
    //     array('create_time', 'time', self::MODEL_INSERT, 'function'),
    //     array('update_time', 'time', self::MODEL_BOTH, 'function'),
    //     array('status', '1', self::MODEL_INSERT),
    // );

    /**
     * 查找后置操作
     * @author <youfai@youfai.cn>
     */
    protected function _after_find(&$result, $options)
    {
        if ($result['cover']) {
            $result['cover_url'] = get_cover($result['cover'], 'default');
        }
    }

    /**
     * 查找后置操作
     * @author <youfai@youfai.cn>
     */
    protected function _after_select(&$result, $options)
    {
        foreach ($result as &$record) {
            $this->_after_find($record, $options);
        }
    }

    /**
     * 获取幻灯列表
     * @author <youfai@youfai.cn>
     */
    public function getList($limit = 10, $page = 1, $order = null, $map = null)
    {
        $con["status"] = array("eq", '1');
        if ($map) {
            $map = array_merge($con, $map);
        }
        if (!$order) {
            $order = 'sort desc, id desc';
        }
        $list = $this->page($page, $limit)
            ->order($order)
            ->where($map)
            ->select();

        return $list;
    }
    public function lists(){
        $user = $this->all([1,2,3]);
        return $user;
    }
    public function edits($isup){
        $this->isUpdate($isup)->allowField(true)->save($_POST);
        return $this->id;
    }
}