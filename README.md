<p align="center">
    <a href="./public/static/app/images/logo.png" target="_blank">
        <img width="300" src="./public/static/app/images/logo.png">
    </a>
</p>

# Lsky Pro - Your photo album on the cloud.

[官网](https://www.lsky.pro) &nbsp;
[手册](https://www.kancloud.cn/wispx/lsky-pro) &nbsp;
[演示](https://pic.iqy.ink) &nbsp;
[Chrome 拓展](https://github.com/wisp-x/lsky-pro-chrome-extension)
[Telegram 群组](https://t.me/lsky_pro)

[![License](https://img.shields.io/badge/license-GPL_V3.0-yellowgreen.svg)](https://github.com/wisp-x/lsky-pro/blob/master/LICENSE)
[![PHP](https://img.shields.io/badge/PHP->=5.6-orange.svg)](http://php.net)
[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/wisp-x/lsky-pro.svg)](https://github.com/wisp-x/lsky-pro)

> 下载稳定版请点击[这里](https://github.com/wisp-x/lsky-pro/releases)，发现 bug 可发送邮件至邮箱：i@wispx.cn，或提交 [issues](https://github.com/wisp-x/lsky-pro/issues)  
> 下载速度慢的可以移步 Coding https://dev.tencent.com/u/wispx/p/lsky-pro-releases/git

![homepage.png](./public/static/app/images/demo/1.png)
![homepage.png](./public/static/app/images/demo/2.png)

主要特性
---
- 支持第三方云储存，支持本地、阿里云 OSS、腾讯云 COS、七牛云、又拍云。
- 支持多图上传、拖拽上传、上传预览、全屏预览、页面响应式布局。
- 简洁的图片管理功能，支持鼠标右键、单选多选等操作。
- 强大的图片预览功能，支持响应式。
- 支持全局配置用户初始剩余储存空间、支持单个设置用户剩余储存空间。
- 支持一键复制图片外链、二维码扫描链接。
- 支持设置上传文件、文件夹路径命名规则。
- 支持图片鉴黄功能。
- 支持文件夹分类功能。
- 对外开放的上传接口。

安装需求
---
* PHP 版本 &ge; 5.6(建议使用PHP7+)
* mysql 版本 &ge; 5.5
* mysqli 支持
* fileinfo 拓展
* curl 拓展
* rewrite

安装教程
---
1. 下载兰空，上传至 web 运行环境，解压。
2. 设置运行目录为 public。
3. 配置 Rewrite 规则：
    ##### Nginx：
    ```
    location / {
        if (!-e $request_filename) {
        	rewrite ^(.*)$ /index.php?s=$1 last; break;
        }
    }
    ```

    ##### Apache:
    Apache 直接使用 .htaccess 即可

4. 访问首页，未安装自动跳转至安装页面，根据页面提示安装即可。
5. 安装完成以后请设置 runtime 目录0755权限，如果你使用本地存储，public 目录也需要设置为0755权限

如何更新到最新版？
---
升级过程并不复杂，但也简单粗暴，总共分为四个步骤。
1. [下载](https://github.com/wisp-x/lsky-pro/releases)最新版程序并解压到本地。
2. 将旧版程序 ```config/db.php``` 文件复制到新版程序的 ```config``` 文件夹，如果你使用的是本地储存策略，文件是储存在本地的，请注意也要将你旧版本的图片资源移动到新程序对应的目录。
3. 删除旧版本程序所有文件，上传最新版程序到站点根目录即可(这一步也可以直接覆盖，但会有残留文件，不选择覆盖的话建议先打包备份旧版本)。
4. 使用管理员账号登录，访问任意页面会跳转到升级数据库结构页面，根据提示操作即可。

FAQ：如果覆盖更新文件后无法重定向到更新页面，或首页出现错误，请直接访问  ```http://域名/install/update.html``` 进行更新。

如何修改网站运行目录？
---
默认程序的入口文件在 ```public``` 目录下，所以需要把 public 目录设置为网站运行目录，这样做是为了：
> 入口文件位置的设计是为了让应用部署更安全，```public``` 目录为web可访问目录，其他的文件都可以放到非WEB访问目录下面。

而你如果安装时没有设置，使用 ```http://域名/public``` 的方式来访问站点，会导致 css 和 js 等静态资源无法获取。  
如果你 无法 或 不会 设置运行目录，可以将 public 目录下的所有文件和文件夹（包括 .htaccess 文件）移动到根目录
(和 ```application``` 文件夹同级)即可，尽管我们不推荐你这么做，这样会导致应用程序核心文件暴露在外。

移动文件以后，打开根目录 ```index.php``` 文件，修改如下：
```php
<?php

// [ 应用入口文件 ]
namespace think;

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);

// 加载基础文件
require __DIR__ . '/thinkphp/base.php';

 // 执行应用并响应
Container::get('app')->bind('index')->run()->send();
 ```

注意：请不要使用记事本打开修改，修改完成后保存即可。

联系我
---
- QQ：1591788658
- Email: i@wispx.cn
- Blog：[https://www.wispx.cn](https://www.wispx.cn)

捐赠
---
Lsky Pro 的开发和更新等，都是作者在空余时间独立开发，并免费开源使用，如果您认可我的作品，并且觉得对你有所帮助我们愿意接受来自各方面的捐赠😃。  
![支付宝](./public/static/app/images/demo/alipay.png?t=201911251121) 
![微信](./public/static/app/images/demo/wechat.jpeg?t=201911251121)  
左图支付宝，右图微信  

鸣谢
---
- ThinkPHP
- Jquery
- BootStrap
- Mdui
- viewer.js
- context.js

开源许可
---
[GPL 3.0](https://opensource.org/licenses/GPL-3.0)

Copyright (c) 2018-present Lsky Pro.
