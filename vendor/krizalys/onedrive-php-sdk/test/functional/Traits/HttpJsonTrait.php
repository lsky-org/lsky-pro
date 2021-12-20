<?php

namespace Test\Functional\Krizalys\Onedrive\Traits;

use GuzzleHttp\Client as GuzzleHttpClient;

trait HttpJsonTrait
{
    private $httpClient;

    private function getAndDecode($uri)
    {
        if ($this->httpClient === null) {
            $this->httpClient = new GuzzleHttpClient();
        }

        $response = $this->httpClient->get($uri);
        $json     = (string) $response->getBody();

        return json_decode($json);
    }
}
