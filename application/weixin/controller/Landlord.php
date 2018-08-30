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
class Landlord extends Baselogin{


	//我的房源
	public function myroom(){
		$uid = session('wxuser')['id'];
		$list = D('room/room_list')->where(array('uid'=>$uid))->order('id desc')->select();
		foreach($list as $k => $v){
			$list[$k]['picture'] = get_cover(explode(',',$v['picture'])[0]);
		}
		$this->assign('list',$list);
		$this->display();
	}

	public function member(){
		
		$this->assign('member',session('wxuser'));
		$this->display();
	}
	
	
	public function statistics(){
		$uid = session('wxuser')['id'];
		$room = D('room/room_list')->where(array('uid'=>$uid))->order('id desc')->select();
		foreach($room as $k=>$v){
			$total = D('order/order_list')->where(array('status'=>2,'room_id'=>$v['id']))->sum('su_total');
			$room[$k]['total'] = $total?:'0.00';
			$roomid .= $v['id'].',';
			$su_total +=D('order/order_list')->where(array('status'=>2,'room_id'=>$v['id']))->sum('su_total');
		}
		// if (request()->isPost()) {
		// 	$map['create_time'] = array('between',array($start, $end));
		// 	$list = D('order/order_list')->where($data)->order('id desc')->select();
		// 	if($list){
		// 		ajaxReturn(array('list'=>$list),1);
		// 	}else{
		// 		ajaxReturn(array('list'=>[]),2);
		// 	}
		// }else{
		
	
		$this->assign('su_total',$su_total);
		$this->assign('room',$room);
		$this->display();
		// }
	}

	public function statdetail(){
		

		if (request()->isPost()) {
			$map = array();
			$da = array();
			$da['id'] = 'desc';
			$rid = I('id');
			$start = I('s');
			$end = I('e');
			if(!empty($start) && !empty($end)){
				$map['create_time'] = array('between',array(strtotime($start), strtotime($end.' 23:59:59')));
			}
			$shouyi = I('tsort');//收益
			$times = I('ssort');//时间
			if(!empty($times)){
			
				if($times == '2'){
					$da['create_time'] = 'desc';
				}else if($times == '1'){
					$da['create_time'] = 'asc';
				}
				unset($da['id']);
				unset($da['su_total']);
			}

			if(!empty($shouyi)){
				if($shouyi == 2){
					$da['su_total'] = 'desc';
				}else if($shouyi == 1){
					$da['su_total'] = 'asc';
				}
				unset($da['id']);
				unset($da['create_time']);
			}
			$map['room_id'] = $rid;
			$map['status'] = 2;
			
			$list = D('order/order_list')->where($map)->order($da)->select();
			foreach($list as $k=>$v){
				$live_time = explode(',',$v['live_time']);
				reset($live_time);
				$list[$k]['live'] = current($live_time).' 至 '.end($live_time);
			}
			$p = $_POST["page"] ?: 1;
			$list = $this->page_array('10',$p,$list,0);
			if($list){
				ajaxReturn(array('list'=>$list),1);
			}else{
				ajaxReturn(array('list'=>[]),2);
			}
		}else{
			$id = I('id');
			$total = D('order/order_list')->where(array('status'=>2,'room_id'=>$id))->sum('su_total');
			$this->assign('total',$total);
			$this->assign('id',$id);
			$this->display();
		}
	}

	/**  
		 * 数组分页函数  核心函数  array_slice  
		 * 用此函数之前要先将数据库里面的所有数据按一定的顺序查询出来存入数组中  
		 * $count   每页多少条数据  
		 * $page   当前第几页  
		 * $array   查询出来的所有数组  
		 * order 0 - 不变     1- 反序  
		 */   
		public function page_array($count,$page,$array,$order){    
		    
		    global $countpage; #定全局变量    
		    
		    $page=(empty($page))?'1':$page; #判断当前页面是否为空 如果为空就表示为第一页面     
		    
		    $start=($page-1)*$count; #计算每次分页的开始位置    
		    
		    if($order==1){    
		    
		      $array=array_reverse($array);    
		    
		    }       
		    
		    $totals=count($array);      
		    
		    $countpage=ceil($totals/$count); #计算总页面数    
		    
		    $pagedata=array();    
		    
		    $pagedata=array_slice($array,$start,$count);    
		    
		    return $pagedata;  #返回查询数据    
		}
}