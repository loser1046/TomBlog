<?php

namespace Home\Controller;

use Think\Controller;

class ThreecolumnController extends Controller {

    public function threecolumnAction() {
        $data = M("article");
//        $this->data1 = $data->order('当前时间 desc')->limit()->select();
        $this->view->display();
    }

}
