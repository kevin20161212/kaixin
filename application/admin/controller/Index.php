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
namespace app\admin\controller;

/**
 * 后台默认控制器
 * @author <youfai@youfai.cn>
 */
class Index extends Admin
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index()
    {
        $index_count['module'] = D('Admin/Module')->count();
        $index_count['addon']  = D('Admin/Addon')->count();
        $index_count['users']  = D('Admin/User')->count();

        // 查询今天注册用户
        $start_date         = strtotime(date('Y-m-d', time())); //今天
        $end_date           = $start_date + 86400;
        $map['create_time'] = array(
            array('egt', $start_date),
            array('lt', $end_date),
        );
        $index_count['today'] = D('Admin/User')->where($map)->count();

        // 查询实时在线用户
        $con                   = array();
        $con['update_time']    = array('gt', time() - 180);
        $con['uid']            = array('gt', 0);
        $index_count['online'] = M('admin_session')->where($con)->count();
        // 模板赋值
        $this->assign('index_count', $index_count);
        $this->assign('meta_title', "首页");
        $this->display();
    }

    /**
     * 删除缓存
     * @author <youfai@youfai.cn>
     */
    public function removeRuntime()
    {
        $file   = new \yfthink\File();
        $result = $file->del_dir(RUNTIME_PATH);
        if ($result) {
            $this->success("缓存清理成功");
        } else {
            $this->error("缓存清理失败");
        }
    }

    public function getProvince()
    {
        
        $province_list = M('province')->select();
        return $province_list;
    }

    /**
     * 获取城市列表
     *
     * @return Ambigous <multitype:\think\static , \think\false, \think\Collection, \think\db\false, PDOStatement, string, \PDOStatement, \think\db\mixed, boolean, unknown, \think\mixed, multitype:, array>
     */
    public function getCity()
    {
        // $address = new Address();
        $province_id = request()->post('province_id', 0);
      
        $city_list = M('city')->where(array('province_id'=>$province_id))->select();
        return $city_list;
    }

    /**
     * 获取区域地址
     */
    public function getDistrict()
    {
        // $address = new Address();
        $city_id = request()->post('city_id', 0);
        $district_list = M('district')->where(array('city_id'=>$city_id))->select();
        return $district_list;
    }

    /**
     * 获取选择地址
     *
     * @return unknown
     */
    public function getSelectAddress()
    {
        $province_list = M('province')->select();
        $province_id = request()->post('province_id', 0);
        $city_id = request()->post('city_id', 0);
        $city_list = M('city')->where(array('province_id'=>$province_id))->select();
        $district_list = M('district')->where(array('city_id'=>$city_id))->select();
        $data["province_list"] = $province_list;
        $data["city_list"] = $city_list;
        $data["district_list"] = $district_list;
        return $data;
    }
}
