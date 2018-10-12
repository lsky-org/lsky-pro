<p align="center">
    <a href="./public/static/app/images/logo.png" target="_blank">
        <img width="350" src="./public/static/app/images/logo.png">
    </a>
</p>
<h1>Lsky Pro - Your photo album on the cloud.</h1>

#### 简介：
------------
Lsky Pro，为个人站长、开发者、写博文爱好者开发的图床程序。同时可用作网络云相册。

#### 主要特性
------------
- 支持第三方云储存，支持本地、阿里云OSS、腾讯云COS、七牛云、又拍云。
- 支持多图上传、拖拽上传、上传预览、全屏预览、页面响应式布局。
- 简洁的图片管理功能，支持鼠标右键、单选多选等操作。
- 强大的图片预览功能，支持响应式。
- 支持全局配置用户初始剩余储存空间、支持单个设置用户剩余储存空间。
- 支持一键复制图片外链、二维码扫描链接。

#### 安装需求：
------------
* PHP版本 &ge; 5.6
* Mysqli
* Curl拓展
* Zip拓展
* Rewrite

#### 安装教程
------------
1. 下载兰空，上传至web运行环境，解压。
2. 设置运行目录为 public。
3. 配置Rewrite规则：
    ##### Nginx：
    <pre>
    location / {
        if (!-e $request_filename) {
        	rewrite ^(.*)$ /index.php?s=$1 last; break;
    	}
    }
    </pre>

    ##### Apache:
    Apache直接使用.htaccess即可

4. 访问首页，未安装自动跳转至安装页面，根据页面提示安装即可。
5. 安装完成以后请设置runtime目录0777权限，如果你使用本地存储，public 目录也需要设置为0777权限

#### 联系我
------------
QQ：1591788658<br>
Email: 1591788658@qq.com<br>
Blog: <a target="_block" href="http://www.wispx.cn">www.wispx.cn</a>

#### 鸣谢
------------
- ThinkPHP
- Jquery
- BootStrap
- Mdui
- viewer.js
- context.js

#### 开源许可
------------
<a target="_block" href="https://opensource.org/licenses/GPL-3.0">GPL 3.0</a>

Copyright (c) 2017 Wisp X.
