<?php


namespace Admin\Controller;

use Think\Controller;
class IndexController extends Controller{
    
    public function indexAction(){
        $this->display();
    }


    public function consoleAction(){
        if(IS_POST) {
        
        $db = M("root");
//        $user = $db -> where(['username' => I('post.username')]) ->find();
        $username = I("post.username");
        var_dump($username);
        $user = $db -> where("username = '{$username}'") ->find();
        $sql = $db->getLastSql();
        var_dump($user);
        var_dump($sql);
        
        if(!$user || $user['password'] != I('post.password', '', 'md5')){
            $this->error("账号或密码错误");
        }

        
        //更新数据库中最近的登录时间和IP地址
        $data = [
            'id' => $user['id'],
            '最近登录时间' => date('Y-m-d H:i:s', time()),
            'ip地址' => get_client_ip(),
        ];
        
        $db->where(['id'=> $user['id']])->save($data);
        
        
        //写入session
//        session(array('expire'=>3600,'uid'=>$user['id'],'username'=>$user['username'],'logintime'=>$user['最近登录时间'],'ip'=>$user['ip地址']));
        session('uid',$user['id']);
        session('username',$user['username']);
//        session('username',$user['username']);
        session('logintime',date('Y-m-d H:i:s'),$user['最近登录时间']);
        session('ip',$user['ip地址']);
//        session(array(''=>$user['id'],'expire'=>3600));
//        var_dump($_SESSION);
        }  else {
            
        $this->error("请输入用户名和密码");
        }
        
        //跳转到后台管理页面
        $this->redirect("admin/boss/index");
}
}
