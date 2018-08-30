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
class Order extends Baselogin{


    //提交订单
    public function orderdetails(){
        $uid = session('wxuser')['id'];
        if (request()->isPost()) {
           
           
            $room_id = I('room_id');
            $live_times = I('live_time');
            $night = I('night');
            $live_time = explode(',',$live_times);
            reset($live_time);
            $data['start'] = current($live_time);
            $data['end'] = end($live_time);
            $res = D('room/room_list')->where(array('id'=>$room_id))->find();
            $res['picture'] = get_cover(explode(',',$res['picture'])[0]);
            $dateprice = json_decode($res['dateprice'],true);
            $datas = $this->gettime($dateprice);
            array_pop($live_time);
            foreach($datas as $dv=>$av){
                if(in_array($av['time'],$live_time)){
                    $data['total'] += $av['total'];
                }
            }
            $member = D('member/member_list')->where(array('id'=>$uid))->find();
            $time = time();
            $mycoupon = M('colligate_mycoupon')->where(array('uid'=>$uid))->select();
            foreach($mycoupon as $k=>$v){
                $mycoupon[$k]['zz'] = D('colligate/colligate_coupon')->where(array('id'=>$v['cid']))->find();
                if($mycoupon[$k]['status'] == 2){
                     unset($mycoupon[$k]);
                }else if($time > $mycoupon[$k]['zz']['datetime']){
                    unset($mycoupon[$k]);
                }             
            }
            $member = D('member/member_list')->where(array('id'=>$uid))->find();
            $this->assign('live_times',$live_times);
            $this->assign('member',$member);
            $this->assign('time',$time);
            $this->assign('mycoupon',$mycoupon);
            $this->assign('data',$data);
            $this->assign('res',$res);
            $this->assign('member',$member);
            $this->assign('night',$night);
        }
        $this->display();

        
    }

    public function pinglunlist(){
        $id = I('id');
        if (request()->isPost()) {
            $p = $_POST["p"] ?: 1;
            $evaluate = M('order_evaluate')->where(array('rid'=>$id))->order('id desc')->page($p, C('ADMIN_PAGE_ROWS'))->select();
           
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
            $valuate = M('order_evaluate')->where(array('rid'=>$id))->order('id desc')->select();
            
            $count = M('order_evaluate')->where(array('rid'=>$id))->count();
            foreach($valuate as $k=>$v){
                $sheshi+=$v['sheshi'];
                $weisheng += $v['weisheng'];
                $taidu += $v['taidu'];
                $zhenshi += $v['zhenshi'];
             
            }
            $fen = $zhenshi+$taidu+$weisheng+$sheshi;
            $zhi = $fen/($count*4);
            $data['zf'] = sprintf("%.1f",$zhi);
            if($data['zf'] == '0.0'){
                $data['zf'] = '5.0';
            }
          
            $data['sheshi'] = sprintf("%.1f",$sheshi/$count)== '0.00'?'5.00':sprintf("%.1f",$sheshi/$count);
            $data['weisheng'] = sprintf("%.1f",$weisheng/$count)== '0.00'?'5.00':sprintf("%.1f",$weisheng/$count);
            $data['taidu'] = sprintf("%.1f",$taidu/$count)== '0.00'?'5.00':sprintf("%.1f",$taidu/$count);
            $data['zhenshi'] = sprintf("%.1f",$zhenshi/$count)== '0.00'?'5.00':sprintf("%.1f",$zhenshi/$count);
            $this->assign('data',$data);
            $this->assign('id',$id);
            $this->display();
        }
    }

    public function payment(){
        $uid = session('wxuser')['id'];
        $post = I('post.','');
        $live_time = explode(',',$post['live_time']);
        $res = D('room/room_list')->where(array('id'=>$post['room_id']))->find();
        $dateprice = json_decode($res['dateprice'],true);
        $datas = $this->gettime($dateprice);
        array_pop($live_time);
        foreach($datas as $dv=>$av){
            if(in_array($av['time'],$live_time)){
                $total += $av['total'];
            }
        }
        //计算优惠券价格
        if(!empty($post['coupon_id'])){
            $data['coupon_id'] = $post['coupon_id'];
            $coupon = D('colligate/colligate_coupon')->where(array('id'=>$post['coupon_id']))->find();
            if($coupon['type'] == 1){
                if($total>=$coupon['mj_price']){
                    $su_total = $total - $coupon['mj_hui'];
                }else{
                    ajaxReturn(array('msg'=>'您的订单金额还不足满减标准'),2);
                }
            }else if($coupon['type'] == 2){
                $su_total=$total*($coupon['zhekou']/10);
            }
        }else{
            $su_total = $total;
        }

        $order_sn = date('YmdHis',time()).time();
        $data['uid'] = $uid;
        $data['order_sn'] = $order_sn;
        $data['room_id'] = $post['room_id'];
        $data['yf_total'] = $total;
        $data['su_total'] = $su_total;
        $data['yh_total'] = $total - $su_total;
        $data['username'] = $post['username'];
        $data['mobile'] = $post['mobile'];
        $data['cardid'] = $post['cardid'];
        $data['night'] = $post['night'];
        $data['live_time'] = $post['live_time'];
        $data['ren'] = $post['ren'];
        $data['status'] = 1;
        $data['create_time'] = time();
        // dump($data);die;
        $result = D('order/order_list')->add($data);
        if($result){
            ajaxReturn(array('orderid'=>$result,'msg'=>'订单创建成功'),1);
           
        }else{
            ajaxReturn(array('msg'=>'订单创建失败'),2);
        }
    }



    public function evaluate(){
        if (request()->isPost()) {
            $wechat = WechatService::WeChatOauth();
            $token = $wechat->getAccessToken();
            $imglist = explode(',',$_POST['imglist']);
            foreach($imglist as $k=>$v){
                $url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=". $token . "&media_id=".$v;
                $res = D('Admin/Upload')->uploadurl($url);
                $picture[]=$res['id'];
            }
            $id = $_POST['id'];
            unset($_POST['id']);
            $_POST['imglist'] = serialize($picture);
            $_POST['create_time'] = time();
            $_POST['uid'] = session('wxuser')['id'];
            $rid = D('order/order_list')->where(array('id'=>$id))->getField('room_id');
            $_POST['rid'] = $rid;
            $_POST['fid'] = D('room/room_list')->where(array('id'=>$rid))->getField('uid');
            $res = M('order_evaluate')->add($_POST);
            if($res){
                D('order/order_list')->where(array('id'=>$id))->save(array('is_live'=>4));
                ajaxReturn(array('msg'=>'评论成功'),1);
            }else{
                ajaxReturn(array('msg'=>'评论失败'),2);
            }
        }else{
            $id = I('id');
            $appid = WechatService::getAppid();
            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
            $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $config = WechatService::WeChatScript()->getJsSign($url);
            // dump($config);
            $this->assign('config',$config);
            $this->assign('id',$id);
            $this->display();
        }


       

    }



    public function gettime($dateprice){
      foreach($dateprice as $kk=>$cc){
                foreach($cc as $kv=>$vv){
                    foreach($vv as $bb => $dd){
                        if(strlen($kv) == 1){
                            $kv = '0'.$kv;
                        }
                        if(strlen($bb) == 1){
                            $bb = '0'.$bb;
                        }
                        $datas[] = array_merge(array('time'=>$kk.'-'.$kv.'-'.$bb,'type'=>$dd['type'],'total'=>$dd['total']));
                    }
                }
        }
        return $datas;
    }

    //申请保洁
    public function applycleanup(){
        if(request()->isPost()) {
            $data['uid'] = session('wxuser')['id'];
            $data['orderid'] = $_POST['id'];
            $rid =  D('order/order_list')->where(array('id'=>$_POST['id']))->getField('room_id');
            $data['rid'] =$rid;
            $data['groupid'] = D('room/room_list')->where(array('id'=>$rid))->getField('groupid');
            $data['start'] = $_POST['start'];
            $data['end'] = $_POST['end'];
            $data['content']  = $_POST['content'];
            $data['type'] = 1;
            $data['create_time'] = time();

            $res = M('room_apply')->add($data);
            if($res){
                ajaxReturn(array('msg'=>'申请成功，请等待打扫'),1);
            }else{
                ajaxReturn(array('msg'=>'申请失败，请稍后重试'),1);
            }

        }else{
            $this->assign('id',I('id'));
            $this->display();
        }
        
    }

    //申请维修
    public function applyrepair(){
        if(request()->isPost()) {
            $data['uid'] = session('wxuser')['id'];
            $data['orderid'] = $_POST['id'];
            $rid =  D('order/order_list')->where(array('id'=>$_POST['id']))->getField('room_id');
            $data['rid'] =$rid;
            $data['groupid'] = D('room/room_list')->where(array('id'=>$rid))->getField('groupid');
            $data['start'] = $_POST['start'];
            $data['end'] = $_POST['end'];
            $data['content']  = $_POST['content'];
            $data['type'] = 2;
            $data['create_time'] = time();
            $res = M('room_apply')->add($data);
            if($res){
                ajaxReturn(array('msg'=>'申请成功，请等待维修'),1);
            }else{
                ajaxReturn(array('msg'=>'申请失败，请稍后重试'),1);
            }
        }else{
            $this->assign('id',I('id'));
            $this->display();
        }
    }
}

 ?>