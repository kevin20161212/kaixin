<?php
namespace app\admin\model;

class Data
{
	public static function head(){
		return [['autoid','序号'],
			['school','学校'],
			['addr','所在地'],
			['type','类型']
			];
	}
	public static function data(){
		return [
			['autoid'=>'1','school'=>'云南大学','addr'=>'云南省','type'=>'综合'],
			['autoid'=>'2','school'=>'云南财经大学','addr'=>'云南省','type'=>'财经'],
			['autoid'=>'3','school'=>'云南民族大学','addr'=>'云南省','type'=>'综合'],
			['autoid'=>'4','school'=>'云南师范大学','addr'=>'云南省','type'=>'师范'],
			['autoid'=>'5','school'=>'云南旅游大学','addr'=>'云南省','type'=>'综合'],
			['autoid'=>'6','school'=>'贵州大学','addr'=>'贵州省','type'=>'综合'],
			['autoid'=>'7','school'=>'贵州财经大学','addr'=>'贵州省','type'=>'财经'],
			['autoid'=>'7','school'=>'贵州师范大学','addr'=>'贵州省','type'=>'师范']
			];
	}
}