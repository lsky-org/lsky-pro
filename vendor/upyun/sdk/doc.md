# SDK 文档

又拍云 php sdk 中所有封装的接口，均通过 `Upyun\Upyun` 类封装，后续新版本也会保持
该类方法向下兼容，sdk 中其他类及其方法不保证兼容性。如果有使用疑问欢迎提 [issues](https://github.com/upyun/php-sdk/issues)

## 方法列表

* [Upyun](#upyun)
    * [__construct](#__construct)
    * [setConfig](#setconfig) 更新服务配置
    * [write](#write) 上传一个文件到又拍云存储
    * [read](#read) 读取云存储文件/目录内容
    * [has](#has) 判断文件是否存在于又拍云存储
    * [info](#info) 获取云存储文件/目录的基本信息
    * [getMimetype](#getmimetype) 获取云存储文件类型
    * [delete](#delete) 删除文件或者目录
    * [createDir](#createdir) 创建目录
    * [deleteDir](#deletedir) 删除文件或者目录
    * [usage](#usage) 获取目录下存储使用量
    * [purge](#purge) 刷新缓存
    * [process](#process) 异步云处理
    * [queryProcessStatus](#queryprocessstatus) 查询异步云处理任务进度
    * [queryProcessResult](#queryprocessresult) 查询异步云处理任务结果

## Upyun

`Upyun\Upyun` 类实现了又拍云云存储和云处理的所有接口，通过该类可以实现文件上传、下载；图片视频等多媒体资源云处理。
本文档中，提到的"服务"是指又拍云文件加速回又拍云源类型的服务（即原先的存储类服务）。

* 命名空间: `\Upyun\Upyun`


### __construct

Upyun constructor.

```php
Upyun::__construct( \Upyun\Config $config )
```

**参数列表:**

- **\Upyun\Config** `$config` 
  服务配置

---

### setConfig

更新服务配置

```php
Upyun::setConfig( \Upyun\Config $config )
```

  当需要操作的新的服务时，使用该方法传入新的服务配置即可

**参数列表:**

- **\Upyun\Config** `$config`
  服务配置

---


### write

上传一个文件到又拍云存储

```php
Upyun::write( string $path, string|resource $content, array $params = array(), boolean $withAsyncProcess = false )
```

  上传的文件格式支持文件流或者字符串方式上传。除简单的文件上传外，针对多媒体资源（图片、音视频），还可以设置同步/异步预处理多媒体资源，例如：图片的裁剪缩放，音视频的转码截图等等众多又拍云强大的云处理功能


**参数列表:**


- **string** `$path`  
  被上传的文件在又拍云存储服务中保存的路径

- **string&#124;resource** `$content`  
  被上传的文件内容（字符串），或者打开该文件获得的文件句柄（文件流）。当上传本地大文件时，推荐使用文件流的方式上传

- **array** `$params`  
  上传文件时，附加的自定义参数。支持 Content-MD5 Content-Type Content-Secret 等，详见 [上传参数](http://docs.upyun.com/api/rest_api/#_2)，例如：
  - 设置文件[保护秘钥](http://docs.upyun.com/api/rest_api/#Content-Secret) `write($path, $content, array('Content-Secret' => 'my-secret'))`；
  - 添加[文件元信息](http://docs.upyun.com/api/rest_api/#metadata) `write($path, $content, array('X-Upyun-Meta-Foo' =>
  'bar'))`
  - [图片同步预处理](http://docs.upyun.com/cloud/image/#_5) `write($path, $content, array('x-gmkerl-thumb' => '/format/png'))`

- **boolean** `$withAsyncProcess`  
  默认为 `false`，当上传图片或者音视频资源时，可以设置该参数为 `true`，开启图片音视频的[异步处理功能](http://docs.upyun.com/api/form_api/#_6) ，例如：
  ```
  // 以下参数会将新上传的图片，再异步生成另一份 png 格式的图片，原图不受影响
  write($path, $content, array(
     'apps' => array(
         array(
             'name' => 'thumb',         //异步图片处理任务
             'x-gmkerl-thumb' => '/format/png', // 格式化图片为 png 格式
             'save_as': '/iamge/png/new.png',   // 处理成功后的图片保存路径
             'notify_url': 'http://your.notify.url'  // 异步任务完成后的回调地址
         )
     )
  ), true);
  ```


**返回值：**

若文件是图片则返回图片基本信息，如：`array('x-upyun-width' => 123, 'x-upyun-height' => 50, 'x-upyun-frames'
=> 1, 'x-upyun-file-type' => 'JPEG')`，否则返回空数组。当使用异步预处理功能时，返回结果为布尔值，成功为 `true`。



---


### read

读取云存储文件/目录内容

```php
Upyun::read( string $path, resource $saveHandler = NULL, array $params = array() )
```

  


**参数列表:**


- **string** `$path`  
  又拍云存储中的文件或者目录路径

- **resource** `$saveHandler`  
  文件内容写入本地文件流。例如 `$saveHandler = fopen('/local/file', 'w')
  `。当设置该参数时，将以文件流的方式，直接将又拍云中的文件写入本地的文件流，或其他可以写入的流

- **array** `$params`  
  可选参数，读取目录内容时，需要设置三个参数： `X-List-Iter` 分页开始位置（第一页不需要设置），`X-List-Limit` 获取的文件数量（默认 100，最大
  10000），`X-List-Order` 结果以时间正序或者倒序


**返回值：**

$return 当读取文件且没有设置 `$saveHandler` 参数时，返回一个字符串类型，表示文件内容；设置了 `$saveHandler` 参数时，返回布尔值
`true`。当读取目录时，返回一个数组，表示目录下的文件列表。目录下文件内容过多时，需要通过判断返回数组中的 `is_end` 属性，进行分页读取内容



---


### has

判断文件是否存在于又拍云存储

```php
Upyun::has( string $path )
```

  注意: 对刚删除的文件, 立即调用该方法可能会返回 true, 因为服务端执行删除操作后可能会有很短暂的延迟.


**参数列表:**


- **string** `$path`  
  云存储的文件路径


**返回值：**

存在时返回 `true`，否则返回 `false`



---


### info

获取云存储文件/目录的基本信息

```php
Upyun::info( string $path, array $otherHeaders)
```

  


**参数列表:**


- **string** `$path`  
  云存储的文件路径

- **string** `$otherHeaders`  
  设置了后，方法将返回其他 http header 中的信息，默认为空

**返回值：**

返回一个数组，默认包含以下 key
- `x-upyun-file-type` 当 $path 是目录时，值为 *folder*，当 $path 是文件时，值为 *file*，
- `x-upyun-file-size` 文件大小
- `x-upyun-file-date` 文件的创建时间



---

### getMimetype

获取云存储文件的文档类型

```php
Upyun::getMimetype( string $path )
```

  


**参数列表:**


- **string** `$path`  
  云存储的文件路径


**返回值：**

文档类型，e.g: `appcation/json`，获取失败返回空字符串



---


### delete

删除文件或者目录

```php
Upyun::delete( string $path, boolean $async = false )
```

  


**参数列表:**


- **string** `$path`  
  文件或目录在又拍云存储的路径

- **boolean** `$async`  
  是否异步删除，默认为 false，表示同步删除。当需要批量删除大量文件时，必须选择异步删除


**返回值：**

删除成功返回 true，否则 false



---


### createDir

创建目录

```php
Upyun::createDir( string $path )
```

  


**参数列表:**


- **string** `$path`  
  需要在又拍云存储创建的目录路径


**返回值：**

创建成功返回 true，否则返回 false



---


### deleteDir

删除文件或者目录

```php
Upyun::deleteDir( string $path )
```

  


**参数列表:**


- **string** `$path`  
  需要被删除的云存储文件或目录路径


**返回值：**

成功返回 true，否则 false



---


### usage

获取目录下存储使用量

```php
Upyun::usage( string $path = &#039;/&#039; )
```

  


**参数列表:**


- **string** `$path`  
  云存储目录路径，默认为根目录，表示整个云存储服务使用的空间大小


**返回值：**

存储使用量，单位字节



---


### purge

刷新缓存

```php
Upyun::purge( array|string $urls )
```

  


**参数列表:**


- **array&#124;string** `$urls`  
  需要刷新的文件 url 列表


**返回值：**

刷新失败的 url 列表，若全部刷新成功则为空数组



---


### process

异步云处理

```php
Upyun::process( array $tasks, string $type, string $source )
```

  该方法是基于[又拍云云处理](http://docs.upyun.com/cloud/) 服务实现，可以实现音视频的转码、切片、剪辑；文件的压缩解压缩；文件拉取功能
  
  注意：
  - 所有需要调用该方法处理的资源，必须已经上传到云存储服务
  - 使用 `process` 之前，必须配置 `config->processNotifyUrl`，否则会提交任务失败
  
例如视频转码：
```
 process(array(
   array(
       'type' => 'video',  // video 表示视频任务, audio 表示音频任务
       'avopts' => '/s/240p(4:3)/as/1/r/30', // 处理参数，`s` 表示输出的分辨率，`r` 表示视频帧率，`as` 表示是否自动调整分辨率
       'save_as' => '/video/240/new.mp4', // 新视频在又拍云存储的保存路径
   ),
   ... // 同时还可以添加其他任务
), Upyun::$PROCESS_TYPE_MEDIA, $source)
```
注意，被处理的资源需要已经上传到又拍云云存储


**参数列表:**


- **array** `$tasks`  
  需要处理的任务

- **string** `$type`  
  异步云处理任务类型，可选值:
  - `Upyun::$PROCESS_TYPE_MEDIA` 异步音视频处理
  - `Upyun::$PROCESS_TYPE_ZIP` 文件压缩
  - `Upyun::$PROCESS_TYPE_UNZIP` 文件解压
  - `Upyun::$PROCESS_TYPE_SYNC_FILE` 文件拉取
  - `Upyun::$PROCESS_TYPE_STITCH` 图片拼接

- **string** `$source`  
  可选参数，处理异步音视频任务时，需要传递该参数，表示需要处理的文件路径


**返回值：**

任务 ID，提交了多少任务，便会返回多少任务 ID，与提交任务的顺序保持一致。可以通过任务 ID 查询处理进度。格式如下：
```
array(
    '35f0148d414a688a275bf915ba7cebb2',
    '98adbaa52b2f63d6d7f327a0ff223348',
)
```



---


### queryProcessStatus

音视频预处理任务进度查询

```php
Upyun::queryProcessStatus( array $taskIds )
```

  根据 `process` 方法返回的任务 ID，通过该访问查询处理进度


**参数列表:**


- **array** `$taskIds`  
  任务 ID


**返回值：**

查询失败返回布尔值 `false`，否则返回每个任务的百分比进度信息，格式如下：
```
array(
    '35f0148d414a688a275bf915ba7cebb2' => 100,  // 100 表示任务完成
    'c3103189fa906a5354d29bd807e8dc51' => 35,
    '98adbaa52b2f63d6d7f327a0ff223348' => null, // null 表示任务未开始，或异常
)
```



---


### queryProcessResult

音视频预处理任务结果查询

```php
Upyun::queryProcessResult( array $taskIds )
```

  根据 `process` 方法返回的任务 ID，通过该访问查询处理结果，会包含每个任务详细信息


**参数列表:**


- **array** `$taskIds`  
  任务 ID


**返回值：**

查询失败返回 `false`，否则返回每个任务的处理结果，格式如下：
```
array(
   '9d9c32b63a1034834e77672c6f51f661' => array(
        'path' => array('/v2.mp4'),
        'signature' => '4042c1f07f546d28',
        'status_code' => 200,
        'service' => 'your_storage_service',
        'description' => 'OK',
        'task_id' => '9d9c32b63a1034834e77672c6f51f661',
        'timestamp' => 1472010684
   )
)
```



---




--------
> This document was automatically generated from source code comments on 2017-02-06 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
