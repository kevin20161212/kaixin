<?php 
function pidname($pid){
	$data = db('course_category')->where(['id'=>$pid])->find();
	if($data){
		$name = $data['title'];
	}else{
		$name = '顶级分类';
	}
	return $name;
}