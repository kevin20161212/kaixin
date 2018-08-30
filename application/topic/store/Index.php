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
// use app\admin\controller\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Index extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {

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
       $startweek=mktime(0,0,0,date('m'),date('d')+1-7,date('Y'))-1;       
     
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

    /**
     * 新增
     * @author youfai.cn <280962430@qq.com>
     */
    public function add() {
        if (request()->isPost()) {
            $model_object = D("Index");
            $data = $model_object->create(format_data());
            if ($data) {
                $id = $model_object->add($data);
                if ($id) {
                    $this->success("新增成功", U("index"));
                } else {
                    $this->error("新增失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("新增")  // 设置页面标题
                    ->setPostUrl(U("add"))      // 设置表单提交地址
                    ->addFormItem("title", "text", "标题", "标题")
                    ->addFormItem("content", "kindeditor", "内容", "内容")
                    ->display();
        }
    }

    /**
     * 编辑
     * @author youfai.cn <280962430@qq.com>
     */
    public function edit($id) {
        if (request()->isPost()) {
            $model_object = D("Index");
            $data = $model_object->create(format_data());
            if ($data) {
                $id = $model_object->save($data);
                if ($id !== false) {
                    $this->success("更新成功", U("index"));
                } else {
                    $this->error("更新失败".$model_object->getError());
                }
            } else {
                $this->error($model_object->getError());
            }
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("编辑")  // 设置页面标题
                    ->setPostUrl(U("edit"))     // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem("title", "text", "标题", "标题")
                    ->addFormItem("content", "kindeditor", "内容", "内容")
                    ->addFormItem("sort", "num", "排序", "用于显示的顺序")
                    ->setFormData(D("Index")->find($id))
                    ->display();
        }
    }
}