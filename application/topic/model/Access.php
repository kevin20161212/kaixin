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
namespace app\Topic\Model;
use app\common\model\Model;

/**
 * 管理员与用户组对应关系模型
 * @author <youfai@youfai.cn>
 */
class Access extends Model
{
    /**
     * 数据库表名
     * @author <youfai@youfai.cn>
     */
    protected $tableName = 'admin_access';

    /**
     * 自动验证规则
     * @author <youfai@youfai.cn>
     */
    protected $_validate = array(
        array('uid', 'require', 'UID不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('group', 'require', '部门不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('uid', 'checkUser', '该用户不存在', self::MUST_VALIDATE, 'callback', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author <youfai@youfai.cn>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_BOTH, 'function'),
        array('sort', '0', self::MODEL_INSERT),
        array('status', '1', self::MODEL_INSERT),
    );

    /**
     * 检查用户是否存在
     * @author <youfai@youfai.cn>
     */
    protected function checkUser($uid)
    {
        $fid = is_login();
        $user_info = D('User')->where(array('fid'=>$fid,'id'=>$uid))->find();
     
        if ($user_info) {
            return true;
        }
        return false;
    }
}
