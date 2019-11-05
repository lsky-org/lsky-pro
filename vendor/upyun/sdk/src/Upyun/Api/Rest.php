<?php

namespace Upyun\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Upyun\Config;
use Upyun\Signature;
use Upyun\Util;

class Rest
{
    /**
     * @var Config
     */
    protected $config;

    protected $endpoint;
    protected $method;
    protected $storagePath;
    public $headers = [];

    /**
     * @var Psr7\Stream
     */
    protected $file;


    public function __construct(Config $config)
    {
        $this->config   = $config;
        $this->endpoint = $config->getProtocol() . Config::$restApiEndPoint . '/' . $config->serviceName;
    }

    public function request($method, $storagePath)
    {
        $this->method = strtoupper($method);
        $this->storagePath = '/' . ltrim($storagePath, '/');
        return $this;
    }


    /**
     * @param string|resource $file
     *
     * @return $this
     */
    public function withFile($file)
    {
        $stream = Psr7\stream_for($file);
        $this->file = $stream;

        return $this;
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function send()
    {
        $client = new Client([
            'timeout' => $this->config->timeout,
        ]);

        $url = $this->endpoint . $this->storagePath;
        $body = null;
        if ($this->file && $this->method === 'PUT') {
            $body = $this->file;
        }

        $request = new Psr7\Request(
            $this->method,
            Util::encodeURI($url),
            $this->headers,
            $body
        );
        $authHeader = Signature::getHeaderSign($this->config,
            $this->method,
            $request->getUri()->getPath()
        );
        foreach ($authHeader as $head => $value) {
            $request = $request->withHeader($head, $value);
        }
        $response = $client->send($request, [
            'debug' => $this->config->debug
        ]);

        return $response;
    }

    public function withHeader($header, $value)
    {
        $header = strtolower(trim($header));

        $this->headers[$header] = $value;
        return $this;
    }

    public function withHeaders($headers)
    {
        if (is_array($headers)) {
            foreach ($headers as $header => $value) {
                $this->withHeader($header, $value);
            }
        }
        return $this;
    }

    public function toRequest()
    {
        $url = $this->endpoint . $this->storagePath;
        $body = null;
        if ($this->file && $this->method === 'PUT') {
            $body = $this->file;
        }

        $request = new Psr7\Request(
            $this->method,
            Util::encodeURI($url),
            $this->headers,
            $body
        );
        $authHeader = Signature::getHeaderSign($this->config,
            $this->method,
            $request->getUri()->getPath()
        );
        foreach ($authHeader as $head => $value) {
            $request = $request->withHeader($head, $value);
        }
        return $request;
    }
}
