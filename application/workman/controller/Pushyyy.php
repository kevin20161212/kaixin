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

namespace app\Workman\Controller;
use app\common\controller\Controller;
use yfthink\Page;
use think\worker\Server;
use GatewayWorker\Lib\Gateway;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Push extends Server{
    
   protected $socket = 'websocket://0.0.0.0:2345';

    /**
     * 收到信息
     * @param $connection
     * @param $data
     */
    public static function onMessage($client_id, $message)
    {
        
        $message_data = json_decode($message, true);
        if(!$message_data)
        {
            return ;
        }
        $uid = $message_data['uid'];
        $_SESSION['uid'] = $uid;
             
        switch($message_data['type'])
        {
            case 'say':
               $new_message = array(
                    'type'=>'say', 
                    'uid'=>$message_data['uid'],
                    'nickname'=>$message_data['nickname'],
                    'headimgurl' =>$message_data['headimgurl'],
                    'to_client_id'=>'all',
                    'content'=>nl2br(htmlspecialchars($message_data['content'])),
                    'time'=>date('Y-m-d H:i:s'),
                    // 'client'=> cache('client')
                );
               // return json_encode($new_message);
            // $client_id->send($message);
             // return Gateway::sendToGroup($uid ,json_encode($new_message));
             $client_id->send(json_encode($new_message));

        }
       
       


    }

    /**
     * 当连接建立时触发的回调函数
     * @param $connection
     */
    public function onConnect($client_id)
    {
        
         cache('client',$client_id);

        // Gateway::sendToCurrentClient(json_encode($connection));
        // $data =  $client_id;
        
        // Gateway::sendToClient($client_id, $data);
        // Gateway::sendToCurrentClient("Your client_id is $client_id");
    }

    /**
     * 当连接断开时触发的回调函数
     * @param $connection
     */
    public function onClose($connection)
    {
        
    }

    /**
     * 当客户端的连接上发生错误时触发
     * @param $connection
     * @param $code
     * @param $msg
     */
    public function onError($connection, $code, $msg)
    {
        echo "error $code $msg\n";
    }

    /**
     * 每个进程启动
     * @param $worker
     */
    public function onWorkerStart($worker)
    {

    }
    /**
     * 每个进程启动
     * @param $worker
     */
    public function onWebSocketConnect($client_id, $data)
    {
        cache('client','abc');
        // cache('client',$client_id);
        // dump($client_id);
        // dump($data);
        // Gateway::closeClient($client_id);
        // $data['client'] =  $client_id;
        // Gateway::sendToClient($client_id, $data);
    }
}