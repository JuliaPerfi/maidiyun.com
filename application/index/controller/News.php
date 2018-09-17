<?php
namespace app\index\controller;

use app\common\controller\Base;

class News extends Base
{
    function index(){
        
        return $this->fetch();
    }
   
}
