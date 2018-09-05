<?php
namespace app\api\model;
use think\Model;
/**
 * 积分规则处理
 */
class Score extends Model
{	
	/**
	 *用户邀请注册积分规则
	 * 
	 */
	public function invite_score($uid='',$invite_code=''){
		$score = intval(C('RECOMMEND_RE_SCORE'));//推荐积分
		if(!empty($uid)&&!empty($invite_code)){
			$user_score = db('app_user')->where(['invite_code'=>$invite_code])->field('id,score')->find();
			$re =  db('app_user')->where(['id'=>$uid])->update(['invite_uid'=>$user_score['id']]);
			if($re){
				$re = db('app_user')->where(['id'=>$user_score['id']])->update(['score'=>$user_score['score']+$score]);
				return true;
			}else{
				return false;
			}
		}
		return false;
	}
	
}