<?php
namespace app\index\controller;

use app\common\controller\Base;

class Produce extends Base
{
    function index(){
        
        return $this->fetch();
    }
   
}
