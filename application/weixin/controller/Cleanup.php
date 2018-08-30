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

namespace app\weixin\controller;
use app\weixin\controller\Baselogin;
use app\wechat\stores\service\WechatService;
// use app\common\controller\Controller;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
// class Index extends controller{
class Cleanup extends Baselogin{


	//我的房源
	public function jindu(){
		if (request()->isPost()) {
			$uid = 5;//session('wxuser')['id'];
			$p = $_POST["page"] ?: 1;
			$map['status'] =I('status')?:1;
			$map['uid'] = $uid;
			$list = M('room_renwu')->where($map)->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
			foreach($list as $k=>$v){
				$renwu = M('room_apply')->table('yf_room_apply a,yf_room_list b')->where('a.rid = b.id and a.id = '.$v['rid'])->field('a.*,b.title,b.picture')->find();
				$renwu['create_time'] = date("Y-m-d",$renwu['create_time']);
				$renwu['picture'] = get_cover(explode(',', $renwu['picture'])[0]);
				$list[$k]['renwu'] = $renwu;
				$list[$k]['username'] =  D("colligate/ColligateList")->where(array('uid'=>$v['uid']))->getField('username');
			}
			
			if($list){
				ajaxReturn(array('list'=>$list),1);
			}else{
				ajaxReturn(array('list'=>[]),2);
			}
		}else{
			$this->display();
		}
		
	}

	public function member(){
		
		$this->assign('member',session('wxuser'));
		$this->display();
	}

	public function redetails(){
		$id = I('id');
		$apply= M('room_apply')->table('yf_room_apply a,yf_room_list b')->where('a.rid = b.id and a.id = '.$id)->field('a.*,b.title,b.picture,b.longitude,b.latitude,b.province,b.city,b.district,b.address')->find();
		$apply['picture'] = get_cover(explode(',', $apply['picture'])[0]);
		$apply['create_time'] = date("Y-m-d",$apply['create_time']);
		$province = M('province')->where(array('province_id'=>$apply['province']))->getField('province_name');
        $city = M('city')->where(array('city_id'=>$apply['city']))->getField('city_name');
        $district = M('district')->where(array('district_id'=>$apply['district']))->getField('district_name');
        $apply['address'] = $province.' '.$city.' '.$district.' '.$apply['address'];
		$grouping = D('colligate/Colligate_grouping')->where(array('id'=>$apply['groupid']))->find();
		if($apply['type'] == 1){
			$list = explode(',',$grouping['baojie']);
		}else{
			$list = explode(',',$grouping['weixiu']);
		}
		foreach($list as $k=>$v){
			$lists[] = D("colligate/ColligateList")->where(array('id'=>$v))->find();
		}
		$this->assign('username',I('username'));
		$this->assign('status',I('status'));
		$this->assign('lists',$lists);
		$this->assign('apply',$apply);
		$this->display();
	}




	
}