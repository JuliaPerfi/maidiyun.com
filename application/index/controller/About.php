<?php
namespace app\index\controller;

use app\common\controller\Base;

class About extends Base
{
    function index(){
        
        return $this->fetch();
    }
   
}
