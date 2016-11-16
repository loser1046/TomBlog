<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
        $data = M("article");
        $sele = $data->order('当前时间 desc')->limit(4)->select();
        $this->assign('sele',$sele);
//        var_dump($sele);
//        M('table')->order('time desc')->limit(1)->select();
       $this->view->display();
        }  
}