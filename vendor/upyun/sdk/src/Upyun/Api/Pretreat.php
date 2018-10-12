<?php
namespace Upyun\Api;

use GuzzleHttp\Client;
use Upyun\Config;
use Upyun\Signature;
use Upyun\Util;

class Pretreat
{

    /**
     * @var Config
     */
    protected $config;

    public function __construct(Config $config)
    {
        if (!$config->processNotifyUrl) {
            throw new \Exception("should config prosessNotifyUrl first.");
        }
        $this->config = $config;
    }

    public function process($tasks, $optionalParams = array())
    {
        $encodedTasks = Util::base64Json($tasks);

        $client = new Client([
            'timeout' => $this->config->timeout,
        ]);

        $params = array(
            'service' => $this->config->serviceName,
            'notify_url' => $this->config->processNotifyUrl,
            'tasks' => $encodedTasks,
        );

        $params = array_merge($params, $optionalParams);

        $path = '/pretreatment/';
        $method = 'POST';
        $signedHeaders = Signature::getHeaderSign($this->config, $method, $path);

        $url = $this->config->getPretreatEndPoint() . $path;
        $response = $client->request($method, $url, [
            'headers' => $signedHeaders,
            'form_params' => $params
        ]);

        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }


    public function query($taskIds, $path)
    {
        $client = new Client([
            'timeout' => $this->config->timeout,
        ]);

        $params = array(
            'service' => $this->config->serviceName,
            'task_ids' => implode(',', $taskIds)
        );
        $path = $path . '?' . http_build_query($params);

        $method = 'GET';
        $url = $this->config->getPretreatEndPoint() . $path;
        $signedHeaders = Signature::getHeaderSign($this->config, $method, $path);
        $response = $client->request($method, $url, [
            'headers' => $signedHeaders
        ]);

        if ($response->getStatusCode() === 200) {
            $body = $response->getBody()->getContents();
            $result = json_decode($body, true);
            if (is_array($result)) {
                return $result['tasks'];
            }
        }
        return false;
    }
}
