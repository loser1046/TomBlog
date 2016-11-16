<?php

namespace Admin\Controller;

//use Admin\Controller\CommonController;
use Think\Controller;

//class BossController extends CommonController{
class BossController extends CommonController {

//                public function __construct() {
//
//        //判断session是否存在,不存在则跳转至登录页面
//        if (!isset($_SESSION['uid'])) {
//            $this->redirect('admin/index/index');
//        }
//        echo '你好';
//    }
    //后台管理主页面
    public function indexAction() {
//        parent::SessionAction();
        $this->display();
//        session(null); 
    }

    //查看所有文档
    public function documentQueryAction() {
//        parent::SessionAction();
        $this->display();
    }

    //用户文档列表
    public function userdocumentQueryAction() {
        parent::SessionAction();
        $this->display();
    }

    //学生管理
    public function studentQueryAction() {
        parent::SessionAction();
        $this->display();
    }

    //退出登录
    public function loginAction() {
        parent::SessionAction();
        session('uid', null); // 删除uid
        $this->display();
    }

    //查看公告
    public function afficheQueryAction() {
        parent::SessionAction();
        $look = M("article");
        $count = $look->count();
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
        $list = $look->order("id desc")->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page',$show);
        $this->display();
    }

    //修改公告
    public function placardEditAction() {
        parent::SessionAction();
        $id = I("get.id");
//        var_dump($id);
        $amend = M("article");
        $aa = $amend->where(['id' => $id])->select();
        $this->assign('aa', $aa);
//        var_dump($aa);
        if (IS_POST) {
            $amend = M("article");
            $name = I("post.bigTypeName");
//            var_dump($name);
            $type = I("post.typeIntroduce");
//            var_dump($type);
            $pub = I("post.published");
//            var_dump($pub);
            $fa = I("post.fatime");
//            var_dump($fa);
            $now_time = date('Y-m-d H:i:s', time());
            $data = [
                '公告标题' => $name,
                '内容' => $type,
                '发布时间' => $pub,
                '失效时间' => $fa,
                '当前时间' => $now_time,
            ];
            $row = $amend->where(['id' => $id])->save($data);
//            var_dump($row);
            if ($row) {
                $this->success("修改成功");
//                echo '<script>alert("修改成功！");</script>';
//                $this->redirect('admin/boss/placardEdit');
//                $this->display();
//                echo '<script>window.location.href="__PUBLIC__ . /admin/boss/placardEdit"</script>';
            } else {
                $this->error("修改失败");
            }
        }
        $this->display();
    }

    //添加公告
    public function afficheAddAction() {
        parent::SessionAction();
        if (IS_POST) {
            $add = M("article");
            $name = I("post.bigTypeName");
            $type = I("post.typeIntroduce");
            $pub = I("post.published");
            $pic = $this->upload("thumb");
//            var_dump($pic);
            $fa = I("post.fatime");
            $now_time = date('Y-m-d H:i:s', time());
            $data = [
                '公告标题' => $name,
                '内容' => $type,
                '发布时间' => $pub,
                '失效时间' => $fa,
                '当前时间' => $now_time,
                'thumb' => $pic,
                '__hash__' => I("post.__hash__"),
            ];
//        var_dump($name);
//        var_dump($type);
//        var_dump($pub);
//        var_dump($fa);
//            $pic = $this->upload("thumb");
//            if (!empty($pic)) {
//                $data['thumb'] = $pic;
//            }
            $row = $add->add($data);
//          $lastid = $add->getLastInsID();
//          var_dump($lastid);
            if ($row) {
                $this->success("公告发布成功");
            } else {
                $this->error("公告发布失败");
            }
//        $row1 = $add->getLastSql();
//        var_dump($row1);
//        var_dump($row);
            exit();
        }
        $this->display();
    }

    //上传，得到图片路径
    protected function upload($name) {
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = PUBLIC_PATH; // 设置附件上传目录   $upload->rootPath = PUBLIC_PATH
        $upload->savePath = "/upload/";
        $upload->subName = date("Ymd");
        $upload->saveName = date("his") . rand(1000, 9999);
        $info = $upload->upload();
        if (!$info) {
            return false;
        } else {
            return $info[$name]['savepath'] . $info[$name]['savename'];
        }
    }

    //删除公告
    public function deleteAction() {
        parent::SessionAction();
        if (IS_GET) {
            $id = I("get.id");
//        var_dump($a);
            $Delete = M("article");
            $row = $Delete->where(['id' => $id])->delete($id);
            if ($row) {
                $this->success("删除成功");
            } else {
                $this->error("删除失败");
            }
        }
        $this->display();
    }


}
