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
// use app\common\controller\Controller;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
// class Index extends controller{
class Member extends Baselogin{


		//领取优惠券
		public function getcoupon(){
			$uid = session('wxuser')['id'];
			if (request()->isPost()) {
				$data['uid'] = $uid;
				$data['cid'] = $_POST['id'];
				$data['create_time'] = time();
				$res = M('colligate_mycoupon')->add($data);
				if($res){
					$this->success('领取成功');
				}else{
					$this->error('领取失败');
				}
			}else{
				$time = time();
				$list = D('colligate/colligate_coupon')->order('id desc')->select();
				$mycoupon = M('colligate_mycoupon')->where(array('uid'=>$uid))->field('cid')->select();
				
				foreach($list as $k=>$v){
					if($time > $v['datetime']){
							unset($list[$k]);
						}
					if($mycoupon){
						if(in_array($v['id'],$this->arr_foreach($mycoupon))){
							unset($list[$k]);
						}
					}
				}
				$this->assign('list',$list);
				$this->display();
			}
			
		}

		//我的优惠券
		public function mycoupon(){
			$uid = session('wxuser')['id'];
			$time = time();
			$mycoupon = M('colligate_mycoupon')->where(array('uid'=>$uid))->select();
			foreach($mycoupon as $k=>$v){
				$mycoupon[$k]['zz'] = D('colligate/colligate_coupon')->where(array('id'=>$v['cid']))->find();
			}
			// dump($mycoupon);
			$this->assign('time',$time);
			$this->assign('list',$mycoupon);
			$this->display();
		}


		//会员信息
		public function mydata(){
			$uid = session('wxuser')['id'];
			if (request()->isPost()) {
				$info = D('member/member_list')->save($_POST);
				if($info){
					$this->success('提交成功');
				}else{
					$this->error('提交失败');
				}

			}else{
				$res = D('member/member_list')->where(array('id'=>$uid))->find();

				$this->assign('res',$res);
				$this->display();
			}
			
		}

		//成为房东
		public function apply(){
			$this->display();
		}

		//我的收藏
		public function mycollection(){
			$uid = session('wxuser')['id'];
			if (request()->isPost()) {
				$rid = I('id');
				$re = M('member_collection')->where(array('uid'=>$uid,'rid'=>$rid))->find();
				if($re){
					$aa = M('member_collection')->where(array('id'=>$re['id']))->delete();
					if($aa){
						$this->success('取消收藏成功');
					}else{
						$this->error('取消成功失败');
					}
				}else{
					$data['uid'] = $uid;
					$data['rid'] = $rid;
					$aa = M('member_collection')->add($data);
					if($aa){
						$this->success('收藏成功');
					}else{
						$this->error('成功失败');
					}
				}
			}else{
				
				$res = M('member_collection')->where(array('uid'=>$uid))->order('id desc')->select();
				$time = date('Y-m-d',time());
	        	$time = explode('-',$time);
				if($res){
					foreach($res as $k=>$v){
						$info[] = D('room/room_list')->where(array('id'=>$v['rid']))->find();
					}
					foreach($info as $kk=>$vv){
						$info[$kk]['dizi'] =D('room/room_label')->where(array('id'=>$vv['cityid']))->getField('title');
						$info[$kk]['picture'] =  get_cover(explode(',',$vv['picture'])[0]);
						$info[$kk]['headimgurl'] = D('member/member_list')->where(array('id'=>$vv['uid']))->getField('headimgurl');
						$dateprice = json_decode($vv['dateprice'],true);
			            foreach($dateprice as $kks=>$vv){
			                if($kks == $time[0]){
			                    foreach($vv as $ks=>$vs){
			                        if($ks == $time[1]){
			                            foreach($vs as $kvs=>$vvs){
			                                if($kvs == $time[2]){
			                                    $info[$kk]['price']  = $vvs['total'];
			                                }
			                            }
			                        }
			                    }
			                }
			            }
					}
				}
				$this->assign('info',$info);
				$this->display();
			}
		}

		//服务协议
		public function explain(){
			$content = M('colligate_article')->where(array('id'=>2))->getField('content');
			$this->assign('content',$content);
			$this->display();
		}


		//我的行程
		public function triplist(){

			$uid = session('wxuser')['id'];
			// echo $uid;die;
			$time = date('Ymd',time());
			$map = array();
			// $map['status.uid'] = $uid;
			


			$list = D('order/order_list')->where(array('uid'=>$uid))->select();
			foreach($list as $k=>$v){
				$live_time = explode(',',$v['live_time']);
				reset($live_time);
				$startd = str_replace('-','', current($live_time));
                $endd = str_replace('-','',end($live_time));
                // dump($v['id'].'-----'.$time.'------'.$endd.'<br/>');
                if($time >=$startd){
                	// echo $v['id'].'+_+++++++++++<br/>';
                	if($time >= $endd){
                		if($v['status'] ==2 &&  $v['is_live'] == 2){
	                		D('order/order_list')->where(array('id'=>$v['id']))->save(array('is_live'=>3));
	                	}
                	}elseif($v['status'] ==2 && $v['is_live'] == 1){
                		D('order/order_list')->where(array('id'=>$v['id']))->save(array('is_live'=>2));
                	}
                }
			}

			$p = $_POST["p"] ?: 1;
			$type = I('type','1');
			if($type == 1){
				//待入住
				// $orderlist = D('order/order_list')->where($map)->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
				$orderlist =  D('order/order_list')->table('yf_order_list stats, yf_room_list profile')->where('stats.room_id = profile.id and stats.uid = '.$uid.' and stats.is_live=1')->field('stats.*,profile.title,profile.picture')->order('stats.id desc' )->page($p, C('ADMIN_PAGE_ROWS'))->select(); 
			}else if($type == 2){
				//已入住
				// $map['is_live'] = 2;
				// $map['status'] = 2;
				// $orderlist = D('order/order_list')->where($map)->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
				$orderlist =  D('order/order_list')->table('yf_order_list stats, yf_room_list profile')->where('stats.room_id = profile.id and stats.uid = '.$uid.' and stats.is_live=2 and stats.status = 2 ')->field('stats.*,profile.title,profile.picture')->order('stats.id desc' )->page($p, C('ADMIN_PAGE_ROWS'))->select(); 
			}else if($type == 3){
				//已完成
				// $map['is_live'] = 3;
				// $map['status'] = 2;
				// $orderlist = D('order/order_list')->where($map)->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
				$orderlist =  D('order/order_list')->table('yf_order_list stats, yf_room_list profile')->where('stats.room_id = profile.id and stats.uid = '.$uid.' and stats.status = 2 and (stats.is_live=3 OR stats.is_live=4)')->field('stats.*,profile.title,profile.picture')->order('stats.id desc' )->page($p, C('ADMIN_PAGE_ROWS'))->select(); 
			}
			// dump($orderlist);die;
			if($orderlist){
				foreach($orderlist as $kt=>$vt){
					$orderlist[$kt]['picture'] = get_cover(explode(',',$vt['picture'])[0]);
					$live_time = explode(',',$vt['live_time']);
					reset($live_time);
					$orderlist[$kt]['live_time'] = current($live_time).' / '.end($live_time);
				}
				ajaxReturn(array('list'=>$orderlist),1);
			}else{
				 ajaxReturn(array('list'=>[]),2);
			}
		}

		//订单详情
		public function tripdetail($id){
			$order=D('order/order_list')->where(array('id'=>$id))->find();
			$live_time = explode(',',$order['live_time']);
			reset($live_time);
			$order['live_time'] = current($live_time).' / '.end($live_time);
			$info = D('room/room_list')->where(array('id'=>$order['room_id']))->find();
			$member = D('member/member_list')->where(array('id'=>$info['uid']))->find();
			$member['fycount'] = D('room/room_list')->where(array('uid'=>$member['id']))->count();
			$member['content'] = M('colligate_article')->where(array('id'=>1))->getField('content');
			     
			$member['pjcount'] = M('order_evaluate')->where(array('rid'=>$order['room_id']))->count();
			$info['picture'] = get_cover(explode(',',$info['picture'])[0]);
			$province = M('province')->where(array('province_id'=>$info['province']))->getField('province_name');
            $city = M('city')->where(array('city_id'=>$info['city']))->getField('city_name');
            $district = M('district')->where(array('district_id'=>$info['district']))->getField('district_name');
            $info['address'] = $province.' '.$city.' '.$district.' '.$info['address'];
            $this->assign('member',$member);
			$this->assign('info',$info);
			$this->assign('order',$order);
			$this->display();
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

		// array_multisort(array_column($arr,'age'),SORT_DESC,$arr);   数组中根据某个值进行排序
		// 其中  array_column(数组,数组中的某个键值)  从多维数组中取出某个键值的一列  返回一个一维数组；
		// array_multisort(数组(一维数组),排序方式(SOTR_ASC,SOTR_DESC),其他数组(可以是二维的))

		/**  
		 * 分页及显示函数  
		 * $countpage 全局变量，照写  
		 * $url 当前url  
		 */    
		public function show_array($countpage,$url){   

		     $page=empty($_GET['page'])?1:$_GET['page'];    
		     if($page > 1){    
		        $uppage=$page-1;    
		    
		     }else{    
		        $uppage=1;    
		     }    
		    
		     if($page < $countpage){    
		        $nextpage=$page+1;    
		    
		     }else{    
		            $nextpage=$countpage;    
		     }    
		           
		        $str='<div style="border:1px; width:300px; height:30px; color:#9999CC">';    
		    $str.="<span>共  {$countpage}  页 / 第 {$page} 页</span>";    
		    $str.="<span><a href='$url?page=1'>   首页  </a></span>";    
		    $str.="<span><a href='$url?page={$uppage}'> 上一页  </a></span>";    
		    $str.="<span><a href='$url?page={$nextpage}'>下一页  </a></span>";    
		    $str.="<span><a href='$url?page={$countpage}'>尾页  </a></span>";    
		    $str.='</div>';    
		    return $str;    
		}

		public function housedetail(){
			$id = I('id');
			if (request()->isPost()) {
				$p = $_POST["p"] ?: 1;
				$evaluate = M('order_evaluate')->where(array('fid'=>$id))->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
				foreach($evaluate as $k=>$v){
					$evaluate[$k]['member'] = D('member/member_list')->where(array('id'=>$v['uid']))->field('nickname,headimgurl')->find();
					$imglist= unserialize($v['imglist']);

					foreach($imglist as $kk=>$vv){
					 	$imgs[$k][]= get_cover($vv); 
					}
					$evaluate[$k]['imglist']=$imgs[$k];
					$evaluate[$k]['fenzhi'] = sprintf("%.1f",($v['sheshi']+$v['weisheng']+$v['taidu']+$v['zhenshi'])/4);
					$evaluate[$k]['create_time'] = date('Y-m-d',$v['create_time']);
				}
				if($evaluate){
					ajaxReturn(array('list'=>$evaluate),1);
				}else{
					ajaxReturn(array('list'=>[]),2);
				}
				
			}else{
				
				$member = D('member/member_list')->where(array('id'=>$id))->find();
				$member['fycount'] = D('room/room_list')->where(array('uid'=>$id))->count(); 
				$member['pjcount'] = M('order_evaluate')->where(array('fid'=>$id))->count();
				$room = D('room/room_list')->where(array('uid'=>$id))->select();
				$time = date('Y-m-d',time());
		        $time = explode('-',$time);
				foreach($room as $k=>$v){
					$room[$k]['picture'] =  get_cover(explode(',',$v['picture'])[0]);
					$member['orcount'] +=D('order/order_list')->where(array('room_id'=>$v['id'],'status'=>2))->count();
					$dateprice = json_decode($v['dateprice'],true);
		            foreach($dateprice as $kks=>$vv){
		                if($kks == $time[0]){
		                    foreach($vv as $ks=>$vs){
		                        if($ks == $time[1]){
		                            foreach($vs as $kvs=>$vvs){
		                                if($kvs == $time[2]){
		                                    $room[$k]['price']  = $vvs['total'];
		                                }
		                            }
		                        }
		                    }
		                }
		            }
		            $room[$k]['city'] = M('city')->where(array('city_id'=>$v['city']))->getField('city_name');
	            	$room[$k]['district'] = M('district')->where(array('district_id'=>$v['district']))->getField('district_name');
				}
				$this->assign('room',$room);
				$this->assign('member',$member);
				$this->display();
			}
		}


		//取消订单
		public function delorder(){
			$a = array(
				'11'=>'11',
				'22'=>'22',
				'33'=>'33',
				'44'=>'44',
				'55'=>'55',
				'66'=>'66',
				'77'=>'77',
				'88'=>'88',
				'99'=>'99',
				'111'=>'111',
				'222'=>'222',
				'333'=>'333',
				'444'=>'444',
				'555'=>'555',
				'666'=>'666',
				'777'=>'777',
				'888'=>'888',
				'999'=>'999',
			);
			$b = $this->page_array(5,2,$a,0);
			dump($b);
		}


		//二维数组变一维数组
		public  function arr_foreach($arr)
       	{
          static $tmp=array(); 
          if (!is_array ($arr))
          {
             return false;
          }
          foreach ($arr as $val )
          {
             if (is_array ($val))
             {
                $this->arr_foreach ($val);
             }
             else
             {
                $tmp[]=$val;
             }
          }
          return $tmp;
       	} 

}

?>