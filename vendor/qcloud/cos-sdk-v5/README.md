# COS-PHP-SDK-V5
腾讯云COS-PHP-SDK-V5（[XML API](https://cloud.tencent.com/document/product/436/7751)）

[![Total Downloads](https://img.shields.io/packagist/dt/qcloud/cos-sdk-v5.svg?style=flat)](https://packagist.org/packages/qcloud/cos-sdk-v5)
[![Build Status](https://travis-ci.org/tencentyun/cos-php-sdk-v5.svg?branch=master)](https://travis-ci.org/tencentyun/cos-php-sdk-v5)

## 环境准备
*   PHP 5.3+
    您可以通过`php -v`命令查看当前的PHP版本。

*   cURL 扩展
    您可以通过`php -m`命令查看cURL扩展是否已经安装好。

> **说明：**
> 
> *   Ubuntu系统中，您可以使用apt-get包管理器安装PHP的cURL扩展 `sudo apt-get install php-curl`。
> *   CentOS系统中，您可以使用yum包管理器安装PHP的cURL扩展 `sudo yum install php-curl`。

### SDK 安装
有三种方式安装SDK：
* Composer方式
* Phar方式
* 源码方式
#### 1、Composer方式
推荐用户使用 Composer 安装 cos-php-sdk-v5，Composer是PHP的依赖管理工具，允许您声明项目所需的依赖，然后自动将它们安装到您的项目中。

> **提示**：您可以在 [getcomposer.org](getcomposer.org) 上找到更多关于如何安装Composer，配置自动加载以及用于定义依赖项的其他最佳实践。

**使用 Composer 安装 COS-PHP-SDK-V5**
1. 打开终端
2. 下载 Composer
```
curl -sS https://getcomposer.org/installer | php
```
3. 创建一个名为`composer.json`的文件，内容为
```
{
    "require": {
        "qcloud/cos-sdk-v5": "1.*"
    }
}
```
4. 使用 Composer 安装
```
php composer.phar install
```
使用该命令后会在当前目录中创建一个vendor文件夹，里面包含 sdk 的依赖库和一个 autoload.php 脚本，方便用户在自己的项目中调用。
5. 通过 autoloader 脚本调用cos-php-sdk-v5
```
require '/path/to/sdk/vendor/autoload.php';
```
现在您的项目已经可以使用COS的V5 SDK了。


#### 2、Phar方式
phar方式安装SDK的步骤如下：

1.  在[github发布页面](https://github.com/tencentyun/cos-php-sdk-v5/releases)下载相应的phar文件

2.  在代码中引入phar文件：
```
require  '/path/to/cos-sdk-v5.phar';
```

#### 3、源码方式
源码方式安装SDK的步骤如下：

1.  在[github发布页面](https://github.com/tencentyun/cos-php-sdk-v5/releases)下载相应的zip文件

2.  解压通过 autoload.php 脚本加载sdk
```
require '/path/to/sdk/vendor/autoload.php';
```


## 快速入门 
可参照Demo程序，详见 [sample.php](https://github.com/tencentyun/cos-php-sdk-v5/blob/master/sample.php)
## 接口文档
php sdk 接口文档，详见https://cloud.tencent.com/document/product/436/12267
### 配置文件
```php
$cosClient = new Qcloud\Cos\Client(array('region' => 'COS_REGION',
    'credentials'=> array(
        'secretId'    => 'COS_KEY',
        'secretKey' => 'COS_SECRET')));
```
### 上传文件
* 使用putObject接口上传文件(最大5G)
* 使用Upload接口分块上传文件
```php
# 上传文件
## putObject(上传接口，最大支持上传5G文件)
### 上传内存中的字符串
//bucket 的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
try {
    $result = $cosClient->putObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => 'Hello World!'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

### 上传文件流
try {
    $result = $cosClient->putObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen($local_path, 'rb')));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

### 设置header和meta
try {
    $result = $cosClient->putObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen($local_path, 'rb'),
        'ACL' => 'string',
        'CacheControl' => 'string',
        'ContentDisposition' => 'string',
        'ContentEncoding' => 'string',
        'ContentLanguage' => 'string',
        'ContentLength' => integer,
        'ContentType' => 'string',
        'Expires' => 'mixed type: string (date format)|int (unix timestamp)|\DateTime',
        'GrantFullControl' => 'string',
        'GrantRead' => 'string',
        'GrantWrite' => 'string',
        'Metadata' => array(
            'string' => 'string',
        ),
        'StorageClass' => 'string'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## Upload(高级上传接口，默认使用分块上传最大支持50T)
### 上传内存中的字符串
try {
    $result = $cosClient->Upload(
        $bucket = $bucket,
        $key = $key,
        $body = 'Hello World!');
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

### 上传文件流
try {
    $result = $cosClient->Upload(
        $bucket = $bucket,
        $key = $key,
        $body = fopen($local_path, 'rb'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

### 设置header和meta
try {
    $result = $cosClient->Upload(
        $bucket= $bucket,
        $key = $key,
        $body = fopen($local_path, 'rb'),
        $options = array(
            'ACL' => 'string',
            'CacheControl' => 'string',
            'ContentDisposition' => 'string',
            'ContentEncoding' => 'string',
            'ContentLanguage' => 'string',
            'ContentLength' => integer,
            'ContentType' => 'string',
            'Expires' => 'mixed type: string (date format)|int (unix timestamp)|\DateTime',
            'GrantFullControl' => 'string',
            'GrantRead' => 'string',
            'GrantWrite' => 'string',
            'Metadata' => array(
                'string' => 'string',
            ),
            'StorageClass' => 'string'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}
```

### 下载文件
* 使用getObject接口下载文件
* 使用getObjectUrl接口获取文件下载URL
```php
# 下载文件
## getObject(下载文件)
### 下载到内存
//bucket 的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
try {
    $result = $cosClient->getObject(array(
        'Bucket' => $bucket,
        'Key' => $key));
    echo($result['Body']);
} catch (\Exception $e) {
    echo "$e\n";
}

### 下载到本地
try {
    $result = $cosClient->getObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'SaveAs' => $local_path));
} catch (\Exception $e) {
    echo "$e\n";
}

### 指定下载范围
/*
 * Range 字段格式为 'bytes=a-b'
 */
try {
    $result = $cosClient->getObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Range' => 'bytes=0-10',
        'SaveAs' => $local_path));
} catch (\Exception $e) {
    echo "$e\n";
}

### 设置返回header
try {
    $result = $cosClient->getObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'ResponseCacheControl' => 'string',
        'ResponseContentDisposition' => 'string',
        'ResponseContentEncoding' => 'string',
        'ResponseContentLanguage' => 'string',
        'ResponseContentType' => 'string',
        'ResponseExpires' => 'mixed type: string (date format)|int (unix timestamp)|\DateTime',
        'SaveAs' => $local_path));
} catch (\Exception $e) {
    echo "$e\n";
}

## getObjectUrl(获取文件UrL)
try {
    $signedUrl = $cosClient->getObjectUrl($bucket, $key, '+10 minutes');
    echo $signedUrl;
} catch (\Exception $e) {
    print_r($e);
}
```
