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

use app\common\model\Model;

/**
 * 配置模型
 * @author <youfai@youfai.cn>
 */
class Config extends Model
{
    /**
     * 数据库表名
     * @author <youfai@youfai.cn>
     */
    protected $tableName = 'admin_config';

    /**
     * 自动验证规则
     * @author <youfai@youfai.cn>
     */
    protected $_validate = array(
        array('group', 'require', '配置分组不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('type', 'require', '配置类型不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('name', 'require', '配置名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('name', '1,32', '配置名称长度为1-32个字符', self::EXISTS_VALIDATE, 'length', self::MODEL_BOTH),
        array('name', '', '配置名称已经存在', self::VALUE_VALIDATE, 'unique', self::MODEL_BOTH),
        array('title', 'require', '配置标题必须填写', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('title', '1,32', '配置标题长度为1-32个字符', self::EXISTS_VALIDATE, 'length', self::MODEL_BOTH),
        array('title', '', '配置标题已经存在', self::VALUE_VALIDATE, 'unique', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author <youfai@youfai.cn>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_BOTH, 'function'),
        array('status', '1', self::MODEL_BOTH),
    );

    /**
     * 获取配置列表与ThinkPHP配置合并
     * @return array 配置数组
     * @author <youfai@youfai.cn>
     */
    public function lists()
    {
        $map['status'] = array('eq', 1);
        $list          = $this->where($map)->field('name,value,type')->select();
        foreach ($list as $key => $val) {
            switch ($val['type']) {
                case 'array':
                    $config[$val['name']] = \yfthink\Str::parseAttr($val['value']);
                    break;
                case 'checkbox':
                    $config[$val['name']] = explode(',', $val['value']);
                    break;
                default:
                    $config[$val['name']] = $val['value'];
                    break;
            }
        }
        return $config;
    }
}
