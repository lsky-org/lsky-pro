<?php

namespace Qiniu\Storage;

use Qiniu\Config;
use Qiniu\Http\Client;
use Qiniu\Http\Error;

/**
 * 断点续上传类, 该类主要实现了断点续上传中的分块上传,
 * 以及相应地创建块和创建文件过程.
 *
 * @link http://developer.qiniu.com/docs/v6/api/reference/up/mkblk.html
 * @link http://developer.qiniu.com/docs/v6/api/reference/up/mkfile.html
 */
final class ResumeUploader
{
    private $upToken;
    private $key;
    private $inputStream;
    private $size;
    private $params;
    private $mime;
    private $contexts;
    private $finishedEtags;
    private $host;
    private $bucket;
    private $currentUrl;
    private $config;
    private $resumeRecordFile;
    private $version;
    private $partSize;

    /**
     * 上传二进制流到七牛
     *
     * @param string $upToken 上传凭证
     * @param string $key 上传文件名
     * @param string $inputStream 上传二进制流
     * @param string $size 上传流的大小
     * @param string $params 自定义变量
     * @param string $mime 上传数据的mimeType
     * @param string $config
     * @param string $resumeRecordFile 断点续传的已上传的部分信息记录文件
     * @param string $version 分片上传版本 目前支持v1/v2版本 默认v1
     * @param string $partSize 分片上传v2字段 默认大小为4MB 分片大小范围为1 MB - 1 GB
     *
     * @link http://developer.qiniu.com/docs/v6/api/overview/up/response/vars.html#xvar
     */
    public function __construct(
        $upToken,
        $key,
        $inputStream,
        $size,
        $params,
        $mime,
        $config,
        $resumeRecordFile = null,
        $version = 'v1',
        $partSize = config::BLOCK_SIZE
    ) {

        $this->upToken = $upToken;
        $this->key = $key;
        $this->inputStream = $inputStream;
        $this->size = $size;
        $this->params = $params;
        $this->mime = $mime;
        $this->contexts = array();
        $this->finishedEtags = array("etags"=>array(), "uploadId"=>"", "expiredAt"=>0, "uploaded"=>0);
        $this->config = $config;
        $this->resumeRecordFile = $resumeRecordFile ? $resumeRecordFile : null;
        $this->version = $version ? $version : 'v1';
        $this->partSize = $partSize ? $partSize : config::BLOCK_SIZE;

        list($accessKey, $bucket, $err) = \Qiniu\explodeUpToken($upToken);
        $this->bucket = $bucket;
        if ($err != null) {
            return array(null, $err);
        }

        $upHost = $config->getUpHost($accessKey, $bucket);
        if ($err != null) {
            throw new \Exception($err->message(), 1);
        }
        $this->host = $upHost;
    }

    /**
     * 上传操作
     */
    public function upload($fname)
    {
        $uploaded = 0;
        if ($this->version == 'v2') {
            $partNumber = 1;
            $encodedObjectName = $this->key? \Qiniu\base64_urlSafeEncode($this->key) : '~';
        };
        // get upload record from resumeRecordFile
        if ($this->resumeRecordFile != null) {
            $blkputRets = null;
            if (file_exists($this->resumeRecordFile)) {
                $stream = fopen($this->resumeRecordFile, 'r');
                if ($stream) {
                    $streamLen = filesize($this->resumeRecordFile);
                    if ($streamLen > 0) {
                        $contents = fread($stream, $streamLen);
                        fclose($stream);
                        if ($contents) {
                            $blkputRets = json_decode($contents, true);
                            if ($blkputRets === null) {
                                error_log("resumeFile contents decode error");
                            }
                        } else {
                            error_log("read resumeFile failed");
                        }
                    } else {
                        error_log("resumeFile is empty");
                    }
                } else {
                    error_log("resumeFile open failed");
                }
            } else {
                error_log("resumeFile not exists");
            }

            if ($blkputRets) {
                if ($this->version == 'v1') {
                    if (isset($blkputRets['contexts']) && isset($blkputRets['uploaded']) &&
                        is_array($blkputRets['contexts']) && is_int($blkputRets['uploaded'])) {
                        $this->contexts = $blkputRets['contexts'];
                        $uploaded = $blkputRets['uploaded'];
                    }
                } elseif ($this->version == 'v2') {
                    if (isset($blkputRets["etags"]) && isset($blkputRets["uploadId"]) &&
                        isset($blkputRets["expiredAt"]) && $blkputRets["expiredAt"] > time()
                        && $blkputRets["uploaded"] > 0 && is_array($blkputRets["etags"]) &&
                        is_string($blkputRets["uploadId"]) && is_int($blkputRets["expiredAt"])) {
                        $this->finishedEtags['etags'] = $blkputRets["etags"];
                        $this->finishedEtags["uploadId"] = $blkputRets["uploadId"];
                        $this->finishedEtags["expiredAt"] = $blkputRets["expiredAt"];
                        $this->finishedEtags["uploaded"] = $blkputRets["uploaded"];
                        $uploaded = $blkputRets["uploaded"];
                        $partNumber = count($this->finishedEtags["etags"]) + 1;
                    } else {
                        $this->makeInitReq($encodedObjectName);
                    }
                } else {
                    throw new \Exception("only support v1/v2 now!");
                }
            } else {
                if ($this->version == 'v2') {
                    $this->makeInitReq($encodedObjectName);
                }
            }
        } else {
            // init a Multipart Upload task if choose v2
            if ($this->version == 'v2') {
                $this->makeInitReq($encodedObjectName);
            }
        }

        while ($uploaded < $this->size) {
            $blockSize = $this->blockSize($uploaded);
            $data = fread($this->inputStream, $blockSize);
            if ($data === false) {
                throw new \Exception("file read failed", 1);
            }
            if ($this->version == 'v1') {
                $crc = \Qiniu\crc32_data($data);
                $response = $this->makeBlock($data, $blockSize);
            } else {
                $md5 = md5($data);
                $response = $this->uploadPart($data, $partNumber, $this->finishedEtags["uploadId"], $encodedObjectName);
            }

            $ret = null;
            if ($response->ok() && $response->json() != null) {
                $ret = $response->json();
            }
            if ($response->statusCode < 0) {
                list($accessKey, $bucket, $err) = \Qiniu\explodeUpToken($this->upToken);
                if ($err != null) {
                    return array(null, $err);
                }
                $upHostBackup = $this->config->getUpBackupHost($accessKey, $bucket);
                $this->host = $upHostBackup;
            }

            if ($this->version == 'v1') {
                if ($response->needRetry() || !isset($ret['crc32']) || $crc != $ret['crc32']) {
                    $response = $this->makeBlock($data, $blockSize);
                    $ret = $response->json();
                }

                if (!$response->ok() || !isset($ret['crc32']) || $crc != $ret['crc32']) {
                    return array(null, new Error($this->currentUrl, $response));
                }
                array_push($this->contexts, $ret['ctx']);
            } else {
                if ($response->needRetry() || !isset($ret['md5']) || $md5 != $ret['md5']) {
                    $response = $this->uploadPart(
                        $data,
                        $partNumber,
                        $this->finishedEtags["uploadId"],
                        $encodedObjectName
                    );
                    $ret = $response->json();
                }

                if (!$response->ok() || !isset($ret['md5']) || $md5 != $ret['md5']) {
                    return array(null, new Error($this->currentUrl, $response));
                }
                $blockStatus = array('etag' => $ret['etag'], 'partNumber' => $partNumber);
                array_push($this->finishedEtags['etags'], $blockStatus);
                $partNumber += 1;
            }

            $uploaded += $blockSize;
            if ($this->version == 'v2') {
                $this->finishedEtags['uploaded'] = $uploaded;
            }

            if ($this->resumeRecordFile !== null) {
                if ($this->version == 'v1') {
                    $recordData = array(
                        'contexts' => $this->contexts,
                        'uploaded' => $uploaded
                    );
                    $recordData = json_encode($recordData);
                } else {
                    $recordData = json_encode($this->finishedEtags);
                }
                if ($recordData) {
                    $isWritten = file_put_contents($this->resumeRecordFile, $recordData);
                    if ($isWritten === false) {
                        error_log("write resumeRecordFile failed");
                    }
                } else {
                    error_log('resumeRecordData encode failed');
                }
            }
        }
        if ($this->version == 'v1') {
            return $this->makeFile($fname);
        } else {
            return $this->completeParts($fname, $this->finishedEtags['uploadId'], $encodedObjectName);
        }
    }

    /**
     * 创建块
     */
    private function makeBlock($block, $blockSize)
    {
        $url = $this->host . '/mkblk/' . $blockSize;
        return $this->post($url, $block);
    }

    private function fileUrl($fname)
    {
        $url = $this->host . '/mkfile/' . $this->size;
        $url .= '/mimeType/' . \Qiniu\base64_urlSafeEncode($this->mime);
        if ($this->key != null) {
            $url .= '/key/' . \Qiniu\base64_urlSafeEncode($this->key);
        }
        $url .= '/fname/' . \Qiniu\base64_urlSafeEncode($fname);
        if (!empty($this->params)) {
            foreach ($this->params as $key => $value) {
                $val = \Qiniu\base64_urlSafeEncode($value);
                $url .= "/$key/$val";
            }
        }
        return $url;
    }

    /**
     * 创建文件
     */
    private function makeFile($fname)
    {
        $url = $this->fileUrl($fname);
        $body = implode(',', $this->contexts);
        $response = $this->post($url, $body);
        if ($response->needRetry()) {
            $response = $this->post($url, $body);
        }
        if (!$response->ok()) {
            return array(null, new Error($this->currentUrl, $response));
        }
        return array($response->json(), null);
    }

    private function post($url, $data)
    {
        $this->currentUrl = $url;
        $headers = array('Authorization' => 'UpToken ' . $this->upToken);
        return Client::post($url, $data, $headers);
    }

    private function blockSize($uploaded)
    {
        if ($this->size < $uploaded + $this->partSize) {
            return $this->size - $uploaded;
        }
        return $this->partSize;
    }

    private function makeInitReq($encodedObjectName)
    {
        $res = $this->initReq($encodedObjectName);
        $this->finishedEtags["uploadId"] = $res['uploadId'];
        $this->finishedEtags["expiredAt"] = $res['expireAt'];
    }

    /**
     * 初始化上传任务
     */
    private function initReq($encodedObjectName)
    {
        $url = $this->host.'/buckets/'.$this->bucket.'/objects/'.$encodedObjectName.'/uploads';
        $headers = array(
            'Authorization' => 'UpToken ' . $this->upToken,
            'Content-Type' => 'application/json'
        );
        $response = $this->postWithHeaders($url, null, $headers);
        return $response->json();
    }

    /**
     * 分块上传v2
     */
    private function uploadPart($block, $partNumber, $uploadId, $encodedObjectName)
    {
        $headers = array(
            'Authorization' => 'UpToken ' . $this->upToken,
            'Content-Type' => 'application/octet-stream',
            'Content-MD5' => $block
        );
        $url = $this->host.'/buckets/'.$this->bucket.'/objects/'.$encodedObjectName.
            '/uploads/'.$uploadId.'/'.$partNumber;
        $response = $this->put($url, $block, $headers);
        return $response;
    }

    private function completeParts($fname, $uploadId, $encodedObjectName)
    {
        $headers = array(
            'Authorization' => 'UpToken '.$this->upToken,
            'Content-Type' => 'application/json'
        );
        $etags = $this->finishedEtags['etags'];
        $sortedEtags = \Qiniu\arraySort($etags, 'partNumber');
        $body = array(
            'fname' => $fname,
            '$mimeType' => $this->mime,
            'customVars' => $this->params,
            'parts' => $sortedEtags
        );
        $jsonBody = json_encode($body);
        $url = $this->host.'/buckets/'.$this->bucket.'/objects/'.$encodedObjectName.'/uploads/'.$uploadId;
        $response = $this->postWithHeaders($url, $jsonBody, $headers);
        if ($response->needRetry()) {
            $response = $this->postWithHeaders($url, $jsonBody, $headers);
        }
        if (!$response->ok()) {
            return array(null, new Error($this->currentUrl, $response));
        }
        return array($response->json(), null);
    }

    private function put($url, $data, $headers)
    {
        $this->currentUrl = $url;
        return Client::put($url, $data, $headers);
    }

    private function postWithHeaders($url, $data, $headers)
    {
        $this->currentUrl = $url;
        return Client::post($url, $data, $headers);
    }
}
