<?php


namespace Home\Controller;

use Think\Controller;
class OnecolumnController extends Controller{
    
    public function indexAction(){
            if (IS_POST) {
            $liuyan = M("board");
            $user = I("post.user");
//            var_dump($user);
            $type = I("post.email");
//            var_dump($type);
            $con = I("post.con");
//            var_dump($con);
            $now_time = date('Y-m-d H:i:s', time());
            $ip = get_client_ip();
//            var_dump($ip);
            $data = [
                'name' => $user,
                'email' => $type,
                'message' => $con,
                'time' => $now_time,
                'ip' => $ip,
            ];
            $row = $liuyan->add($data);
//            var_dump($row);
            if ($row) {
                echo "<script language=JavaScript>alert('留言提交成功');</script>";

                $this->redirect('home/onecolumn/index');
//                $this->display();
//                echo '<script>window.location.href="__PUBLIC__ . /admin/boss/placardEdit"</script>';
            }
        }
        $db = M("board");
//        $select = $this->select = $db->order('time desc')->limit(8)->select();
        $count = $db->count();
//        var_dump($count);
        $pagecount = 10;
        $page = new \Think\Page($count,$pagecount);
        $page->parameter = $row;
        $page->setConfig('first', '首页');
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('last', '尾页');
        $page->setConfig('theme', '%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
        $show = $page->show();
        $list = $db->order("id desc")->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->view->display();
    }
}
