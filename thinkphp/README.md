![](https://box.kancloud.cn/5a0aaa69a5ff42657b5c4715f3d49221) 

ThinkPHP 5.1（LTS） —— 12载初心，你值得信赖的PHP框架
===============

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/top-think/framework/badges/quality-score.png?b=5.1)](https://scrutinizer-ci.com/g/top-think/framework/?branch=5.1)
[![Build Status](https://travis-ci.org/top-think/framework.svg?branch=master)](https://travis-ci.org/top-think/framework)
[![Total Downloads](https://poser.pugx.org/topthink/framework/downloads)](https://packagist.org/packages/topthink/framework)
[![Latest Stable Version](https://poser.pugx.org/topthink/framework/v/stable)](https://packagist.org/packages/topthink/framework)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D5.6-8892BF.svg)](http://www.php.net/)
[![License](https://poser.pugx.org/topthink/framework/license)](https://packagist.org/packages/topthink/framework)

ThinkPHP5.1对底层架构做了进一步的改进，减少依赖，其主要特性包括：

 + 采用容器统一管理对象
 + 支持Facade
 + 更易用的路由
 + 注解路由支持
 + 路由跨域请求支持
 + 验证类增强
 + 配置和路由目录独立
 + 取消系统常量
 + 类库别名机制
 + 模型和数据库增强
 + 依赖注入完善
 + 支持PSR-3日志规范
 + 中间件支持（`V5.1.6+`）
 + 支持`Swoole`/`Workerman`运行（`V5.1.18+`）

官方已经正式宣布`5.1.27`版本为LTS版本。

### 废除的功能：

 + 聚合模型
 + 内置控制器扩展类
 + 模型自动验证

> ThinkPHP5.1的运行环境要求PHP5.6+。


## 安装

使用composer安装

~~~
composer create-project topthink/think tp
~~~

启动服务

~~~
cd tp
php think run
~~~

然后就可以在浏览器中访问

~~~
http://localhost:8000
~~~

更新框架
~~~
composer update topthink/framework
~~~


## 在线手册

+ [完全开发手册](https://www.kancloud.cn/manual/thinkphp5_1/content)
+ [升级指导](https://www.kancloud.cn/manual/thinkphp5_1/354155) 

## 命名规范

`ThinkPHP5.1`遵循PSR-2命名规范和PSR-4自动加载规范。

## 参与开发

请参阅 [ThinkPHP5 核心框架包](https://github.com/top-think/framework)。

## 版权信息

ThinkPHP遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2018 by ThinkPHP (http://thinkphp.cn)

All rights reserved。

ThinkPHP® 商标和著作权所有者为上海顶想信息科技有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)
