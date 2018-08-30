<?php
namespace app\api\model;
use think\Model;
class Tool extends Model
{	
	/**
	 *获取地区
	 * 
	 */
	public function get_district_name($id){
		$data = db('merchant_district')->where(['id'=>$id])->find();
		return $data['name'];
	}
	
	/**
	 * 获取banner图
	 */
	public function get_banner(){
		$data = db('admin_slider')->where(['status'=>1])->order('id desc')->limit(6)->select();
		foreach ($data as $key => &$value) {
			$value['cover'] = get_cover($value['cover']);
		}
		return $data;
	}
}