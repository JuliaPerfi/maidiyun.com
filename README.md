迈迪网企业站
===============

## 目录结构

迈迪网企业站的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application           应用目录
│  ├─common             公共模块目录
|  |  |——controller     公共继承控制器
|  |  |   |——Base.php   公共控制器   
|  |  |——view           公共继承html
|  |  |   |——base.html  公共页面
|  |  |   |——footer.html 页脚
|  |  |   |——header.html 头部
|  |  |   |——login.html  顶部登录条
│  ├─index              前端模块
│  │  ├─common.php      模块函数文件
│  │  ├─controller      控制器目录
|  |  |   |——About.php    关于我们 
|  |  |   |——Category.php 产品中心   
|  |  |   |——Index.php    首页   
|  |  |   |——Login.php    登录控制器   
|  |  |   |——News.php     新闻   
|  |  |   |——Produce.php  生产能力   
|  |  |   |——Quali.php    企业资质   
│  │  ├─view            视图目录
│  │
│  ├─command.php        命令行定义文件
│  ├─common.php         公共函数文件
│  └─tags.php           应用行为扩展定义文件
│
├─config                应用配置目录
│  ├─config.php         自定义配置文件
│  ├─app.php            应用配置
│  ├─cache.php          缓存配置
│  ├─cookie.php         Cookie配置
│  ├─database.php       数据库配置
│  ├─log.php            日志配置
│  ├─session.php        Session配置
│  ├─template.php       模板引擎配置
│  └─trace.php          Trace配置
│
├─route                 路由定义目录
│  ├─route.php          路由定义
│
├─public                WEB目录（对外访问目录）
│  ├─static             静态资源
|  |  |——image          静态图片资源
|  |  |——css            静态样式资源
|  |  |——js             静态js 和插件资源
│  ├─index.php          入口文件
│  ├─router.php         快速测试文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│
├─extend                扩展类库目录
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─think                 命令行入口文件
~~~
### 常量和配置

*   常量  __CSS__   =》  指向 static 文件夹下css目录
*   常量  __JS__    =》  指向 static 文件夹下js目录
*   常量  __IMG__   =》  指向 static 文件夹下image目录

### 数据表和字段

*   数据表和字段采用小写加下划线方式命名，并注意字段名不要以下划线开头，例如 `think_user` 表和 `user_name`字段，不建议使用驼峰和中文作为数据表字段命名。

## 参与开发

请参阅 [ThinkPHP5 核心框架包](https://github.com/top-think/framework)。

## 版权信息

ThinkPHP遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2018 by ThinkPHP (http://thinkphp.cn)

All rights reserved。

ThinkPHP® 商标和著作权所有者为上海顶想信息科技有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)
