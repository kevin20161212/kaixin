<?php

namespace app\api\controller;
use app\common\controller\Ali;
/**
 * 工具
 */
class Tool extends Base{
	
	/**
	 * 地区
	 * @return [type] [description]
	 */
	public function district(){
		$level_one = db('merchant_district')->field('id,name,upid')->where('level',1)->select();
		$level_two = db('merchant_district')->field('id,name,upid')->where('level',2)->select();
		$level_three = db('merchant_district')->field('id,name,upid')->where('level',3)->select();
		$index2 = 0;
		foreach ($level_two as &$valu) {
			foreach ($level_three as $v) {
				if($valu['id'] == $v['upid']){
					$v['index'] = $index2;
					$index2++;
					$valu['sub'][] = $v;
				}
			}
			$index2 = 0;
		}
		$index = 0;
		$index1 = 0;
		foreach ($level_one as &$value) {
			$value['index'] = $index;
			$index++;
			foreach ($level_two as  &$val) {
				if($value['id'] == $val['upid']){
					$val['index'] = $index1;
					$value['sub'][] = $val; 
					$index1++;
				}
			}
			$index1 = 0;
		}
		//$level_one = json_encode($level_one,JSON_UNESCAPED_UNICODE);
		return $this->data($level_one,1,'获取数据成功');
	}

	/**
	 * 获取地区名
	 */
	public function get_district_name($id){
		$data = model('Tool')->get_district_name($id);
		return $data;
	}


	/**
	 * 获取课程分类
	 */
	public function category(){
		$type = input('type',1);
		$map['status'] = 1;
		if($type == 2){
			$map['pid'] = array('>=',0);
			$data = db('course_category')->where(['pid'=>['=',0],'status'=>1])->select();
			foreach ($data as $key => &$value) {
				$value['child'] = db('course_category')->field('id,title,icon')->where(['pid'=>$value['id'],'status'=>1])->select();
				$value['icon'] = get_cover($val['icon']);
				foreach ($value['child'] as $key => &$val) {
					$val['icon'] = get_cover($val['icon']);
				}
			}
		}else{
			$map['pid'] = array('=',0);
			$data = db('course_category')->field('id,title,icon')->where($map)->select();
			foreach ($data as $key => $value) {
				$value['icon'] = get_cover($val['icon']);
			}
		}
		return $this->data($data,1,'获取数据成功');
	}

	/**
	 * 发送验证码
	 */
	public function send_code(){
		$mobile = input('mobile');
		if(!$mobile){
			return $this->error('请输入手机号');
		}
		$code = model('sms')->get_code($mobile);
		if($code == 1){
			return $this->error('重发验证码');
		}else{
			$SMS = new Ali();
            $data = $SMS->sendSms1($mobile,$code);
   			return json($data);
		}
	}
	
	/**
	 * 获取banner图
	 */
	public function banner(){
		$data = model('tool')->get_banner();
		if($data){
			return $this->data($data,1,'获取数据成功');
		}else{
			return $this->data([],1,'没有更多数据');
		}
	}
}