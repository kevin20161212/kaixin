<?php
namespace app\api\model;
use think\Model;
class Active extends Model
{	
	/**
	 * 活动版块
	 * 
	 */
	public function get_block(){
		$data = db('operate_active_block')->where(['status'=>1])->order('id desc')->select();
		foreach ($data as $key => &$value) {
			$value['cover'] = get_cover($value['cover']);
		}unset($value);
		return $data;
	}

}