<?php

namespace app\api\controller;
use app\common\controller\Ali;
/**
 * 活动版块
 */
class Active extends Base{
	
	/**
	 * 活动版块
	 * @return [type] [description]
	 */
	public function block(){
		dump(json_encode(['code'=>0,'msg'=>'请求不合法']));
		return $this->get_error('请求不合法');
		$data = model('active')->get_block();
		if($data){
			return $this->data($data,1,'获取数据成功');
		}else{
			return $this->data([],1,'没有更多数据');
		}
	}
	
	
}