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
class Index extends Baselogin{


    // public function _initialize(){

    //    $uid =  session('wxuser');
    // }
	public function index(){
        // dump(session('wxuser'));		
        // echo '333'; 
		$this->display();
	}

	public function getindex(){
		$list = array();

		//用户信息
        $list['member'] = session('wxuser');
        // $list['member']['nickname'] = '高亮'; 
        // $list['member']['headimgurl'] = 'http://thirdwx.qlogo.cn/mmopen/vi_32/x0TlROHrAwia77AyyCW9dus3NF6exuF4UWZxpqxjHIYH3kxyQQ4VA94NNW8pD5SOpMJJdAqKnF3rOdVypialcvuw/132'; 
        $is_fd = D('member/member_list')->where(array('id'=>session('wxuser')['id']))->getField('is_fd');
        if($is_fd == 0){
            $is_type = D('colligate/colligate_list')->where(array('uid'=>session('wxuser')['id']))->find();
            if($is_type){
                $list['is_type'] =$is_type['type'];
            }else{
                $list['is_type'] = '0';
            }
        }else{
            $list['is_type'] = '4';
        }
		//首页banner
		$list['slide'] = D('colligate/cms_slide')->where(array('status'=>1))
            					->order('sort desc,id desc')
            					->select();
        
        foreach($list['slide'] as $ks=>$vs){
        	$list['slide'][$ks]['thumb']=get_cover($vs['thumb']);
        }

        //热门活动
        $list['activity'] = D('colligate/colligate_activity')->where(array('status'=>1))
            					->order('sort desc,id desc')
            					->select();
        foreach($list['activity'] as $ks=>$vs){
        	$list['activity'][$ks]['cover']=get_cover($vs['cover']);
        }

        //热门城市
        $list['label'] = D('room/room_label')->where(array('type'=>1))->select();
        foreach($list['label'] as $ks=>$vs){
            $list['label'][$ks]['thumb']=get_cover($vs['thumb']);
        }

        //房源列表
        $list['list'] = D('room/room_list')->field('id,uid,picture,cityid,title')->order('sort desc,id desc')->limit(10)->select();
        foreach($list['list'] as $k=>$v){
            $member = D('member/member_list')->where(array('id'=>$v['uid']))->field('nickname,headimgurl')->find();
            $list['list'][$k]['nickname'] = $member['nickname'];
            $list['list'][$k]['headimgurl'] = $member['headimgurl'];
            $list['list'][$k]['city'] = D('room/room_label')->where(array('id'=>$v['cityid']))->getField('title');
            $list['list'][$k]['picture'] = get_cover(explode(',',$v['picture'])[0]);
        }
        // dump($list);die;
        ajaxReturn($list,1);
	}

    //获取所有区域
    public function getletter(){
        $label = D('room/room_label')->select();
        $letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        foreach($letter as $k=>$v){
            $letters[$v]= D('room/room_label')->where(array('letter'=>$v))->field('id,title')->select();
        }
        ajaxReturn(array('list'=>array_filter($letters)),1);
    }

    //优惠券列表
    public function mycoupon(){
        $uid = session('wxuser')['id'];
        $list = M('colligate_lqcoupon')->where(array('uid'=>$uid))->select();

        foreach($list as $k=>$v){
            $list[$k]['zz'] = D("colligate/colligate_coupon")->where(array('id'=>$v['cid']))->find();
        }
        $this->assign('list',$list);
        $this->display();
    }

    //热门城市下属民宿
    public function getminsulist(){
        $map = array();

        $cid = I('cid');
        $map['cityid'] = $cid;
        $startd = I('startD');
        $endd = I('endD');

        if(I('ren')){
             $map['canlive'] = array('egt',I('ren'));
        }
        // $p  = !empty($_GET["p"]) ? $_GET['p'] : 1;
        
        // $start = '2018-06-15';//I('start');
        // $end = '2018-06-18';//I('end');
        $time = date('Y-m-d',time());
        $time = explode('-',$time);
        // $list = D('room/room_list')->where(array('cityid'=>$cid))->page($p, C('ADMIN_PAGE_ROWS'))->order('sort desc,id desc')->select();
        $list = D('room/room_list')->where($map)->order('sort desc,id desc')->select();
     
        foreach($list as $k=>$v){
            $list[$k]['qu'] =D('room/room_label')->where(array('id'=>$v['cityid']))->getField('title');
            $list[$k]['picture'] = get_cover(explode(',',$v['picture'])[0]);
            $list[$k]['headimgurl'] = D('member/member_list')->where(array('id'=>$v['uid']))->getField('headimgurl');
            //获取今日价格
            $dateprice = json_decode($v['dateprice'],true);
           
            foreach($dateprice as $kk=>$cc){
                if($kk == $time[0]){
                    foreach($cc as $kss=>$vss){
                        if($kss == $time[1]){
                            foreach($vss as $kvs=>$vvs){
                                if($kvs == $time[2]){
                                    $list[$k]['price']  = $vvs['total'];
                                }
                            }
                        }
                    }
                }
                foreach($cc as $kv=>$vv){
                    foreach($vv as $bb => $dd){
                        if(strlen($kv) == 1){
                            $kv = '0'.$kv;
                        }
                        if(strlen($bb) == 1){
                            $bb = '0'.$bb;
                        }
                        $data[$k][] = array_merge(array('time'=>$kk.$kv.$bb,'type'=>$dd['type'],'total'=>$dd['total']));
                    }
                }
              if($startd != '入住日期' && $endd != '退房日期'){
                    $startd = str_replace('-','',$startd);
                    $endd = str_replace('-','',$endd);
                   
                    
                    foreach($data as $kg=>$vg){
                        $a = false;
                        foreach($vg as $vvg=>$kkg){
                            
                            if(($startd <= $kkg['time']) && ($endd >= $kkg['time'])){
                                $a = true;
                            }
                        }
                        if(!$a){
                            unset($list[$k]);
                        }
                    }
                
                }
                
            }
        }
        if($list){
             ajaxReturn(array('list'=>$list),1);
        }else{
             ajaxReturn($list,2);
        }
    }

    //订房搜索列表
    public function getroomlist(){
        $map = array();
        $cid = I('cid');
        $city = I('city');
        if($cid == 0){
            $cid = D('room/room_label')->where(array('title'=>$city))->getField('id');
        }
        $map['cityid'] = $cid;
        $startd = I('startD');
        $endd = I('endD');
        if(I('ren')){
             $map['canlive'] = array('egt',I('ren'));
        }
        $time = date('Y-m-d',time());
        $time = explode('-',$time);
        $tab = D('room/room_tab')->select();
        $qb = array(array('id'=>'0','title'=>'全部房源'));
        $tab = array_merge($qb,$tab);
        foreach($tab as $kt=>$vt){
            if($vt['id'] != 0){
                $map['tabid'] =$vt['id']; 
            }
            $map['status'] = 1;
            $tab[$kt]['zz'] = D('room/room_list')->where($map)->order('sort desc,id desc')->select();
        }
       
        foreach($tab as $kh => $vh){

            foreach($vh['zz'] as $kb=>$vb){
                unset($tab[$kh]['zz'][$kb]['brightspot']);
                $tab[$kh]['zz'][$kb]['qu'] =D('room/room_label')->where(array('id'=>$vb['cityid']))->getField('title');
                $tab[$kh]['zz'][$kb]['picture'] = get_cover(explode(',',$vb['picture'])[0]);
                $tab[$kh]['zz'][$kb]['headimgurl'] = D('member/member_list')->where(array('id'=>$vb['uid']))->getField('headimgurl');
                $province = M('province')->where(array('province_id'=>$vb['province']))->getField('province_name');
                $city = M('city')->where(array('city_id'=>$vb['city']))->getField('city_name');
                $district = M('district')->where(array('district_id'=>$vb['district']))->getField('district_name');
                $tab[$kh]['zz'][$kb]['address'] = $province.' '.$city.' '.$district;
                $dateprice = json_decode($vb['dateprice'],true);
                foreach($dateprice as $kk=>$cc){
                    if($kk == $time[0]){
                        foreach($cc as $kss=>$vss){
                            if($kss == $time[1]){
                                foreach($vss as $kvs=>$vvs){
                                    if($kvs == $time[2]){
                                        $tab[$kh]['zz'][$kb]['price']  = $vvs['total'];
                                    }
                                }
                            }
                        }
                    }
                    foreach($cc as $kv=>$vv){
                        foreach($vv as $bb => $dd){
                            if(strlen($kv) == 1){
                                $kv = '0'.$kv;
                            }
                            if(strlen($bb) == 1){
                                $bb = '0'.$bb;
                            }
                            $data[$kh][$kb][] = array_merge(array('time'=>$kk.$kv.$bb,'type'=>$dd['type'],'total'=>$dd['total']));
                        }
                    }
                }
               
            }
        }
        // dump($tab);die;
        if($startd != '入住日期' && $endd != '退房日期'){
            $startd = str_replace('-','',$startd);
            $endd = str_replace('-','',$endd);
            foreach($data as $qq=>$ww){
                foreach($ww as $ee=>$rr){
                    $a = false;
                    foreach($rr as $tt=>$yy){
                        if(($startd <= $yy['time']) && ($endd >= $yy['time'])){
                            $a = true;
                        }                        
                    }
                    if($a == false){
                        // dump($tab[$qq]['zz'][$ee]);
                        unset($tab[$qq]['zz'][$ee]);
                    }
                   
                }
                
            }
        }
      
       //    foreach($tab[$kt]['zz'] as $k=>$v){
       //          $tab[$kt]['zz'][$k]['qu'] =D('room/room_label')->where(array('id'=>$v['cityid']))->getField('title');
       //          $tab[$kt]['zz'][$k]['picture'] = get_cover(explode(',',$v['picture'])[0]);
       //          $tab[$kt]['zz'][$k]['headimgurl'] = D('member/member_list')->where(array('id'=>$v['uid']))->getField('headimgurl');
       //          $province = M('province')->where(array('province_id'=>$v['province']))->getField('province_name');
       //          $city = M('city')->where(array('city_id'=>$v['city']))->getField('city_name');
       //          $district = M('district')->where(array('district_id'=>$v['district']))->getField('district_name');
       //          $tab[$kt]['zz'][$k]['address'] = $province.' '.$city.' '.$district;
               
       //          //获取今日价格
       //          $dateprice = json_decode($v['dateprice'],true);
              
       //          foreach($dateprice as $kk=>$cc){
       //              if($kk == $time[0]){
       //                  foreach($cc as $kss=>$vss){
       //                      if($kss == $time[1]){
       //                          foreach($vss as $kvs=>$vvs){
       //                              if($kvs == $time[2]){
       //                                  $tab[$kt]['zz'][$k]['price']  = $vvs['total'];
       //                              }
       //                          }
       //                      }
       //                  }
       //              }
       //              foreach($cc as $kv=>$vv){
       //                  foreach($vv as $bb => $dd){
       //                      if(strlen($kv) == 1){
       //                          $kv = '0'.$kv;
       //                      }
       //                      if(strlen($bb) == 1){
       //                          $bb = '0'.$bb;
       //                      }
       //                      $data[$k][] = array_merge(array('time'=>$kk.$kv.$bb,'type'=>$dd['type'],'total'=>$dd['total']));
       //                  }
       //              }

       //            if($startd != '入住日期' && $endd != '退房日期'){
       //                  $startd = str_replace('-','',$startd);
       //                  $endd = str_replace('-','',$endd);
       //                  foreach($data as $kg=>$vg){
       //                      $a = false;
       //                      foreach($vg as $vvg=>$kkg){
                                
       //                          if(($startd <= $kkg['time']) && ($endd >= $kkg['time'])){
       //                              $a = true;
       //                          }
       //                      }
       //                      if($a == false){
       //                          dump($tab[$kt]['zz'][$k]);
       //                          // unset($tab[$kt]['zz'][$k]);
       //                      }
       //                  }
       //              }
       //          }
       //      }



        // dump($tab);die;
       if($tab){
            exit(json_encode(array('list'=>$tab)));
             // ajaxReturn(array('list'=>$tab),1);
        }else{
             ajaxReturn(array('list'=>$tab),2);
        }
              
    }



    public function detail(){
        $uid = session('wxuser')['id'];
        $id = I('id');
        $time = date('Y-m-d',time());
        $time = explode('-',$time);
        $info = D('room/room_list')->where(array('id'=>$id))->find();
        
        $member = D('member/member_list')->where(array('id'=>$info['uid']))->find();

        $member['fycount'] = D('room/room_list')->where(array('uid'=>$member['id']))->count();
        $member['pjcount'] = M('order_evaluate')->where(array('rid'=>$id))->count();

        $dateprice = json_decode($info['dateprice'],true);
        foreach($dateprice as $kks=>$vv){
            if($kks == $time[0]){
                foreach($vv as $ks=>$vs){
                    if($ks == $time[1]){
                        foreach($vs as $kvs=>$vvs){
                            if($kvs == $time[2]){
                                $info['price']  = $vvs['total'];
                            }
                        }
                    }
                }
            }
        }
        $len = mb_strlen(preg_replace(array("'<(.*?)>'is","'&nbsp;'","'\n\r'","' '","'\r'","'\n'"),'',$info['brightspot']),'UTF-8');
        if($len >= 200){
            $info['brightspot'] = mb_substr($info['brightspot'], 0,200, 'utf-8').'.....';
        }

        
        $service = D('room/room_service')->limit(3)->select();
        foreach($service as $k=>$v){
            $service[$k]['thumb'] = get_cover($v['thumb']);
        }
        $facilities=M('room_facilities')->where(array('pid'=>0))->field('id,title,pid')->select();
        foreach($facilities as $k=>$v){
            $facilities[$k]['zz'] = M('room_facilities')->where(array('pid'=>$v['id']))->limit(3)->field('id,title,pid,thumb')->select();
            foreach($facilities[$k]['zz'] as $kz=>$vz){
                $facilities[$k]['zz'][$kz]['thumb'] = get_cover($vz['thumb']);
            }
          
        }
        $province = M('province')->where(array('province_id'=>$info['province']))->getField('province_name');
        $city = M('city')->where(array('city_id'=>$info['city']))->getField('city_name');
        $district = M('district')->where(array('district_id'=>$info['district']))->getField('district_name');
        $info['weizhi'] = $province.$city.$district.$info['address'];
        $room_service = D('room/room_service')->select();
        $info['picture'] = explode(',',$info['picture']);
        foreach($info['picture'] as $kp=>$vp){
           $info['picture'][$kp]=get_cover($vp);
        }
        $info['videoid'] = get_cover($info['videoid']);
        $info['facilities'] =$this->arr_foreach(array_merge(json_decode($info['facilities'],true)));
        $info['shoucang'] = M('member_collection')->where(array('uid'=>$uid,'rid'=>$id))->count();
        
        $valuate = M('order_evaluate')->where(array('rid'=>$id))->order('id desc')->select();
        $count = M('order_evaluate')->where(array('rid'=>$id))->count();
        foreach($valuate as $k=>$v){
          
            $valuate[$k]['fenzhi'] = sprintf("%.1f",($v['sheshi']+$v['weisheng']+$v['taidu']+$v['zhenshi'])/4);


            $valuate[$k]['member'] =D('member/member_list')->where(array('id'=>$v['uid']))->field('nickname,headimgurl')->find();
            $sheshi+=$v['sheshi'];
            $weisheng += $v['weisheng'];
            $taidu += $v['taidu'];
            $zhenshi += $v['zhenshi'];
         
        }
        $fen = $zhenshi+$taidu+$weisheng+$sheshi;
        $zhi = $fen/($count*4);
        $fenzhi = sprintf("%.1f",$zhi);
        if($fenzhi == '0.0'){
            $fenzhi = '5.0';
        }
        $this->assign('member',$member);
        $this->assign('fenzhi',$fenzhi);
        $this->assign('valuate',$valuate);
        $this->assign('facilities',$facilities);
        $this->assign('service',$service);
        $this->assign('info',$info);
        $this->display();
    }

    public function detailinfo($id){
        $info = D('room/room_list')->where(array('id'=>$id))->find();
        $service = D('room/room_service')->select();
        foreach($service as $k=>$v){
            $service[$k]['thumb'] = get_cover($v['thumb']);
        }
        $facilities=M('room_facilities')->where(array('pid'=>0))->field('id,title,pid')->select();
        foreach($facilities as $k=>$v){
            $facilities[$k]['zz'] = M('room_facilities')->where(array('pid'=>$v['id']))->field('id,title,pid,thumb')->select();
            foreach($facilities[$k]['zz'] as $kz=>$vz){
                $facilities[$k]['zz'][$kz]['thumb'] = get_cover($vz['thumb']);
            }
          
        }
        $info['facilities'] =$this->arr_foreach(array_merge(json_decode($info['facilities'],true)));

        $this->assign('facilities',$facilities);
        $this->assign('service',$service);
        $this->assign('info',$info);
        $this->display();
    }

    //热门城市房源列表
    public function rmfylist(){
        $id = I('id');
        $list = D('room/room_list')->where(array('cityid'=>$id))->order('id desc')->select();
    }

    //活动详情
    public function actdetail($id){
       
       $info = D("colligate/colligate_activity")->where(array('id'=>$id))->find();
       $this->assign('info',$info);
       $this->display();

    }



    public  function arr_foreach($arr){
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