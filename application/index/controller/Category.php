<?php
namespace app\index\controller;

use app\common\controller\Base;

class Category extends Base
{
    function index(){
        
        return $this->fetch();
    }
   
}
