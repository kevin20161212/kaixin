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

namespace app\Colligate\Admin;
use app\admin\controller\Admin;
use yfthink\Page;

/**
 * 默认控制器
 * @author youfai.cn <280962430@qq.com>
 */
class Article extends Admin {
    /**
     * 默认方法
     * @author youfai.cn <280962430@qq.com>
     */
    public function kradd() {
        if (request()->isPost()) {
            $model_object = M("colligate_article");
           
            $id = $model_object->save($_POST);
            if ($id) {
                $this->success("操作成功", U("kradd"));
            } else {
                $this->error("操作失败".$model_object->getError());
            }
          
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("客人须知")  // 设置页面标题
                    ->setPostUrl(U("kradd"))      // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('content', 'kindeditor', '客人须知', '客人须知')
                    ->addFormItem('type', 'hidden', 'type', 'type')
                    ->setFormData(M('colligate_article')->where(array('id'=>1))->find())
                    ->display();
        }
    }
    
    public function fwadd() {
        if (request()->isPost()) {
            $model_object = M("colligate_article");
           
            $id = $model_object->save($_POST);
            if ($id) {
                $this->success("操作成功", U("fwadd"));
            } else {
                $this->error("操作失败".$model_object->getError());
            }
          
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("客人须知")  // 设置页面标题
                    ->setPostUrl(U("kradd"))      // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('content', 'kindeditor', '客人须知', '客人须知')
                    ->addFormItem('type', 'hidden', 'type', 'type')
                    ->setFormData(M('colligate_article')->where(array('id'=>2))->find())
                    ->display();
        }
    }

    public function dfadd() {
        if (request()->isPost()) {
            $model_object = M("colligate_article");
           
            $id = $model_object->save($_POST);
            if ($id) {
                $this->success("操作成功", U("dfadd"));
            } else {
                $this->error("操作失败".$model_object->getError());
            }
          
        } else {
            // 使用FormBuilder快速建立表单页面
            $builder = new \yfthink\builder\FormBuilder();
            $builder->setMetaTitle("客人须知")  // 设置页面标题
                    ->setPostUrl(U("kradd"))      // 设置表单提交地址
                    ->addFormItem("id", "hidden", "ID", "ID")
                    ->addFormItem('content', 'kindeditor', '客人须知', '客人须知')
                    ->addFormItem('type', 'hidden', 'type', 'type')
                    ->setFormData(M('colligate_article')->where(array('id'=>3))->find())
                    ->display();
        }
    }


   
}