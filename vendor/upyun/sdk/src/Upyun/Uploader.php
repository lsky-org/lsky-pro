<?php
namespace Upyun;

use Upyun\Api\Rest;
use Upyun\Api\Form;
use GuzzleHttp\Psr7;
use GuzzleHttp\Pool;
use GuzzleHttp\Client;

class Uploader
{
    /**
     * @var Config
     */
    protected $config;

    protected $useBlock = false;


    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function upload($path, $file, $params, $withAsyncProcess)
    {
        $stream = Psr7\stream_for($file);
        $size = $stream->getSize();
        $useBlock = $this->needUseBlock($size);

        if ($withAsyncProcess) {
            $req = new Form($this->config);
            return $req->upload($path, $stream, $params);
        }

        if (! $useBlock) {
            $req = new Rest($this->config);
            return $req->request('PUT', $path)
                       ->withHeaders($params)
                       ->withFile($stream)
                       ->send();
        } elseif ($this->config->uploadType === 'BLOCK_PARALLEL') {
            return $this->concurrentPointUpload($path, $stream, $params);
        } else {
            return $this->pointUpload($path, $stream, $params);
        }
    }

    /**
     * 串行式断点续传
     * @param $path
     * @param $stream
     * @param $params
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    private function pointUpload($path, $stream, $params)
    {
        $req = new Rest($this->config);
        $headers = array();
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                $headers['X-Upyun-Meta-' . $key] = $val;
            }
        }
        $res = $req->request('PUT', $path)
            ->withHeaders(array_merge(array(
                'X-Upyun-Multi-Stage' => 'initiate',
                'X-Upyun-Multi-Type' => Psr7\mimetype_from_filename($path),
                'X-Upyun-Multi-Length' => $stream->getSize(),
            ), $headers))
            ->send();
        if ($res->getStatusCode() !== 204) {
            throw new \Exception('init request failed when poinit upload!');
        }

        $init      = Util::getHeaderParams($res->getHeaders());
        $uuid      = $init['x-upyun-multi-uuid'];
        $blockSize = 1024 * 1024;
        $partId    = 0;
        do {
            $fileBlock = $stream->read($blockSize);
            $res = $req->request('PUT', $path)
                ->withHeaders(array(
                    'X-Upyun-Multi-Stage' => 'upload',
                    'X-Upyun-Multi-Uuid' => $uuid,
                    'X-Upyun-Part-Id' => $partId
                ))
                ->withFile(Psr7\stream_for($fileBlock))
                ->send();

            if ($res->getStatusCode() !== 204) {
                throw new \Exception('upload request failed when poinit upload!');
            }
            $data   = Util::getHeaderParams($res->getHeaders());
            $partId = $data['x-upyun-next-part-id'];
        } while ($partId != -1);

        $res = $req->request('PUT', $path)
            ->withHeaders(array(
                'X-Upyun-Multi-Uuid' => $uuid,
                'X-Upyun-Multi-Stage' => 'complete'
            ))
            ->send();

        if ($res->getStatusCode() != 204 && $res->getStatusCode() != 201) {
            throw new \Exception('end request failed when poinit upload!');
        }
        return $res;
    }

    private function needUseBlock($fileSize)
    {
        if ($this->config->uploadType === 'BLOCK' ||
            $this->config->uploadType === 'BLOCK_PARALLEL') {
            return true;
        } elseif ($this->config->uploadType === 'AUTO' &&
                  $fileSize >= $this->config->sizeBoundary) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 并行式断点续传
     * @param $path
     * @param $stream
     * @param $params
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    private function concurrentPointUpload($path, $stream, $params)
    {
        $req = new Rest($this->config);

        $headers = array();
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                $headers['X-Upyun-Meta-' . $key] = $val;
            }
        }
        $res = $req->request('PUT', $path)
            ->withHeaders(array_merge(array(
                'X-Upyun-Multi-Disorder' => 'true',
                'X-Upyun-Multi-Stage' => 'initiate',
                'X-Upyun-Multi-Type' => Psr7\mimetype_from_filename($path),
                'X-Upyun-Multi-Length' => $stream->getSize(),
            ), $headers))
            ->send();
        if ($res->getStatusCode() !== 204) {
            throw new \Exception('init request failed when poinit upload!');
        }

        $init = Util::getHeaderParams($res->getHeaders());
        $uuid = $init['x-upyun-multi-uuid'];
        $requests = function ($req, $path, $stream, $uuid) {
            $blockSize = 1024 * 1024;
            $total = ceil($stream->getSize() / $blockSize);
            for ($i = 0; $i < $total; $i++) {
                $fileBlock = $stream->read($blockSize);
                yield $req->request('PUT', $path)
                    ->withHeaders(array(
                        'X-Upyun-Multi-Stage' => 'upload',
                        'X-Upyun-Multi-Uuid' => $uuid,
                        'X-Upyun-Part-Id' => $i
                    ))
                    ->withFile(Psr7\stream_for($fileBlock))
                    ->toRequest();
            }
        };
        $client = new Client([
            'timeout' => $this->config->timeout,
        ]);
        $pool = new Pool($client, $requests($req, $path, $stream, $uuid), [
            'concurrency' => $this->config->concurrency,
            'fulfilled' => function ($res) {
                if ($res->getStatusCode() !== 204) {
                    throw new \Exception('upload request failed when poinit upload!');
                }
            },
            'rejected' => function () {
                throw new \Exception('upload request failed when poinit upload!');
            },
        ]);
        $promise = $pool->promise();
        $promise->wait();

        $res = $req->request('PUT', $path)
            ->withHeaders(array(
                'X-Upyun-Multi-Uuid' => $uuid,
                'X-Upyun-Multi-Stage' => 'complete'
            ))
            ->send();
        if ($res->getStatusCode() != 204 && $res->getStatusCode() != 201) {
            throw new \Exception('end request failed when poinit upload!');
        }
        return $res;
    }
}
