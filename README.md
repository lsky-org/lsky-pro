<img align="right" width="100" src="https://avatars.githubusercontent.com/u/100565733?s=200" alt="Lsky Pro Logo"/>

<h1 align="left"><a href="https://www.lsky.pro">Lsky Pro</a></h1>

☁ Your photo album on the cloud.

[![PHP](https://img.shields.io/badge/PHP->=8.0-orange.svg)](http://php.net)
[![Release](https://img.shields.io/github/v/release/lsky-org/lsky-pro)](https://github.com/lsky-org/lsky-pro/releases)
[![Issues](https://img.shields.io/github/issues/lsky-org/lsky-pro)](https://github.com/lsky-org/lsky-pro/issues)
[![Code size](https://img.shields.io/github/languages/code-size/lsky-org/lsky-pro?color=blueviolet)](https://github.com/lsky-org/lsky-pro)
[![Repo size](https://img.shields.io/github/repo-size/lsky-org/lsky-pro?color=eb56fd)](https://github.com/lsky-org/lsky-pro)
[![Last commit](https://img.shields.io/github/last-commit/lsky-org/lsky-pro/dev)](https://github.com/lsky-org/lsky-pro/commits/dev)
[![License](https://img.shields.io/badge/license-GPL_V3.0-yellowgreen.svg)](https://github.com/lsky-org/lsky-pro/blob/master/LICENSE)

[官网](https://www.lsky.pro) &middot;
[文档](https://docs.lsky.pro) &middot;
[社区](https://github.com/lsky-org/lsky-pro/discussions) &middot;
[演示](https://pic.vv1234.cn) &middot;
[Telegram 群组](https://t.me/lsky_pro)

> master 分支为未安装三方拓展的版本，通常包含了最新未发布版本的一些实验性新特性和修复补丁，正式版本请点击 [这里](https://github.com/lsky-org/lsky-pro/releases) 下载。  
> 发现 bug 请提交 [issues](https://github.com/lsky-org/lsky-pro/issues) (提问前建议阅读[提问的智慧](https://github.com/ryanhanwu/How-To-Ask-Questions-The-Smart-Way/blob/main/README-zh_CN.md))  
> 有任何想法、建议、或分享，请移步 [社区](https://github.com/lsky-org/lsky-pro/discussions)

![看不见图片请使用科学上网](https://user-images.githubusercontent.com/22728201/157242302-bfbd04a0-fb30-4241-800e-cc2b1dad9b19.png)
![看不见图片请使用科学上网](https://user-images.githubusercontent.com/22728201/157242314-5716d578-fee5-4083-8d91-0d98cb2545d9.png)

### 📌 TODO
* [x] 支持`本地`等多种第三方云储存 `AWS S3`、`阿里云 OSS`、`腾讯云 COS`、`七牛云`、`又拍云`、`SFTP`、`FTP`、`WebDav`、`Minio`
* [x] 多种数据库驱动支持，`MySQL 5.7+`、`PostgreSQL 9.6+`、`SQLite 3.8.8+`、`SQL Server 2017+`
* [x] 支持配置使用多种缓存驱动，`Memcached`、`Redis`、`DynamoDB`、等其他关系型数据库，默认以文件的方式缓存
* [x] 多图上传、拖拽上传、粘贴上传、动态设置策略上传、复制、一键复制链接
* [x] 强大的图片管理功能，瀑布流展示，支持鼠标右键、单选多选、重命名等操作
* [x] 自由度极高的角色组配置，可以为每个组配置多个储存策略，同时储存策略可以配置多个角色组
* [x] 可针对角色组设置上传文件、文件夹路径命名规则、上传频率限制、图片审核等功能
* [x] 支持图片水印、文字水印、水印平铺、设置水印位置、X/y 轴偏移量设置、旋转角度等
* [x] 支持通过接口上传、管理图片、管理相册
* [x] 支持在线增量更新、跨版本更新
* [x] 图片广场

### 🛠 安装要求
- PHP >= 8.0.2
- BCMath PHP 扩展
- Ctype PHP 扩展
- DOM PHP 拓展
- Fileinfo PHP 扩展
- JSON PHP 扩展
- Mbstring PHP 扩展
- OpenSSL PHP 扩展
- PDO PHP 扩展
- Tokenizer PHP 扩展
- XML PHP 扩展
- Imagick 拓展
- exec、shell_exec 函数
- readlink、symlink 函数
- putenv、getenv 函数
- chmod、chown、fileperms 函数

### 😋 鸣谢
- [Laravel](https://laravel.com)
- [Tailwindcss](https://tailwindcss.com)
- [Fontawesome](https://fontawesome.com)
- [Echarts](https://echarts.apache.org)
- [Intervention/image](https://github.com/Intervention/image)
- [league/flysystem](https://flysystem.thephpleague.com)
- [overtrue](https://github.com/overtrue)
- [Jquery](https://jquery.com)
- [jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload)
- [Alpinejs](https://alpinejs.dev/)
- [Viewer.js](https://github.com/fengyuanchen/viewerjs)
- [DragSelect](https://github.com/ThibaultJanBeyer/DragSelect)
- [Justified-Gallery](https://github.com/miromannino/Justified-Gallery)
- [Clipboard.js](https://github.com/zenorocha/clipboard.js)

### 💰 捐赠
Lsky Pro 的开发和更新等，都是作者在业余时间独立开发，并免费开源使用，如果您认可我的作品，并且觉得对你有所帮助我愿意接受来自各方面的捐赠😃。
<table width="100%">
    <tr>
        <th>支付宝</th>
        <th>微信</th>
    </tr>
    <tr>
        <td><img alt="看不见图片请使用科学上网" src="https://raw.githubusercontent.com/lsky-org/lsky-pro/82988ebe2edd32264d609b26bf9132b3dce7c39e/public/static/app/images/demo/alipay.png"></td>
        <td><img alt="看不见图片请使用科学上网" src="https://raw.githubusercontent.com/lsky-org/lsky-pro/82988ebe2edd32264d609b26bf9132b3dce7c39e/public/static/app/images/demo/wechat.jpeg"></td>
    </tr>
</table>

### 🤩 Stargazers over time
[![Stargazers over time](https://starchart.cc/lsky-org/lsky-pro.svg)](https://starchart.cc/lsky-org/lsky-pro)

### 📧 联系我
- Email: i@wispx.cn

### 📃 开源许可
[GPL 3.0](https://opensource.org/licenses/GPL-3.0)

Copyright (c) 2018-present Lsky Pro.

