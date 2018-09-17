<?php
namespace app\index\controller;

use app\common\controller\Base;

class Index extends Base
{
    function index(){
        $this->assign('MDT',$this->MDT);
        return $this->fetch();
    }
   
}
