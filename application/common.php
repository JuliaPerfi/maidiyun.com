<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * @author liujia
 * 数组分页函数 核心函数 array_slice
 * 用此函数之前要先将数据库里面的所有数据按一定的顺序查询出来存入数组中
 * $page  当前第几页
 * $pageSize  每页多少条数据
 * $array  查询出来的所有数组
 */
function page_array($array = [],$page = 1,$pageSize = 10){
    $start=($page-1)*$pageSize; #计算每次分页的开始位置
    $totals=count($array); 
    $countpage=ceil($totals/$pageSize); #计算总页面数
    $data=array_slice($array,$start,$pageSize);
    $pagedata=['total'=>$totals,'page'=>$page,'data'=>$data];
    return $pagedata; #返回查询数据
}


/**
  * CURL请求
  * @param $url 请求url地址
  * @param $method 请求方法 get post
  * @param null $postfields post数据数组
  * @param array $headers 请求header信息
  * @param bool|false $debug  调试开启 默认false
  * @return mixed
  */
  function httpRequest($url, $method = 'GET', $postfields = null, $headers = array()) {
    $method = strtoupper($method);
    $ci = curl_init();
    /* Curl settings */
    curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    // curl_setopt($ci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0");
    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 10); /* 在发起连接前等待的时间，如果设置为0，则无限等待 */
    curl_setopt($ci, CURLOPT_TIMEOUT, 7); /* 设置cURL允许执行的最长秒数 */
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
    switch ($method) {
        case "POST":
            curl_setopt($ci, CURLOPT_POST, true);
            if (!empty($postfields)) {
                $tmpdatastr = is_array($postfields) ? http_build_query($postfields) : $postfields;
                curl_setopt($ci, CURLOPT_POSTFIELDS, $tmpdatastr);
            }
            break;
        default:
            curl_setopt($ci, CURLOPT_CUSTOMREQUEST, $method); /* //设置请求方式 */
            break;
    }
    $ssl = preg_match('/^https:\/\//i',$url) ? TRUE : FALSE;
    curl_setopt($ci, CURLOPT_URL, $url);
    if($ssl){
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, FALSE); // 不从证书中检查SSL加密算法是否存在
    }
    //curl_setopt($ci, CURLOPT_HEADER, true); /*启用时会将头文件的信息作为数据流输出*/
    curl_setopt($ci, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ci, CURLOPT_MAXREDIRS, 2);/*指定最多的HTTP重定向的数量，这个选项是和CURLOPT_FOLLOWLOCATION一起使用的*/
    curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ci, CURLINFO_HEADER_OUT, true);
    $response = curl_exec($ci);
    curl_close($ci);
    return $response;
}
/**
 * 截取字符
 */
function cutStr($str, $n=20, $stripTags = true) {
    if(!$str){
      return false;
    }
    $qian=array(" ","　","\t","\n","\r","_ueditor_page_break_tag_");$hou=array("","","","","","");
    if ($stripTags) {
      $strip_str = str_replace($qian,$hou,strip_tags(htmlspecialchars_decode($str)));
      $r=abslength($strip_str)>$n?'...':'';
      return mb_substr($strip_str, 0, $n, 'utf-8').$r;
    } else {
      $strip_str = str_replace($qian,$hou,htmlspecialchars_decode($str));
      return mb_substr($strip_str,0,$n,'utf-8');
    }
  }
  function abslength($str) {
    if(empty($str)){
        return 0;
    }
    if(function_exists('mb_strlen')){
        return mb_strlen($str,'utf-8');
    }
    else {
        preg_match_all("/./u", $str, $ar);
        return count($ar[0]);
    }
}
