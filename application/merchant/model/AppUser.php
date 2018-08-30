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

namespace app\Merchant\Model;
use app\common\model\Model;

/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class AppUser extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'App_User';

    /**
     * 自动验证规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_validate = array(
        array('teach_name', 'require', '教师名不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        // array('password', 'require', '密码不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('mobile', 'mobile', '手机格式不正确', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        // array('email', 'email', '邮箱格式不正确', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        // array('mobile', 'checkUser', '该用户不存在', self::MUST_VALIDATE, 'callback', self::MODEL_BOTH),
    );
   
    /**
     * 自动完成规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
    );

    public function checkUser($mobile){
        $info = db('app_user')->where(['mobile'=>$mobile])->find();
        if($info){
            return true;
        }else{
            return false;
        }
        
    }
}
