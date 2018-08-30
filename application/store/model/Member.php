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

namespace app\Store\Model;
use app\common\model\Model;

/**
 * 默认模型
 * @author youfai.cn <280962430@qq.com>
 */
class Member extends Model {
    /**
     * 数据库真实表名
     * 一般为了数据库的整洁，同时又不影响Model和Controller的名称
     * 我们约定每个模块的数据表都加上相同的前缀，比如微信模块用weixin作为数据表前缀
     * @author youfai.cn <280962430@qq.com>
     */
    protected $tableName = 'Merchant_Member';

    /**
     * 自动验证规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_validate = array(
        array('merch_name', 'require', '机构账号不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('title', 'require', '机构名称不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('merch_password', 'require', '密码不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('describe', 'require', '机构描述不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('linkman', 'require', '联系人不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('contact_mobile', 'require', '联系人电话不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('province', 'require', '省份不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('city', 'require', '城市不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('district', 'require', '区县不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('merch_address', 'require', '机构地址不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
        array('merch_mobile', 'require', '机构电话不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );

    /**
     * 自动完成规则
     * @author youfai.cn <280962430@qq.com>
     */
    protected $_auto = array(
        array('create_time', 'time', self::MODEL_INSERT, 'function'),
    );


     /**
     * 用户登录
     * @author <youfai@youfai.cn>
     */
    public function login($username, $password, $map = null)
    {
        //去除前后空格
        $username = trim($username);

        //匹配登录方式
        if (preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/", $username)) {
            //$map['email'] = array('eq', $username); // 邮箱登陆
        } elseif (preg_match("/^1\d{10}$/", $username)) {
            //$map['mobile'] = array('eq', $username); // 手机号登陆
        } else {
            $map['merch_name'] = array('eq', $username); // 用户名登陆
        }

        $map['status'] = array('eq', 1);
        $user_info     = $this->where($map)->find(); //查找用户
        if (!$user_info) {
            $this->error = '用户不存在或被禁用！';
        } else {
            if (user_md5($password) !== $user_info['merch_password']) {
                $this->error = '密码错误！';
            } else {
                return $user_info;
            }
        }
        return false;
    }

     /**
     * 设置登录状态
     * @author <youfai@youfai.cn>
     */
    public function auto_login($user)
    {
        // 记录登录SESSION和COOKIES
        $auth = array(
            'uid'      => $user['id'],
            'username' => $user['merch_name'],
            'nickname' => $user['merch_name'],
            'avatar'   => $user['logo'],
        );
        session('merch_auth', $auth);
        session('merch_auth_sign', $this->data_auth_sign($auth));
        return $this->is_login();
    }

    /**
     * 检测用户是否登录
     * @return integer 0-未登录，大于0-当前登录用户ID
     * @author <youfai@youfai.cn>
     */
    public function is_login()
    {
        $user = session('merch_auth');
        if (empty($user)) {
            return 0;
        } else {
            if (session('merch_auth_sign') == $this->data_auth_sign($user)) {
                return $user['uid'];
            } else {
                return 0;
            }
        }
    }

     /**
     * 数据签名认证
     * @param  array  $data 被认证的数据
     * @return string       签名
     * @author <youfai@youfai.cn>
     */
    public function data_auth_sign($data)
    {
        // 数据类型检测
        if (!is_array($data)) {
            $data = (array) $data;
        }
        ksort($data); //排序
        $code = http_build_query($data); // url编码并生成query字符串
        $sign = sha1($code); // 生成签名
        return $sign;
    }
}
