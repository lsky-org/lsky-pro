# COS-PHP-SDK-V5
腾讯云COS-PHP-SDK-V5（[XML API](https://cloud.tencent.com/document/product/436/7751)）

[![Total Downloads](https://img.shields.io/packagist/dt/qcloud/cos-sdk-v5.svg?style=flat)](https://packagist.org/packages/qcloud/cos-sdk-v5)
[![Build Status](https://travis-ci.org/tencentyun/cos-php-sdk-v5.svg?branch=master)](https://travis-ci.org/tencentyun/cos-php-sdk-v5)

## 开发准备
### SDK 获取
#### 1、github
```php
#在github中获取代码
https://github.com/tencentyun/cos-php-sdk-v5
```
将源代码放入您的项目目录下即可使用
#### 2、composer
在项目目录下，新建一个composer.json的文件，内容如下
```php
#利用composer下载
{
    "require": {
        "qcloud/cos-sdk-v5": ">=1.0"
    }
}
```
然后使用下面的命令进行安装
```
composer install
```
## 快速入门 
```
可参照Demo程序，详见https://github.com/tencentyun/cos-php-sdk-v5/blob/master/sample.php
```
### 配置文件
```php
#这里请填写根路径下cos-autoloader.php文件所在的相对路径
require('/path/to/cos-autoloader.php');
#如果使用composer安装,则可以填写composer生成的autoload.php文件的相对路径
#require('/path/to/autoload.php')

$cosClient = new Qcloud\Cos\Client(array('region' => getenv('COS_REGION'),
    'credentials'=> array(
        'secretId'    => getenv('COS_KEY'),
        'secretKey' => getenv('COS_SECRET'))));
```
### 上传文件
* 使用putObject接口上传文件(最大5G)
* 使用Upload接口分块上传文件

```php
# 上传文件
## putObject(上传接口，最大支持上传5G文件)
### 上传内存中的字符串
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
    $result = $cosClient->upload(
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

## 预签名上传createPresignedUrl
## 获取带有签名的url
### 简单上传预签名
try {
    #此处可以替换为其他上传接口
    $command = $cosClient->getCommand('putObject', array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => '' //Body可以任意
    ));
    $signedUrl = $command->createPresignedUrl('+10 minutes');
    echo ($signedUrl);
} catch (\Exception $e) {
    echo "$e\n";
}

### 分块上传预签名
try {
    #此处可以替换为其他上传接口
    $command = $cosClient->getCommand('uploadPart', array(
        'Bucket' => $bucket,
        'Key' => $key,
        'UploadId' => $uploadId,
        'PartNumber' => '1',
        'Body' => '' //Body可以任意
    ));
    $signedUrl = $command->createPresignedUrl('+10 minutes');
    echo ($signedUrl);
} catch (\Exception $e) {
    echo "$e\n";
}


# 下载文件
## getObject(下载文件)
### 下载到内存
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
    echo ($signedUrl);
} catch (\Exception $e) {
    echo "$e\n";
}


```
