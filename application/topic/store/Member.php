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

namespace app\Topic\Store;

use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Member extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        // 获取列表
        $uid = is_login();
        // 
        // 
         $access_object = D('admin/Access')->where(array('is_success'=>1))->select();
          $user_object  = D('admin/User');
         foreach($access_object as $ks=>$vs){
            $fenxiao[$user_object->getFieldById($vs['uid'], 'id')] = $user_object->getFieldById($vs['uid'], 'nickname');
         }
     
        $keyword         = I('keyword', '', 'string');
        $map['id|username|jianhuren|mobile']       = array('like', '%' . $keyword . '%');
        $map['fid'] = $uid;
        if(input('param.fid') != null){
             $map['fid']       = input('param.fid');
        }
        if(input('param.nianling') != null){
             $map['nianling']       = input('param.nianling');
        }
         if(input('param.dateline') != null){
            $start = strtotime(input('param.dateline'));
            $end   = strtotime(input('param.dateline')) + 86400;
            $map['create_time'] = array('EGT',$start,'ELT',$end);
        }
        $p = $_GET["p"] ? : 1;
        $model_object = D("member/MemberStudent");
        $data_list = $model_object
                   ->page($p, C("ADMIN_PAGE_ROWS"))
                    ->where($map)
                   ->order("id desc")
                   ->select();
        foreach($data_list as $k=>$v){
            $data_list[$k]['fenxiao'] = M('admin_user')->where(array('id'=>$v['fid']))->getField('nickname');
        }
        $page = new Page(
           M('member_student')->where($map)->count(),
            C("ADMIN_PAGE_ROWS")
        );
        $attr['name']  = '删除';
        $attr['title'] = '删除';
        $attr['class'] = 'ajax-get label confirm label-danger-outline label-pill';
        $attr['href']  = U('member/del', array('id' => '__data_id__','modal'=>'ceping'));
        $att2['name']  = '查看感统评测';
        $attr2['title'] = '查看感统评测';
        $attr2['class'] = 'label label-primary-outline label-pill';
        $attr2['href']  = U('member/gtindex', array('id' => '__data_id__'));
        $attr3['name']  = '查看能力评测';
        $attr3['title'] = '查看能力评测';
        $attr3['class'] = 'label label-primary-outline label-pill';
        $attr3['href']  = U('member/nlindex', array('id' => '__data_id__'));

        $attr4['name']  = '查看基本信息';
        $attr4['title'] = '查看基本信息';
        $attr4['class'] = 'label label-primary-outline label-pill';
        $attr4['href']  = U('member/detail', array('id' => '__data_id__'));
        //  $attr4['data-toggle']  = 'modal';
        // $attr4['data-target']  = '#myModal';
        // $attr4['data-keyboard']  = 'false';


        $count = $model_object->where($map)->count();
        // 使用Builder快速建立列表页面
        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                // ->addTopButton("addnew")    // 添加新增按钮
                // ->setSearch("请输入ID/题目", U("index"))

                // ->addSearchItem('fid', 'select', '分校' ,'分校', $fenxiao)
                ->addSearchItem('nianling', 'select', '年龄' ,'订单状态', array('3' => '3岁', '4' => '4岁', '5' => '5岁','6'=>'6岁','7'=>'7岁','8'=>'8岁','9'=>'9岁','10'=>'10岁','11'=>'11岁','12'=>'12岁'))
                ->addSearchItem('dateline', 'dates', '日期' ,'日期')
                ->addSearchItem('keyword', 'text', '关键字','孩子姓名/家长姓名/手机号')
                ->setTopAlert($count)
                ->addTableColumn("id", "ID")
                ->addTableColumn("username", "学生姓名")
                ->addTableColumn("nianling", "年龄")
                ->addTableColumn("sex", "性别")
                ->addTableColumn("jianhuren", "监护人")
                ->addTableColumn("mobile", "联系电话")
                ->addTableColumn("fenxiao", "测试学校")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($data_list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
                ->addRightButton("self",$attr4) 
                ->addRightButton("self",$attr2) 
                ->addRightButton("self",$attr3) 
                ->addRightButton("self",$attr) 
                ->display();
    }

    public function detail($id){
        $info = M('member_studentiinfo')->where(array('uid'=>$id))->getField('content');
        $info = json_decode($info,true);
        $this->assign('info',$info);
        $this->display();
    }


    public function del(){
        $id = I('id');
        M('member_gtresult')->where(array('uid'=>$id))->delete();
        M('member_nlresult')->where(array('uid'=>$id))->delete();
        $res = D('member/MemberStudent')->where(array('id'=>$id))->delete();
        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function gtindex($id){
        $list = M('member_gtresult')->where(array('uid'=>$id))->order('id desc')->select();
        foreach($list as $k=>$v){
            $list[$k]['username'] = D('member/MemberStudent')->where(array('id'=>$v['uid']))->getField('username');
            $list[$k]['fenxiao'] = M('admin_user')->where(array('id'=>$v['fid']))->getField('nickname');
            $list[$k]['jiaoshi'] = M('topic_teacher')->where(array('id'=>$v['jid']))->getField('username');
        }
         $page = new Page(
           M('member_gtresult')->where(array('uid'=>$id))->count(),
            C("ADMIN_PAGE_ROWS")
        );
         $attr['name']  = '查看结果';
        $attr['title'] = '查看结果';
        $attr['class'] = 'label label-primary-outline label-pill';
        $attr['href']  = U('member/gtdetail', array('id' => '__data_id__','modal'=>true));
         $attr['data-toggle']  = 'modal';
        $attr['data-target']  = '#myModal';
        $attr['data-keyboard']  = 'false';

        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                // ->addTopButton("addnew")    // 添加新增按钮
                ->setSearch("请输入ID/题目", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("username", "学生姓名")
                ->addTableColumn("fenxiao", "测试分校")
                ->addTableColumn("jiaoshi", "测量人")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
              
                ->addRightButton("self",$attr) 
                ->display();
    }

    public function gtdetail($id){
         $res = D('home/MemberGtresult')->where(array('id'=>$id))->find();
       
        $info = D('home/MemberStudentinfo')->where(array('uid'=>$res['uid']))->order('id desc')->getField('content');
        $info = json_decode($info,true);
        $info['celiangren'] = M('topic_teacher')->where(array('id'=>$res['jid']))->getField('username');
        $info['create_time'] = $res['create_time'];

        $result = json_decode($res['content'],true);
        foreach($result as $k=>$v){
            $results[$v['group']] = $v;
        }
        
        foreach($results as $ks => $vs){
            $standard = M('topic_standard')->where(array('age'=>$info['nianling'],$ks=>$vs['value']))->order('id desc')->getField('standard');
            $results[$ks]['standard'] = $standard;
            if(empty($standard)){
                $standard = 50;
            }
            if($standard < 20){
                $results[$ks]['fenzhi'] = '20分以下';
                $results[$ks]['pingliang'] = '重度失调';
            }else if($standard >= 20 && $standard < 30){
                $results[$ks]['fenzhi'] = '20~30分';
                $results[$ks]['pingliang'] = '中度失调';
            }else if($standard >= 30 && $standard < 40){
                $results[$ks]['fenzhi'] = '30~40分';
                $results[$ks]['pingliang'] = '轻度失调';
            }else if($standard >= 40){
                $results[$ks]['fenzhi'] = '40分以上';
                $results[$ks]['pingliang'] = '正常';
            }
        }
        $this->assign('id',$id);
        $this->assign('results',$results);
        $this->assign('info',$info);
        $this->display();
    }

    public function nlindex($id){
        $list = M('member_nlresult')->where(array('uid'=>$id))->order('id desc')->select();
        foreach($list as $k=>$v){
            $list[$k]['username'] = D('member/MemberStudent')->where(array('id'=>$v['uid']))->getField('username');
            $list[$k]['fenxiao'] = M('admin_user')->where(array('id'=>$v['fid']))->getField('nickname');
            $list[$k]['jiaoshi'] = M('topic_teacher')->where(array('id'=>$v['jid']))->getField('username');
        }
         $page = new Page(
           M('member_nlresult')->where(array('uid'=>$id))->count(),
            C("ADMIN_PAGE_ROWS")
        );
         $attr['name']  = '查看结果';
        $attr['title'] = '查看结果';
        $attr['class'] = 'label label-primary-outline label-pill';
        $attr['href']  = U('member/nldetail', array('id' => '__data_id__','modal'=>true));
         $attr['data-toggle']  = 'modal';
        $attr['data-target']  = '#myModal';
        $attr['data-keyboard']  = 'false';

        $builder = new \yfthink\builder\ListBuilder();
        $builder->setMetaTitle("列表")  // 设置页面标题
                // ->addTopButton("addnew")    // 添加新增按钮
                ->setSearch("请输入ID/题目", U("index"))
                ->addTableColumn("id", "ID")
                ->addTableColumn("username", "学生姓名")
                ->addTableColumn("fenxiao", "测试分校")
                ->addTableColumn("jiaoshi", "测量人")
                ->addTableColumn("create_time", "创建时间", "time")
                ->addTableColumn("right_button", "操作", "btn")
                ->setTableDataList($list)     // 数据列表
                ->setTableDataPage($page->show())  // 数据列表分页
              
                ->addRightButton("self",$attr) 
                ->display();
    }

    public function nldetail($id){
        $info = D('home/MemberNlresult')->where(array('id'=>$id))->find();

        $data = D('home/MemberStudentinfo')->where(array('uid'=>$info['uid']))->order('id desc')->getField('content');
        $data = json_decode($data,true);
        $data['celiangren'] = M('topic_teacher')->where(array('id'=>$info['jid']))->getField('username');
        $data['create_time'] = $info['create_time'];
        $leida = json_decode($info['info'],true);
        // dump($leida);die;
        foreach($leida as $k=>$v){
            $leida[$k]['content'] = D('home/TopicEvaluation')->where(array('id'=>$v['id']))->getField('content');
            $leidas['zb'][] = array('name'=>$v['name'],'value'=>$v['value2']);
            $leidas['si'][] = array('name'=>$v['name'],'value'=>$v['value']);
        }
        $leidas['zb'] = json_encode($leidas['zb']);
        $leidas['si'] = json_encode($leidas['si']);
        $this->assign('id',$id);
        $this->assign('leidas',$leidas);
        $this->assign('list',$leida);
        $this->assign('data',$data);
        $this->assign('info',$info);
        $this->display();
    }

    public function tongji(){
        $startweek=mktime(0,0,0,date('m'),date('d')+1-7,date('Y'))-1;       
       $uid = is_login();
       $time =date('Ymd',time());
         $user = D('admin/Access')->where(array('uid'=>$uid))->find();
         $nian =  D('admin/User')->getFieldById($user['uid'], 'nian');
         $dt = date('Y',$user['create_time']);
         $day = $nian*365;
         $san = $day - 2;
         $er = $day -1;
        if($time == date('Ymd',strtotime("$dt+$san day"))){
            $daoqi_time = '<span style="color:red;">还有3天到期，请及时联系</span>';
        }else if($time == date('Ymd',strtotime("$dt+$er day"))){
            $daoqi_time  = '<span style="color:red;">还有2天到期，请及时联系</span>';
        }else if($time == date('Ymd',strtotime("$dt+$day day"))){
            $daoqi_time  = '<span style="color:red;">还有1天到期，请及时联系</span>';
        }else if($time >= date('Ymd',strtotime("$dt+$nian year"))){
            $daoqi_time  = '<span style="color:red;">已到期，请及时联系</span>';
        }else{
            $daoqi_time  = date('Y-m-d H:i',strtotime("$dt+$nian year"));
        }
        //$endweek = mktime(23,59,59,date('m'),date('d')-date('w')+7,date('Y'));        
        for($i=1;$i<8;$i++){
            $time = $i*86400;
            $wek[$i] = $startweek+$time;                        
        }
        $wek[0] = $startweek;    
        for($i=0;$i<7;$i++){            
            $k = $i + 1;
            $tim[$i][0] = $wek[$i];
            $tim[$i][1] = $wek[$k];         
        }
        $map['fid'] = $uid;
         $o['fid'] = $uid;
        foreach($tim as $k=>$v){
            $o['create_time'] = array(array('egt',$v[0]),array('elt',$v[1]),'AND');
           
            // $o['yuyue_time'] = array('exp','is not null');
            $num[$k]['name'] = weekday($v[1]);
            $num[$k]['value'] = M('member_student')->where($o)->count();           
        }
        $bing[] = array('name'=>'感统评测','value'=>M('member_gtresult')->where($map)->count());
        $bing[] = array('name'=>'能力评测','value'=>M('member_nlresult')->where($map)->count());
        $num = json_encode($num);
        $bing = json_encode($bing);
        $membercount = D("member/MemberStudent")->where($map)->count();
        $dncount =D('home/MemberNlresult')->where($map)->count()+D('home/MemberGtresult')->where($map)->count();
        $jscount = M('topic_teacher')->where(array('uid'=>$uid))->count();
        $this->assign('membercount',$membercount);
        $this->assign('bing',$bing);
        $this->assign('dncount',$dncount);
         $this->assign('daoqi_time',$daoqi_time);
        $this->assign('num',$num);
        $this->assign('jscount',$jscount);
        $this->display();
    }


    public function ceshi(){
         pdf("hello,world!"); 
    }
}