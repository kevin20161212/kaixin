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
 * 部门模型
 * @author <youfai@youfai.cn>
 */
class Group extends Model
{
    /**
     * 数据库表名
     * @author <youfai@youfai.cn>
     */
    protected $tableName = 'admin_group';

    /**
     * 自动验证规则
     * @author <youfai@youfai.cn>
     */
    protected $_validate = array(
        array('title', 'require', '部门名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('title', '1,32', '部门名称长度为1-32个字符', self::EXISTS_VALIDATE, 'length', self::MODEL_BOTH),
        array('title', '', '部门名称已经存在', self::VALUE_VALIDATE, 'unique', self::MODEL_BOTH),
        array('menu_auth', 'require', '权限不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author <youfai@youfai.cn>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
        array('update_time', 'time', self::MODEL_BOTH, 'function'),
        array('status', '1', self::MODEL_INSERT),
    );

    /**
     * 检查部门功能权限
     * @author <youfai@youfai.cn>
     */
    public function checkMenuAuth()
    {
        $current_menu = D('Admin/Module')->getCurrentMenu(); // 当前菜单
      
        $user_group   = D('Admin/Access')->getFieldByUid(session('user_auth.uid'),'group'); // 获得当前登录用户信息
       
        if ($user_group !== '1') {
            
            $group_info = $this->find($user_group);

            // 获得当前登录用户所属部门的权限列表
            $group_auth = json_decode($group_info['menu_auth'], true);
              
            if (in_array($current_menu['id'], $group_auth[ucfirst(request()->module())])) {
               
                return true;
            }
        } else {
            return true; // 超级管理员无需验证
        }
        return false;
    }
}
