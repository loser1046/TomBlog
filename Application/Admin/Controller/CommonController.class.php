<?php


namespace Admin\Controller;

use Think\Controller;
class CommonController extends Controller{
    
        public function SessionAction() {

        //判断session是否存在,不存在则跳转至登录页面
        if (!isset($_SESSION['uid'])) {
            $this->error("请输入账号密码登录");
            $this->redirect('admin/index/index');
        }
    }
    
    
//            public function __constructAction() {
//
//        //判断session是否存在,不存在则跳转至登录页面
//        if (!isset($_SESSION['uid'])) {
//            $this->redirect('admin/index/index');
//        }
//        echo '你好';
//    }
}
