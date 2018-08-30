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
namespace app\Colligate\Controller;
use app\common\controller\Controller;
use yfthink\Page;
/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Index extends Controller {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function index() {
        $this->assign('meta_title', "Colligate");
        $this->display();
    }

    /**
     * 列表
     * @author youfai.cn <280962430@qq.com>
     */
    public function lists($cid) {
        $p = $_GET["p"] ? : 1;
        $map = array();
        $map['status'] = 1;
        $map['cid']    = $cid;
        $index_object = D('Index');
        $list = $index_object->where($map)->select();
        $data_list = $index_object
                   ->page($p, C('ADMIN_PAGE_ROWS'))
                   ->order('id desc')
                   ->where($map)
                   ->select();
        $page = new Page(
            $index_object->where($map)->count(),
            C('ADMIN_PAGE_ROWS')
        );

        $this->assign('data_list', $data_list );
        $this->assign('page', $page->show());
        $this->assign('meta_title', "Shop列表");
        $this->display();
    }

    /**
     * 详情
     * @author youfai.cn <280962430@qq.com>
     */
    public function detail($id) {
        $map = array();
        $map['id'] = $id;
        $map['status'] = 1;
        $info = D('Index')->where($map)->find();
        $this->assign('info', $info );
        $this->assign('meta_title', "Shop");
        $this->display();
    }
}