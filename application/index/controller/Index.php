<?php
namespace app\index\controller;

use app\common\controller\Base;

class Index extends Base
{
    function index(){
        return $this->fetch();
    }
   
}
