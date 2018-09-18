<?php
namespace app\common\controller;
use think\Controller;
use think\Exception;
class Base extends Controller
{
    //初始化
    protected function initialize(){
        
        //不抛出 未定义变量错误
        // error_reporting(E_ALL ^ E_NOTICE);

        //定义基础变量
        $MDT = '';
        $MDAPI = '';

        //根据域名获取迈迪通号
        $http_host = explode('.',$_SERVER['HTTP_HOST']);
        if($http_host[0] != 'www'){
            $MDT = $http_host[0];
        }
        $this->MDT= $MDT;
        
        //api域名读取
        if(config('config.TEST_MODE') == 1){
            $MDAPI = config('config.MdAppUrlTest');
        }else{
            $MDAPI = config('config.MdAppUrl');
        }
        $this->MDAPI = $MDAPI;

        //当前controller名称
        $controller = strtolower(request()->controller());
        $this->assign('CONTROLLER',$controller);

        //企业信息
        $company_info['company_name'] = '深圳市伙伴气动精密机械有限公司';
        $company_info['company_tel'] = '400-600-1988';
        $company_info['company_logo'] = 'logo.png';
        $company_info['company_address'] = '广东省东莞市厚街金莹路15号宝戈玛工业园';
        $this->assign('company_info',$company_info);

        
        //seo信息
        $website['website_title'] =$company_info['company_name']. '-迈迪网';
        $website['website_keywords'] =$company_info['company_name']. ',迈迪网';
        $website['website_content'] = $company_info['company_name'].',迈迪信息技术有限公司致力于为装备制造业打造一个基于大数据云平台的迈迪国标物联码产品信息交互识别系统——迈迪国标物联码系统。 基于工业互联网大数据平台的迈迪国标物联码系统能够协助企业有效管控企业售后服务，高效收集产品使用意见，追踪设备及零部件流向，杜绝仿冒伪劣产品，便于企业后期管理和信息采集，方便企业查询产品的相关信息，监控产品的使用状态，扩展企业的销售渠道。企业无需增加额外成本，即可获取企业所需数据，节省50%服务工作量。简单应用，尽在迈迪国标物联码通用识别系统！中国制造2025';
        $this->assign('website',$website); 
    }
    

   
}
