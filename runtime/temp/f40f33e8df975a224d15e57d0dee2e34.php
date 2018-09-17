<?php /*a:3:{s:51:"E:\think-5.1\application\home\view\index\index.html";i:1533109068;s:51:"E:\think-5.1\application\home\view\public\base.html";i:1533089317;s:51:"E:\think-5.1\application\home\view\public\left.html";i:1533089822;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>迈迪</title>
<meta name="keywords" content="" /> 
<meta name="description" content=""/> 
<link rel="Shortcut Icon" href="/static/mdsoft.ico">
<link rel="stylesheet" type="text/css" href="/static/css/common.css?version=1.0">
<style>
</style>
<script src="/static/js/jquery-1.11.2.min.js" type="text/javascript"></script>

</head>

<body>
<div class='left'>

    <div  <?php if((input('param.c') == 'sj') || (input('param.c') == '')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
        <a <?php if((input('param.c') != 'sj')): ?>target='_blank'<?php endif; ?> href="<?php echo url('index/index','c=sj'); ?>"><img src="/static/image/sheji.png" width=26 height=26 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'user')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
            <a <?php if((input('param.c') != 'user')): ?>target='_blank'<?php endif; ?> href="<?php echo url('User/index','c=user'); ?>"><img src="/static/image/user.png" width=29 height=20 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'ct')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
            <a <?php if((input('param.c') != 'ct')): ?>target='_blank'<?php endif; ?> href="javascript:alert('敬请期待');"><img src="/static/image/ct.png" width=28 height=28 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'yfw')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
        <a <?php if((input('param.c') != 'yfw')): ?>target='_blank'<?php endif; ?> href="javascript:alert('敬请期待');"><img src="/static/image/yfw.png" width=29 height=24 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'sc')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
            <a <?php if((input('param.c') != 'sc')): ?>target='_blank'<?php endif; ?> href="javascript:alert('敬请期待');"><img src="/static/image/sc.png" width=27 height=26 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'gwc')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
            <a <?php if((input('param.c') != 'gwc')): ?>target='_blank'<?php endif; ?> href="javascript:alert('敬请期待');"><img src="/static/image/gwc.png" width=27 height=26 alt=""></a>
    </div>
    <div <?php if((input('param.c') == 'xz')): ?>class='main-button current-button'<?php else: ?>class='main-button'<?php endif; ?>>
            <a <?php if((input('param.c') != 'xz')): ?>target='_blank'<?php endif; ?> href="javascript:alert('敬请期待');"><img src="/static/image/xz.png" width=24 height=23 alt=""></a>
    </div>
    <div class='main-button-tw'>
            <a href="javascript:alert('说出你的疑问');">
                <span >提问</span>
            </a>
    </div>
</div>
<div class='main'>
    
    <div class='main-content'>
        <div class='search'>
            <input type="text"  placeholder="请输入要搜索的内容">
            <div ><span >搜索</span></div>
        </div>

        <div class='cp-list' style="margin-top: 19px;width: 80%;">
            <ul class='cp-list-ul' style='float: left;
            width: 824px;'>
                <li class='tg-li'>
                    <img src="/static/image/tdjt.png" alt="">
                </li>
                <li class='tg-li'>
                    <img src="/static/image/nxkj.png" alt="">
                </li>
                <li >
                        <img src="/static/image/sjt.png" alt="">
                </li>
                <li >
                        <img src="/static/image/zzjg.png" alt="">
                </li>
                <li >
                        <img src="/static/image/zyk.png" alt="">
                </li>
                <li>
                        <img src="/static/image/bzj.png" alt="">
                </li>
                <li >
                        <img src="/static/image/wgj.png" alt="">
                </li>
                <li >
                    <img src="/static/image/gjgj.png" alt="">
                </li>
                <li >
                    <img src="/static/image/empty.png" alt="">
                </li>
                <li >
                    <img src="/static/image/empty.png" alt="">
                </li>
                <li >
                    <img src="/static/image/empty.png" alt="">
                </li>
                <li >
                    <img src="/static/image/empty.png" alt="">
                </li>
                
            </ul>
            
        </div>
        <div class='tjqz'>

        </div>
    </div>

</div>


</body>
</html>