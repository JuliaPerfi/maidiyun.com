<?php /*a:5:{s:55:"E:\maidiyun.com\application\index\view\quali\index.html";i:1537006192;s:49:"E:\maidiyun.com\application\common\view\base.html";i:1537156388;s:50:"E:\maidiyun.com\application\common\view\login.html";i:1536997421;s:51:"E:\maidiyun.com\application\common\view\header.html";i:1537152812;s:51:"E:\maidiyun.com\application\common\view\footer.html";i:1537152881;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo htmlentities((isset($website['website_title']) && ($website['website_title'] !== '')?$website['website_title']:'迈迪网')); ?></title>
<meta name="keywords" content="<?php echo htmlentities((isset($website['website_keywords']) && ($website['website_keywords'] !== '')?$website['website_keywords']:'迈迪网')); ?>" />
<meta name="description" content="<?php echo htmlentities((isset($website['website_content']) && ($website['website_content'] !== '')?$website['website_content']:'迈迪网')); ?>" />
<link rel="Shortcut Icon" href="mdsoft.ico">
<base href="#" />
<link rel="stylesheet" type="text/css" href="/static/css/common.css" />
<link rel="stylesheet" type="text/css" href="/static/css/reset.css" />

</head>

<body>
     


<div class='login-nav'>
    <div class='login-nav-bd'>

        <div class='login-nav-bd-l'>
            <a href="">您好，请登录</a>
            <a href="">企业注册</a>
            <a href="">个人注册</a>
            <a href=""><span>手机迈迪</span></a>
        </div>
        <div class='login-nav-bd-r'>
                <a href=""><span>迈迪网</span></a>
                <a href="">进货单[<span>0</span>]</a>
                <a href="">我的消息[<span>0</span>]</a>
                <a href="">联系迈迪</a>
        </div>
    </div>

</div>
     


<div class='header-nav'>
    <div class=' header-nav-bd'>

        <div class=' header-nav-bd-comp'>
            <div class='comp-left'>
                <div>
                    <img src="/static/image/<?php echo htmlentities($company_info['company_logo']); ?>" alt="logo"/>
                    <img src="/static/image/logo.png" alt="二维码">
                </div>
                <div style="padding-left: 8px;">
                    <span class='company-name'><?php echo htmlentities($company_info['company_name']); ?></span>
                    <span class='company-tel'><i></i>联系电话：<?php echo htmlentities($company_info['company_tel']); ?></span>
                </div>
            </div>
            <div class="comp-right">
                
                <p style="font-size:15px;">
                    <a class="resource" onclick="" href="javascript:void(0)"><i></i><span>加为资源</span></a>
                    <a class="linkup" onclick="" href="#"><i></i><span>在线沟通</span></a></a>
                </p>
            </div>
        </div>
        <div class=' header-nav-bd-menu'>
            <ul class="clearfix">
                <li <?php if($CONTROLLER == 'index'): ?>class='active'<?php endif; ?> ><a href="/index.html">首页</a></li>
                <li <?php if($CONTROLLER == 'category'): ?>class='active'<?php endif; ?>><a href="/category.html">产品中心</a></li>
                <li <?php if($CONTROLLER == 'produce'): ?>class='active'<?php endif; ?>><a href="/produce.html">生产能力</a></li>
                <li <?php if($CONTROLLER == 'quali'): ?>class='active'<?php endif; ?>><a href="/quali.html">企业资质</a></li>
                <li <?php if($CONTROLLER == 'news'): ?>class='active'<?php endif; ?>><a href="/news.html">新闻动态</a></li>
                <li class="last <?php if($CONTROLLER == 'about'): ?>active<?php endif; ?>"><a href="/about.html">企业介绍</a></li>
            </ul>
        </div>
    </div>

</div>
    <div class='main-body'>
        
        <div >
           quali
        </div>


    </div>
    <div class="footer">
    <div class="footer-menu">
        <a href="/index.html" class="first">首页</a>
        <a href="/category.html">产品中心</a>
        <a href="/produce.html">生产能力</a>
        <a href="/quali.html">企业资质</a>
        <a href="/news.html">新闻动态</a>
        <a class='last' href="/about.html">企业介绍</a>
    </div>
    <div class="copyright">
        <span>地址：<?php echo htmlentities($company_info['company_address']); ?></span>        
        <span> 联系电话：<?php echo htmlentities($company_info['company_tel']); ?></span>        
        <span> Copyright@2018迈迪网</span>
    </div>
</div>
    
</body>

</html>