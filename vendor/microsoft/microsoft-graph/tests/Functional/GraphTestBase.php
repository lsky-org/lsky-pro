<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* GraphTestBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2020 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://https://developer.microsoft.com/en-us/graph
*/

namespace Microsoft\Graph\Test;

use Microsoft\Graph\Graph;
include_once("TestConstants.php");

/**
* Base class for tests that will perform E2E against a live tenant using
* the client credential OAuth2 flow.
* Prerequisites:
* 1) An app registration in the https://portal.azure.com with a generated client secret.
* 2) Capture the Application ID (client ID), client secret, and tenant ID from
*    the app registration.
* 3) Set them in environment variables in your dev and/or CI pipeline in the
*    following variables: client_id, test_tenantId, test_secret
*/
class GraphTestBase
{
    private $clientId;

    private $scopes = "https://graph.microsoft.com/.default";
    private $contentType = "application/x-www-form-urlencoded";
    private $grantType = "client_credentials";
    private $tenantId;
    private $clientSecret;
    private $endpoint;
    public $graphClient;
    public $user;

    public function __construct()
    {
        $this->clientId     = CLIENT_ID;
        $this->clientSecret = CLIENT_SECRET;
        $this->tenantId     = TENANT_ID;
        $this->endpoint     = "https://login.microsoftonline.com/{$this->tenantId}/oauth2/v2.0/token";
        $this->user         = TEST_USER_UPN;

        $this->getAuthenticatedClient();
    }

    public function getAuthenticatedClient()
    {
        if ($this->graphClient == null)
        {
            $this->graphClient = new Graph();
            $this->graphClient->setAccessToken($this->getAccessToken());
            // $this->graphClient->setProxyPort("localhost:8888"); // Need for fiddler.
        }
    }

    public function getAccessToken()
    {
        $body = "grant_type=".$this->grantType
                ."&client_info=1"
                ."&client_id=".$this->clientId
                ."&scope=".$this->scopes
                ."&client_secret=".$this->clientSecret;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // turns off SSL check,
        // curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:8888"); // need for fiddler + auth
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->contentType, 'Content-Length: ' . strlen($body)));

        $result = curl_exec ($ch);
        $token = json_decode($result, true)['access_token'];
        curl_close($ch);

        return $token;
    }
}
