<?php

require(__DIR__ . DIRECTORY_SEPARATOR . 'cos-autoloader.php');

$cosClient = new Qcloud\Cos\Client(array('region' => getenv('COS_REGION'),
    'credentials'=> array(
        'appId' => getenv('COS_APPID'),
        'secretId'    => getenv('COS_KEY'),
        'secretKey' => getenv('COS_SECRET'))));

//bucket的命名规则为{name}-{appid} ，此处填写的存储桶名称必须为此格式
$bucket = 'lewzylu02-1252448703';
$key = 'a.txt';
$local_path = "E:/a.txt";

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


# 删除object
## deleteObject
try {
    $result = $cosClient->deleteObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'VersionId' => 'string'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 删除多个object
## deleteObjects
try {
    $result = $cosClient->deleteObjects(array(
        'Bucket' => 'string',
        'Objects' => array(
            array(
                'Key' => $key,
                'VersionId' => 'string',
            ),
            // ... repeated
        ),
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 获取object信息
## headObject
/*
 * 可代替isObjectExist接口，查询object是否存在
 */
try {
    $result = $cosClient->headObject(array(
        'Bucket' => $bucket,
        'Key' => '11',
        'VersionId' =>'111',
        'ServerSideEncryption' => 'AES256'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 获取bucket列表
## listBuckets
try {
    $result = $cosClient->listBuckets();
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 创建bucket
## createBucket
try {
    $result = $cosClient->createBucket(array('Bucket' => $bucket));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 删除bucket
## deleteBucket
try {
    $result = $cosClient->deleteBucket(array(
        'Bucket' => $bucket));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 获取bucket信息
## headBucket
/*
 * 可代替isBucketExist接口，查询bucket是否存在
 */
try {
    $result = $cosClient->headBucket(array(
        'Bucket' => $bucket));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 列出bucket下的object
## listObjects
### 列出所有object
/*
 * 该接口一次最多列出1000个，需要列出所有请参考其他服务中的清空并删除bucket接口
 */
try {
    $result = $cosClient->listObjects(array(
        'Bucket' => $bucket));
    foreach ($result['Contents'] as $rt){
        print_r($rt);
    }
} catch (\Exception $e) {
    echo "$e\n";
}

### 列出带有前缀的object
try {
    $result = $cosClient->listObjects(array(
        'Bucket' => $bucket,
        'Prefix' => 'string'));
    foreach ($result['Contents'] as $rt){
        print_r($rt);
    }
} catch (\Exception $e) {
    echo "$e\n";
}


# 获取bucket地域
## getBucketLocation
try {
    $result = $cosClient->getBucketLocation(array(
        'Bucket' => 'lewzylu02',
    ));
} catch (\Exception $e) {
    echo "$e\n";
};


# 多版本相关
## putBucketVersioning(开启关闭某个bucket的多版本)
try {
    $result = $cosClient->putBucketVersioning(
        array('Bucket' => $bucket,
            'Status' => 'Enabled'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## ListObjectVersions(列出多版本object)
/*
 * 同名文件会出现多个版本
 */
try {
    $result = $cosClient->ListObjectVersions(
        array('Bucket' => $bucket,
            'Prefix'=>'string')
    );
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## getBucketVersioning(获取某个bucket多版本属性)
try {
    $result = $cosClient->getBucketVersioning(
        array('Bucket' => $bucket));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# ACL相关
## putBucketACL(设置bucketACL)
try {
    $result = $cosClient->PutBucketAcl(array(
        'Bucket' => $bucket,
        'Grants' => array(
            array(
                'Grantee' => array(
                    'DisplayName' => 'qcs::cam::uin/327874225:uin/327874225',
                    'ID' => 'qcs::cam::uin/327874225:uin/327874225',
                    'Type' => 'CanonicalUser',
                ),
                'Permission' => 'FULL_CONTROL',
            ),
            // ... repeated
        ),
        'Owner' => array(
            'DisplayName' => 'qcs::cam::uin/3210232098:uin/3210232098',
            'ID' => 'qcs::cam::uin/3210232098:uin/3210232098',
        ),));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## getBucketACL(获取bucketACL)
try {
    $result = $cosClient->GetBucketAcl(array(
        'Bucket' => $bucket,));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## putObjectACL(设置objectACL)
try {
    $result = $cosClient->putObjectACL(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Grants' => array(
            array(
                'Grantee' => array(
                    'DisplayName' => 'qcs::cam::uin/327874225:uin/327874225',
                    'ID' => 'qcs::cam::uin/327874225:uin/327874225',
                    'Type' => 'CanonicalUser',
                ),
                'Permission' => 'FULL_CONTROL',
            ),
            // ... repeated
        ),
        'Owner' => array(
            'DisplayName' => 'qcs::cam::uin/3210232098:uin/3210232098',
            'ID' => 'qcs::cam::uin/3210232098:uin/3210232098',
        ),));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## getObjectACL(获取objectACL)
try {
    $result = $cosClient->GetObjectAcl(array(
        'Bucket' => $bucket,
        'Key' => $key,));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 生命周期相关
## putBucketLifecycle(设置bucket生命周期)
try {
    $result = $cosClient->putBucketLifecycle(array(
        'Bucket' => $bucket,
        'Rules' => array(
            array(
                'Expiration' => array(
                    'Days' => 1000,
                ),
                'ID' => 'id1',
                'Filter' => array(
                    'Prefix' => 'documents/'
                ),
                'Status' => 'Enabled',
                'Transitions' => array(
                    array(
                        'Days' => 200,
                        'StorageClass' => 'NEARLINE'),
                ),
            ),
        )));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## getBucketLifecycle(获取bucket生命周期)
try {
    $result = $cosClient->getBucketLifecycle(array(
        'Bucket' =>$bucket,
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## deleteBucketLifecycle(删除bucket生命周期)
try {
    $result = $cosClient->deleteBucketLifecycle(array(
        'Bucket' =>$bucket,
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


# 跨域相关
## putBucketCors(设置bucket跨域)
try {
    $result = $cosClient->putBucketCors(array(
        'Bucket' => $bucket,
        'CORSRules' => array(
            array(
                'ID' => '1234',
                'AllowedHeaders' => array('*'),
                'AllowedMethods' => array('PUT'),
                'AllowedOrigins' => array('http://www.qq.com', ),
            ),
        ),
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## getBucketCors(获取bucket跨域信息)
try {
    $result = $cosClient->getBucketCors(array(
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## deleteBucketCors(删除bucket跨域)
try {
    $result = $cosClient->deleteBucketCors(array(
        // Bucket is required
        'Bucket' => $bucket,
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

# 复制
## copyobject(简单复制)
/*
 * 将{bucket},{region},{cos_path},{versionId}替换成复制源的真实信息
 */
try {
    $result = $cosClient->copyObject(array(
        'Bucket' => $bucket,
        'CopySource' => '{bucket}.cos.{region}.myqcloud.com/{cos_path}?versionId={versionId}',
        'Key' => 'string',
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

## Copy(分块并发复制)
/*
 * 将{bucket},{region},{cos_path},{versionId}替换成复制源的真实信息
 */
try {
    $result = $cosClient->Copy($bucket = $bucket,
        $key = $key,
        $copysource = '{bucket}.cos.{region}.myqcloud.com/{cos_path}',
        $options = array('VersionId'=>'{versionId}'));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

# 恢复归档文件
## restoreObject
try {
    $result = $cosClient->restoreObject(array(
        'Bucket' => $bucket,
        'Key' => $key,
        'Days' => 7,
        'CASJobParameters' => array(
            'Tier' =>'Bulk'
        )
    ));
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}

# 其他服务
## 列出某bucket下所有的object
try {
    $prefix='';
    $marker='';
    while(True){
        $result = $cosClient->ListObjects(
            array('Bucket' => $bucket,
                'Marker' => $marker,
                'MaxKeys' => 1000));
        foreach ($result['Contents'] as $rt) {
            print_r($rt['Key']." ");
            /*
             * 使用下面的代码可以删除全部object
             */
//            try {
//                $result = $cosClient->deleteobjects(array(
//                    'Bucket' => $bucket,
//                    'Key' => $rt['Key']));
//                print_r($result);
//            } catch (\Exception $e) {
//                echo "$e\n";
//            }
        }
        $marker = $result['NextMarker'];
        if (!$result['IsTruncated']){
            break;
        }
    }
} catch (\Exception $e) {
    echo "$e\n";
}

## 删除所有因上传失败而产生的分块
/*
 * 可以清理掉因分块上传失败
 */
try {
    while(True){
        $result = $cosClient->ListMultipartUploads(
            array('Bucket' => $bucket,
                'Prefix' => ''));
        if (count($result['Uploads']) == 0){
            break;
        }
        foreach ($result['Uploads'] as $upload) {
            try {
                $rt = $cosClient->AbortMultipartUpload(
                    array('Bucket' => $bucket,
                        'Key' => $upload['Key'],
                        'UploadId' => $upload['UploadId']));
                print_r($rt);
            } catch (\Exception $e) {
                print_r($e);
            }
        }
    }
} catch (\Exception $e) {
    echo "$e\n";
}

## 分块上传断点重传
/*
 * 仅适用于分块上传失败的情况
 * 需要填写上传失败的uploadId
 */
try {
    $result = $cosClient->resumeUpload(
        $bucket = $bucket,
        $key = $key,
        $body = fopen("E:/test.txt",'rb'),
        $uploadId = '152448808231afdf221eb558ab15d1e455d2afd025c5663936142fdf5614ebf6d1668e2eda');
    print_r($result);
} catch (\Exception $e) {
    echo "$e\n";
}


## 删除某些前缀的空bucket
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

try {
    $result = $cosClient->listBuckets();
    foreach ($result['Buckets'] as $bucket){
        $region = $bucket['Location'];
        $name = $bucket['Name'];
        if (startsWith($name,'lewzylu')){
            try {
                $cosClient2 = new Qcloud\Cos\Client(array('region' => $region,
                    'credentials'=> array(
                        'secretId'    => getenv('COS_KEY'),
                        'secretKey' => getenv('COS_SECRET'))));
                $rt = $cosClient2->deleteBucket(array('Bucket' => $name));
                print_r($rt);
            }catch (\Exception $e) {
            }
        }


    }
} catch (\Exception $e) {
    echo "$e\n";
}