<?php
namespace app\index\controller;

use app\common\controller\Base;

class Quali extends Base
{
    function index(){
        
        return $this->fetch();
    }
   
}
