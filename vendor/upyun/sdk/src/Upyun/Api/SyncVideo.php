<?php
/**
 * 同步视频处理
 */

namespace Upyun\Api;

use GuzzleHttp\Client;
use Upyun\Config;
use Upyun\Signature;


class SyncVideo {
    /**
     * @var Config
     */
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function process($params, $path) {
        $client = new Client([
            'timeout' => $this->config->timeout,
        ]);

        $path = '/' . $this->config->serviceName . $path;
        $method = 'POST';
        $signedHeaders = Signature::getHeaderSign($this->config, $method, $path);

        $url = $this->config->getSyncVideoEndPoint() . $path;
        $response = $client->request($method, $url, [
            'headers' => $signedHeaders,
            'json' => $params
        ]);

        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }
}