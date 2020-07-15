<?php
/**
 * 又拍云 PHP-SDK
 */
namespace Upyun;

use Upyun\Api\Rest;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp;

/**
 * Class Upyun
 *
 * 又拍云云存储、云处理接口
 *
 * Upyun 类实现了又拍云云存储和云处理的所有接口，通过该类可以实现文件上传、下载；图片视频等多媒体资源云处理。
 * 本文档中，提到的"服务"是指又拍云文件加速回又拍云源类型的服务（即原先的存储类空间）。
 *
 * @package Upyun
 */
class Upyun
{

    /**
     * @var Config: 服务配置
     */
    protected $config;

    // 异步云处理任务类型
    /**
     * @var string 异步音视频处理
     */
    public static $PROCESS_TYPE_MEDIA = 'media';
    /**
     * @var string 文件压缩
     */
    public static $PROCESS_TYPE_ZIP = 'zip-file';
    /**
     * @var string 解压缩
     */
    public static $PROCESS_TYPE_UNZIP = 'unzip-file';
    /**
     * @var string 文件拉取
     */
    public static $PROCESS_TYPE_SYNC_FILE = 'sync-remote-file-to-upyun';
    /**
     * @var string 文档转换
     */
    public static $PROCESS_TYPE_CONVERT = 'document-type-convert';
    /**
     * @var string 异步图片拼接
     */
    public static $PROCESS_TYPE_STITCH = 'picture-stitch';

    /**
     * Upyun constructor.
     *
     * @param Config $config 服务配置
     */
    public function __construct(Config $config)
    {
        $this->setConfig($config);
    }

    /**
     * 配置服务信息
     *
     * 当需要操作的新的服务时，使用该方法传入新的服务配置即可
     *
     * @param Config $config 服务配置
     *
     * @return $this
     */
    public function setConfig(Config $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * 上传一个文件到又拍云存储
     *
     * 上传的文件格式支持文件流或者字符串方式上传。除简单的文件上传外，针对多媒体资源（图片、音视频），还可以设置同步/异步预处理多媒体资源，例如：图片的裁剪缩放，音视频的转码截图等等众多又拍云强大的云处理功能
     *
     * @param string $path 被上传的文件在又拍云存储服务中保存的路径
     * @param string|resource $content 被上传的文件内容（字符串），或者打开该文件获得的文件句柄（文件流）。当上传本地大文件时，推荐使用文件流的方式上传
     * @param array $params 上传文件时，附加的自定义参数。支持 Content-MD5 Content-Type Content-Secret 等，详见 [上传参数](http://docs.upyun.com/api/rest_api/#_2)，例如：
     * - 设置文件[保护秘钥](http://docs.upyun.com/api/rest_api/#Content-Secret) `write($path, $content, array('Content-Secret' => 'my-secret'))`；
     * - 添加[文件元信息](http://docs.upyun.com/api/rest_api/#metadata) `write($path, $content, array('X-Upyun-Meta-Foo' =>
     * 'bar'))`
     * - [图片同步预处理](http://docs.upyun.com/cloud/image/#_5) `write($path, $content, array('x-gmkerl-thumb' => '/format/png'))`
     * @param bool $withAsyncProcess  默认为 `false`，当上传图片或者音视频资源时，可以设置该参数为 `true`，开启图片音视频的[异步处理功能](http://docs.upyun.com/api/form_api/#_6) ，例如：
     *```
     * // 以下参数会将新上传的图片，再异步生成另一份 png 格式的图片，原图不受影响
     * write($path, $content, array(
     *    'apps' => array(
     *        array(
     *            'name' => 'thumb',         //异步图片处理任务
     *            'x-gmkerl-thumb' => '/format/png', // 格式化图片为 png 格式
     *            'save_as': '/iamge/png/new.png',   // 处理成功后的图片保存路径
     *            'notify_url': 'http://your.notify.url'  // 异步任务完成后的回调地址
     *        )
     *    )
     * ), true);
     *```
     *
     *
     *
     * @return array|bool 若文件是图片则返回图片基本信息，如：`array('x-upyun-width' => 123, 'x-upyun-height' => 50, 'x-upyun-frames'
     * => 1, 'x-upyun-file-type' => 'JPEG')`，否则返回空数组。当使用异步预处理功能时，返回结果为布尔值，成功为 `true`。
     *
     * @throws \Exception 上传失败时，抛出异常
     */
    public function write($path, $content, $params = array(), $withAsyncProcess = false)
    {
        if (!$content) {
            throw new \Exception('write content can not be empty.');
        }

        $upload = new Uploader($this->config);
        $response = $upload->upload($path, $content, $params, $withAsyncProcess);
        if ($withAsyncProcess) {
            return $response;
        }
        return Util::getHeaderParams($response->getHeaders());
    }

    /**
     * 读取云存储文件/目录内容
     *
     * @param string $path 又拍云存储中的文件或者目录路径
     * @param resource $saveHandler 文件内容写入本地文件流。例如 `$saveHandler = fopen('/local/file', 'w')
     * `。当设置该参数时，将以文件流的方式，直接将又拍云中的文件写入本地的文件流，或其他可以写入的流
     * @param array $params  可选参数，读取目录内容时，需要设置三个参数： `X-List-Iter` 分页开始位置（第一页不需要设置），`X-List-Limit` 获取的文件数量（默认 100，最大
     * 10000），`X-List-Order` 结果以时间正序或者倒序
     *
     * @return mixed $return 当读取文件且没有设置 `$saveHandler` 参数时，返回一个字符串类型，表示文件内容；设置了 `$saveHandler` 参数时，返回布尔值
     * `true`。当读取目录时，返回一个数组，表示目录下的文件列表。目录下文件内容过多时，需要通过判断返回数组中的 `is_end` 属性，进行分页读取内容
     *
     * @throws \Exception
     */
    public function read($path, $saveHandler = null, $params = array())
    {
        $req = new Rest($this->config);
        $response = $req->request('GET', $path)
            ->withHeaders($params)
            ->send();


        $params = Util::getHeaderParams($response->getHeaders());


        if (! isset($params['x-upyun-list-iter'])) {
            if (is_resource($saveHandler)) {
                Psr7\copy_to_stream($response->getBody(), Psr7\stream_for($saveHandler));
                return true;
            } else {
                return $response->getBody()->getContents();
            }
        } else {
            $files = Util::parseDir($response->getBody()->getContents());
            return array('files' => $files, 'is_end' => $params['x-upyun-list-iter'] === 'g2gCZAAEbmV4dGQAA2VvZg', 'iter' => $params['x-upyun-list-iter']);
        }
    }

    /**
     * 判断文件是否存在于又拍云存储
     *
     * 注意: 对刚删除的文件, 立即调用该方法可能会返回 true, 因为服务端执行删除操作后可能会有很短暂的延迟.
     *
     * @param string $path 云存储的文件路径
     *
     * @return bool 存在时返回 `true`，否则返回 `false`
     * @throws \Exception
     */
    public function has($path)
    {
        $req = new Rest($this->config);
        try {
            $req->request('HEAD', $path)
                            ->send();
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $statusCode = $e->getResponse()->getStatusCode();
            if ($statusCode === 404) {
                return false;
            } else {
                throw $e;
            }
        }

        return true;
    }

    /**
     * 获取云存储文件/目录的基本信息
     *
     * @param string $path 云存储的文件路径
     * @param array $otherHeaders 设置了后，方法将返回其他 http header 中的信息，默认为空
     *
     * @return array 返回一个数组，默认包含以下 key
     * - `x-upyun-file-type` 当 $path 是目录时，值为 *folder*，当 $path 是文件时，值为 *file*，
     * - `x-upyun-file-size` 文件大小
     * - `x-upyun-file-date` 文件的创建时间
     */
    public function info($path, $otherHeaders = array())
    {
        $req = new Rest($this->config);
        $response = $req->request('HEAD', $path)
                        ->send();
        return Util::getHeaderParams($response->getHeaders(), $otherHeaders);
    }

    /**
     * 获取文件的文档类型
     * @param string $path 云存储文件路径
     * @return string 文档类型，e.g: `appcation/json`，获取失败返回空字符串
     */
    public function getMimetype($path)
    {
        $params = $this->info($path, array('content-type'));
        if (isset($params['content-type'])) {
            return explode(';', $params['content-type'])[0];
        }
        return '';
    }

    /**
     * 删除文件或者目录
     *
     * @param string $path 文件或目录在又拍云存储的路径
     * @param bool $async 是否异步删除，默认为 false，表示同步删除。当需要批量删除大量文件时，必须选择异步删除
     *
     * @return bool 删除成功返回 true，否则 false
     * @throws \Exception 删除不存在的文件将会抛出异常
     */
    public function delete($path, $async = false)
    {
        $req = new Rest($this->config);
        $req->request('DELETE', $path);
        if ($async) {
            $req->withHeader('x-upyun-async', 'true');
        }
        $res = $req->send();
        return $res->getStatusCode() === 200;
    }

    /**
     * 创建目录
     *
     * @param string $path 需要在又拍云存储创建的目录路径
     *
     * @return bool 创建成功返回 true，否则返回 false
     * @throws \Exception
     */
    public function createDir($path)
    {
        $path = rtrim($path, '/') . '/';
        $req = new Rest($this->config);
        $res = $req->request('POST', $path)
            ->withHeader('folder', 'true')
            ->send();
        return $res->getStatusCode() === 200;
    }

    /**
     * 删除文件或者目录
     *
     * @param string $path 需要被删除的云存储文件或目录路径
     *
     * @return bool 成功返回 true，否则 false
     * @throws \Exception
     */
    public function deleteDir($path)
    {
        return $this->delete($path);
    }

    /**
     * 获取目录下存储使用量
     *
     * @param string $path 云存储目录路径，默认为根目录，表示整个云存储服务使用的空间大小
     * @return string 存储使用量，单位字节
     * @throws \Exception
     */
    public function usage($path = '/')
    {
        $path = rtrim($path, '/') . '/';
        $req = new Rest($this->config);
        $response = $req->request('GET', $path . '?usage')
            ->send();

        return $response->getBody()->getContents();
    }

    /**
     * 复制文件。只能操作文件，不能操作文件夹。
     *
     * @param string $source 源文件地址
     * @param string $target 目标文件地址
     * @return bool 复制成功返回 true，否则 false
     * @throws \Exception
     */
    public function copy($source, $target)
    {
        $source = '/' . $this->config->serviceName . '/' . ltrim($source, '/');
        $req = new Rest($this->config);
        $response = $req->request('PUT', $target)
            ->withHeader('X-Upyun-Copy-Source', $source)
            ->send();
        return util::isSuccess($response->getStatusCode());
    }

    /**
     * 移动文件。可以进行文件重命名、文件移动，只能操作文件，不能操作文件夹。
     *
     * @param string $source 源文件地址
     * @param string $target 目标文件地址
     * @return bool 移动成功返回 true，否则 false
     * @throws \Exception
     */
    public function move($source, $target)
    {
        $source = '/' . $this->config->serviceName . '/' . ltrim($source, '/');
        $req = new Rest($this->config);
        $response = $req->request('PUT', $target)
            ->withHeader('X-Upyun-Move-Source', $source)
            ->send();
        return util::isSuccess($response->getStatusCode());
    }

    /**
     * 刷新缓存
     *
     * @param array|string $urls 需要刷新的文件 url 列表
     *
     * @return array 刷新失败的 url 列表，若全部刷新成功则为空数组
     */
    public function purge($urls)
    {
        $urlString = $urls;
        if (is_array($urls)) {
            $urlString = implode("\n", $urls);
        }

        $client = new Client([
            'timeout' => $this->config->timeout
        ]);
        $response = $client->request('POST', Config::ED_PURGE, [
            'headers' =>  Signature::getPurgeSignHeader($this->config, $urlString),
            'form_params' => ['purge' => $urlString]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['invalid_domain_of_url'];
    }

    /**
     * 异步云处理
     *
     * 该方法是基于[又拍云云处理](http://docs.upyun.com/cloud/) 服务实现，可以实现音视频的转码、切片、剪辑；文件的压缩解压缩；文件拉取功能
     *
     * 注意：
     * - 所有需要调用该方法处理的资源，必须已经上传到云存储服务
     * - 使用 `process` 之前，必须配置 `config->processNotifyUrl`，否则会提交任务失败
     *
     * 例如视频转码：
     * ```
     *  process(array(
     *    array(
     *        'type' => 'video',  // video 表示视频任务, audio 表示音频任务
     *        'avopts' => '/s/240p(4:3)/as/1/r/30', // 处理参数，`s` 表示输出的分辨率，`r` 表示视频帧率，`as` 表示是否自动调整分辨率
     *        'save_as' => '/video/240/new.mp4', // 新视频在又拍云存储的保存路径
     *    ),
     *    ... // 同时还可以添加其他任务
     * ), Upyun::$PROCESS_TYPE_MEDIA, $source)
     * ```
     *
     * @param array $tasks 需要处理的任务
     * @param string $type 异步云处理任务类型，可选值:
     * - `Upyun::$PROCESS_TYPE_MEDIA` 异步音视频处理
     * - `Upyun::$PROCESS_TYPE_ZIP` 文件压缩
     * - `Upyun::$PROCESS_TYPE_UNZIP` 文件解压
     * - `Upyun::$PROCESS_TYPE_SYNC_FILE` 文件拉取
     * - `Upyun::$PROCESS_TYPE_STITCH` 图片拼接
     * @param string $source 可选参数，处理异步音视频任务时，需要传递该参数，表示需要处理的文件路径
     *
     * @return array 任务 ID，提交了多少任务，便会返回多少任务 ID，与提交任务的顺序保持一致。可以通过任务 ID 查询处理进度。格式如下：
     * ```
     * array(
     * '35f0148d414a688a275bf915ba7cebb2',
     * '98adbaa52b2f63d6d7f327a0ff223348',
     * )
     * ```
     * @throws \Exception
     */
    public function process($tasks, $type, $source = '')
    {
        $video = new Api\Pretreat($this->config);

        $options = array();
        switch($type) {
            case self::$PROCESS_TYPE_MEDIA:
                $options['accept'] = 'json';
                $options['source'] = $source;
                break;
            case self::$PROCESS_TYPE_ZIP:
                $options['app_name'] = 'compress';
                break;
            case self::$PROCESS_TYPE_UNZIP:
                $options['app_name'] = 'depress';
                break;
            case self::$PROCESS_TYPE_SYNC_FILE:
                $options['app_name'] = 'spiderman';
                break;
            case self::$PROCESS_TYPE_CONVERT:
                $options['app_name'] = 'uconvert';
                break;
            case self::$PROCESS_TYPE_STITCH:
                $options['app_name'] = 'jigsaw';
                break;
            default:
                throw new \Exception('upyun - not support process type.');

        }
        return $video->process($tasks, $options);
    }

    /**
     * 查询异步云处理任务进度
     *
     * 根据 `process` 方法返回的任务 ID，通过该访问查询处理进度
     *
     * @param array $taskIds 任务 ID
     *
     * @return bool|array 查询失败返回布尔值 `false`，否则返回每个任务的百分比进度信息，格式如下：
     * ```
     * array(
     *     '35f0148d414a688a275bf915ba7cebb2' => 100,  // 100 表示任务完成
     *     'c3103189fa906a5354d29bd807e8dc51' => 35,
     *     '98adbaa52b2f63d6d7f327a0ff223348' => null, // null 表示任务未开始，或异常
     * )
     * ```
     */
    public function queryProcessStatus($taskIds)
    {
        $video = new Api\Pretreat($this->config);
        return $video->query($taskIds, '/status/');
    }

    /**
     *  查询异步云处理任务结果
     *
     * 根据 `process` 方法返回的任务 ID，通过该访问查询处理结果，会包含每个任务详细信息
     * @param array $taskIds 任务 ID
     *
     * @return bool|mixed 查询失败返回 `false`，否则返回每个任务的处理结果，格式如下：
     * ```
     * array(
     *    '9d9c32b63a1034834e77672c6f51f661' => array(
     *         'path' => array('/v2.mp4'),
     *         'signature' => '4042c1f07f546d28',
     *         'status_code' => 200,
     *         'service_name' => 'your_storage_service',
     *         'description' => 'OK',
     *         'task_id' => '9d9c32b63a1034834e77672c6f51f661',
     *         'timestamp' => 1472010684
     *    )
     * )
     * ```
     */
    public function queryProcessResult($taskIds)
    {
        $video = new Api\Pretreat($this->config);
        return $video->query($taskIds, '/result/');
    }

    /**
     * 多个 m3u8 文件拼接
     * @param array $files  保存在又拍云云存储中的多个 m3u8 文件路径
     * @param string $saveAs 拼接生成的新 m3u8 文件保存路径
     *
     * @return array 见 [m3u8 拼接 - 响应](http://docs.upyun.com/cloud/sync_video/#_3)
     */
    public function m3u8Concat($files, $saveAs)
    {
        $p = new Api\SyncVideo($this->config);
        return $p->process([
            'm3u8s' => $files,
            'save_as' => $saveAs,
        ], '/m3u8er/concat');
    }

    /**
     * 单个 m3u8 文件剪辑
     * @param string $file 需要剪辑的又拍云云存储中的 m3u8 文件路径
     * @param string $saveAs 剪辑完成后新的 m3u8 文件保存路径
     * @param array $slice 需要被保留或删除的片段。
     * @param bool $isInclude 默认为 `true` 表示 `$slice` 参数描述的片段被保留，否则表示 `$slice` 参数描述的片段被删除
     * @param bool $index 指定 `$slice` 参数的格式，默认为 `false` 表示使用时间范围描述片段，单位秒：`[<开始时间>, <结束时间>]`；`true` 表示使用 `m3u8` 文件的分片序号，从 0 开始，这种方式可以一次对多个片段操作
     *
     * @return array 见 [m3u8 剪辑 - 响应](http://docs.upyun.com/cloud/sync_video/#_6)
     */
    public function m3u8Clip($file, $saveAs, $slice = array(), $isInclude = true, $index = false)
    {
        $p = new Api\SyncVideo($this->config);
        $params = [
            'm3u8' => $file,
            'save_as' => $saveAs,
            'index' => $index,
        ];
        if ($isInclude) {
            $params['include'] = $slice;
        } else {
            $params['exclude'] = $slice;
        }
        return $p->process($params, '/m3u8er/clip');
    }

    /**
     * 获取单个 m3u8 文件描述信息
     * @param string $file 又拍云云存储的中的 m3u8 文件路径
     *
     * @return array 见 [获取 m3u8 信息 - 响应](http://docs.upyun.com/cloud/sync_video/#_6)
     */
    public function m3u8Meta($file)
    {
        $p = new Api\SyncVideo($this->config);
        return $p->process([
            'm3u8' => $file,
        ], '/m3u8er/get_meta');
    }

    /**
     * 视频截图，可以对 mp4、m3u8 等视频文件进行截图
     * @param string $file 需要截图的又拍云云存储中的视频文件路径
     * @param string $saveAs 截图保存路径
     * @param string $point 截图时间点，`HH:MM:SS` 格式
     * @param string $size 截图尺寸 `宽x高` 格式的字符串。默认和视频尺寸一致
     * @param string $format 截图保存的格式，默认根据 `$saveAs` 参数的后缀生成，可以指定 `jpg | png | webp` 三种格式
     *
     * @return array 见 [视频截图 - 响应](http://docs.upyun.com/cloud/sync_video/#m3u8_2)
     */
    public function snapshot($file, $saveAs, $point, $size = '', $format = '')
    {
        $p = new Api\SyncVideo($this->config);
        $params = [
            'source' => $file,
            'save_as' => $saveAs,
            'point' => $point,
        ];
        if ($size) {
            $params['size'] = $size;
        }
        if ($format) {
            $params['format'] = $format;
        }
        return $p->process($params, '/snapshot');
    }

    /**
     * 获取音视频文件元信息
     * @param string $file 又拍云云存储的中的音视频文件路径
     *
     * @return array 见 [获取音视频文件信息 - 响应](http://docs.upyun.com/cloud/sync_video/#_16)
     */
    public function avMeta($file)
    {
        $p = new Api\SyncVideo($this->config);
        return $p->process([
            'source' => $file,
        ], '/avmeta/get_meta');
    }
}
