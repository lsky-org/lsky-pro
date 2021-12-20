<?php

/**
 * This file is part of Krizalys' OneDrive SDK for PHP.
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @author    Christophe Vidal
 * @copyright 2008-2021 Christophe Vidal (http://www.krizalys.com)
 * @license   https://opensource.org/licenses/BSD-3-Clause 3-Clause BSD License
 * @link      https://github.com/krizalys/onedrive-php-sdk
 */

namespace Krizalys\Onedrive;

use GuzzleHttp\ClientInterface;
use Krizalys\Onedrive\Constant\AccessTokenStatus;
use Krizalys\Onedrive\Constant\SpecialFolderName;
use Krizalys\Onedrive\Definition\ServiceDefinitionInterface;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use Krizalys\Onedrive\Proxy\DriveProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

/**
 * A client interface to communicate with the OneDrive API.
 *
 * `Client` instances act as entry points allowing client applications to
 * perform currently implemented OneDrive operations programmatically.
 *
 * For example, assuming you have instantiated a client and the user has logged
 * successfully and authorized your client application:
 *
 * ```php
 * $client->getRoot()->upload('hello.txt', 'Hello World!');
 * ```
 *
 * Applications are managed via the Microsoft identity platform (v2.0); see
 * {@link https://portal.azure.com/#blade/Microsoft_AAD_RegisteredApps/ApplicationsListBlade "App registrations" in Microsoft Azure}.
 *
 * @since 1.0.0
 *
 * @api
 */
class Client
{
    /**
     * @var string
     *      The base URL for authorization requests.
     */
    const AUTH_URL = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';

    /**
     * @var string
     *      The base URL for token requests.
     */
    const TOKEN_URL = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';

    /**
     * @var string
     *      The legacy date/time format.
     *
     * @deprecated 2.0.0 Non-standard format. Use ISO-8601 date/times instead.
     */
    const LEGACY_DATETIME_FORMAT = 'Y-m-d\TH:i:sO';

    /**
     * @var string
     *      The client ID.
     */
    private $clientId;

    /**
     * @var \Microsoft\Graph\Graph
     *      The Microsoft Graph.
     */
    private $graph;

    /**
     * @var \GuzzleHttp\ClientInterface
     *      The Guzzle HTTP client.
     */
    private $httpClient;

    /**
     * @var \Krizalys\Onedrive\Definition\ServiceDefinitionInterface
     *      The service definition.
     */
    private $serviceDefinition;

    /**
     * @var object
     *      The OAuth state (token, etc...).
     */
    private $state;

    /**
     * Constructor.
     *
     * @param string $clientId
     *        The client ID.
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \GuzzleHttp\ClientInterface $httpClient
     *        The Guzzle HTTP client.
     * @param mixed $serviceDefinition
     *        The service definition. Not passing a
     *        \Krizalys\Onedrive\Definition\ServiceDefinitionInterface via this
     *        parameter is deprecated and will be disallowed in version 3.
     *        Passing a logger via this parameter is deprecated and will be
     *        disallowed in version 3.
     * @param mixed[string] $options
     *        The options to use while creating this object. Supported options:
     *          - `'state'` *(object)*: the OneDrive client state, as returned
     *            by `getState()`. Default: `[]`.
     *
     * @throws \Exception
     *         Thrown if `$clientId` is `null`.
     *
     * @since 1.0.0
     */
    public function __construct(
        $clientId,
        Graph $graph,
        ClientInterface $httpClient,
        $serviceDefinition = null,
        array $options = []
    ) {
        switch (func_num_args()) {
            case 3:
                $serviceDefinition = null;
                break;

            case 4:
                if (is_array($serviceDefinition)) {
                    $options           = $serviceDefinition;
                    $logger            = null;
                    $serviceDefinition = null;
                } elseif ($serviceDefinition instanceof ServiceDefinitionInterface) {
                    $logger = null;
                } else {
                    $logger            = $serviceDefinition;
                    $serviceDefinition = null;
                }

                break;

            case 5:
                if ($serviceDefinition instanceof ServiceDefinitionInterface) {
                    $logger = null;
                } else {
                    $logger            = $serviceDefinition;
                    $serviceDefinition = null;
                }

                break;
        }

        if ($serviceDefinition === null) {
            $message = 'Not passing a'
                . ' \Krizalys\Onedrive\Definition\ServiceDefinitionInterface'
                . ' instance via $serviceDefinition is deprecated and will be'
                . ' disallowed in version 3; pass this parameter';

            @trigger_error($message, E_USER_DEPRECATED);

            $serviceDefinition = Onedrive::buildServiceDefinition();
        }

        if ($logger !== null) {
            $message = 'Passing a logger via $serviceDefinition is deprecated'
                . ' and will be disallowed in version 3; omit this parameter,'
                . ' or pass null or options instead';

            @trigger_error($message, E_USER_DEPRECATED);
        }

        if ($clientId === null) {
            throw new \Exception('The client ID must be set');
        }

        $this->clientId          = $clientId;
        $this->graph             = $graph;
        $this->httpClient        = $httpClient;
        $this->serviceDefinition = $serviceDefinition;

        $this->state = array_key_exists('state', $options)
            ? $options['state'] : (object) [
                'redirect_uri' => null,
                'token'        => null,
            ];

        if ($this->state->token !== null) {
            $this->graph->setAccessToken($this->state->token->data->access_token);
        }
    }

    /**
     * Gets the current state of this Client instance.
     *
     * Typically saved in the session and passed back to the `Client`
     * constructor for further requests.
     *
     * @return object
     *         The state of this `Client` instance.
     *
     * @since 1.0.0
     *
     * @api
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Gets the URL of the log in form.
     *
     * Users should visit this URL in their browser to first be presented a form
     * where the user is first allowed to log in to their OneDrive account, and
     * then to grant the requested permissions to the OneDrive application.
     *
     * After login, the browser is redirected to the given redirect URI, and a
     * code is passed as a query string parameter to this URI.
     *
     * A user-defined value may also be passed back to this URI as a query
     * string parameter via the `$state` parameter; see
     * {@link https://docs.microsoft.com/en-us/azure/active-directory/develop/reply-url#use-a-state-parameter "Use a state parameter" in Microsoft Azure documentation}
     * for example use
     * cases.
     *
     * The browser is also directly redirected to the given redirect URI if the
     * user is already logged in.
     *
     * @param string[] $scopes
     *        The OneDrive scopes requested by the application. Supported
     *        values:
     *          - `'offline_access'` ;
     *          - `'files.read'` ;
     *          - `'files.read.all'` ;
     *          - `'files.readwrite'` ;
     *          - `'files.readwrite.all'`.
     * @param string $redirectUri
     *        The URI to which to redirect to upon successful log in.
     * @param string $state
     *        The state to pass as a query string value to the redirect URI
     *        upon successful log in.
     *
     * @return string
     *         The log in URL.
     *
     * @since 1.0.0
     *
     * @api
     */
    public function getLogInUrl(array $scopes, $redirectUri, $state = null)
    {
        $redirectUri               = (string) $redirectUri;
        $this->state->redirect_uri = $redirectUri;

        $values = [
            'client_id'     => $this->clientId,
            'response_type' => 'code',
            'redirect_uri'  => $redirectUri,
            'scope'         => implode(' ', $scopes),
            'response_mode' => 'query',
        ];

        if ($state !== null) {
            $values['state'] = (string) $state;
        }

        $query = http_build_query($values, '', '&', PHP_QUERY_RFC3986);

        // When visiting this URL and authenticating successfully, the agent is
        // redirected to the redirect URI, with a code passed in the query
        // string (the name of the variable is "code"). This is suitable for
        // PHP.
        return self::AUTH_URL . "?$query";
    }

    /**
     * Gets the access token expiration delay.
     *
     * @return int
     *         The token expiration delay, in seconds.
     *
     * @since 1.0.0
     *
     * @api
     */
    public function getTokenExpire()
    {
        return $this->state->token->obtained
            + $this->state->token->data->expires_in - time();
    }

    /**
     * Gets the status of the current access token.
     *
     * See {@see \Krizalys\Onedrive\Constant\AccessTokenStatus
     * AccessTokenStatus} for the possible values returned.
     *
     * @return int
     *         The status of the current access token.
     *
     * @since 1.0.0
     *
     * @api
     */
    public function getAccessTokenStatus()
    {
        if ($this->state->token === null) {
            return AccessTokenStatus::MISSING;
        }

        $remaining = $this->getTokenExpire();

        if ($remaining <= 0) {
            return AccessTokenStatus::EXPIRED;
        }

        if ($remaining <= 60) {
            return AccessTokenStatus::EXPIRING;
        }

        return AccessTokenStatus::VALID;
    }

    /**
     * Obtains a new access token from OAuth.
     *
     * This token is valid for one hour.
     *
     * @param string $clientSecret
     *        The OneDrive client secret.
     * @param string $code
     *        The code returned by OneDrive after successful log in.
     *
     * @throws \Exception
     *         Thrown if the redirect URI of this `Client` instance's state is
     *         not set.
     * @throws \Exception
     *         Thrown if the HTTP response body cannot be JSON-decoded.
     *
     * @since 1.0.0
     *
     * @api
     */
    public function obtainAccessToken($clientSecret, $code)
    {
        if ($this->state->redirect_uri === null) {
            throw new \Exception(
                'The state\'s redirect URI must be set to call'
                    . ' obtainAccessToken()'
            );
        }

        $values = [
            'client_id'     => $this->clientId,
            'redirect_uri'  => $this->state->redirect_uri,
            'client_secret' => (string) $clientSecret,
            'code'          => (string) $code,
            'grant_type'    => 'authorization_code',
        ];

        $response = $this->httpClient->post(
            self::TOKEN_URL,
            ['form_params' => $values]
        );

        $body = (string) $response->getBody();
        $data = json_decode($body);

        if ($data === null) {
            throw new \Exception('json_decode() failed');
        }

        $this->state->redirect_uri = null;

        $this->state->token = (object) [
            'obtained' => time(),
            'data'     => $data,
        ];

        $this->graph->setAccessToken($this->state->token->data->access_token);
    }

    /**
     * Renews the access token from OAuth.
     *
     * This token is valid for one hour.
     *
     * @param string $clientSecret
     *        The client secret.
     *
     * @since 1.1.0
     *
     * @api
     */
    public function renewAccessToken($clientSecret)
    {
        if ($this->state->token->data->refresh_token === null) {
            throw new \Exception(
                'The refresh token is not set or no permission for'
                    . ' \'offline_access\' was given to renew the token'
            );
        }

        $values = [
            'client_id'     => $this->clientId,
            'client_secret' => $clientSecret,
            'grant_type'    => 'refresh_token',
            'refresh_token' => $this->state->token->data->refresh_token,
        ];

        $response = $this->httpClient->post(
            self::TOKEN_URL,
            ['form_params' => $values]
        );

        $body = (string) $response->getBody();
        $data = json_decode($body);

        if ($data === null) {
            throw new \Exception('json_decode() failed');
        }

        $this->state->token = (object) [
            'obtained' => time(),
            'data'     => $data,
        ];

        $this->graph->setAccessToken($this->state->token->data->access_token);
    }

    /**
     * Gets the current user's drive.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy[]
     *         The drives.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_list?view=odsp-graph-online#list-the-current-users-drives
     *       List the current user's drives
     */
    public function getDrives()
    {
        $driveLocator = '/me/drives';
        $endpoint     = "$driveLocator";

        $response = $this
            ->graph
            ->createCollectionRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drives = $response->getResponseAsObject(Model\Drive::class);

        if (!is_array($drives)) {
            return [];
        }

        return array_map(function (Model\Drive $drive) {
            return new DriveProxy(
                $this->graph,
                $drive,
                $this->serviceDefinition->getResourceDefinition('driveItem')
            );
        }, $drives);
    }

    /**
     * Gets the signed in user's drive.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy
     *         The drive.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get?view=odsp-graph-online#get-current-users-onedrive
     *       Get current user's OneDrive
     */
    public function getMyDrive()
    {
        $driveLocator = '/me/drive';
        $endpoint     = "$driveLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drive = $response->getResponseAsObject(Model\Drive::class);

        return new DriveProxy(
            $this->graph,
            $drive,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets a drive by ID.
     *
     * @param string $driveId
     *        The drive ID.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy
     *         The drive.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get?view=odsp-graph-online#get-a-drive-by-id
     *       Get a drive by ID
     */
    public function getDriveById($driveId)
    {
        $driveLocator = "/drives/$driveId";
        $endpoint     = "$driveLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drive = $response->getResponseAsObject(Model\Drive::class);

        return new DriveProxy(
            $this->graph,
            $drive,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets a user's OneDrive.
     *
     * @param string $idOrUserPrincipalName
     *        The ID or user principal name.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy
     *         The drive.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get?view=odsp-graph-online#get-a-users-onedrive
     *       Get a user's OneDrive
     */
    public function getDriveByUser($idOrUserPrincipalName)
    {
        $userLocator  = "/users/$idOrUserPrincipalName";
        $driveLocator = '/drive';
        $endpoint     = "$userLocator$driveLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drive = $response->getResponseAsObject(Model\Drive::class);

        return new DriveProxy(
            $this->graph,
            $drive,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets the document library associated with a group.
     *
     * @param string $groupId
     *        The group ID.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy
     *         The drive.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get?view=odsp-graph-online#get-the-document-library-associated-with-a-group
     *       Get the document library associated with a group
     */
    public function getDriveByGroup($groupId)
    {
        $groupLocator = "/groups/$groupId";
        $driveLocator = '/drive';
        $endpoint     = "$groupLocator$driveLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drive = $response->getResponseAsObject(Model\Drive::class);

        return new DriveProxy(
            $this->graph,
            $drive,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets the document library for a site.
     *
     * @param string $siteId
     *        The site ID.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveProxy
     *         The drive.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get?view=odsp-graph-online#get-the-document-library-for-a-site
     *       Get the document library for a site
     */
    public function getDriveBySite($siteId)
    {
        $siteLocator  = "/sites/$siteId";
        $driveLocator = '/drive';
        $endpoint     = "$siteLocator$driveLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $drive = $response->getResponseAsObject(Model\Drive::class);

        return new DriveProxy(
            $this->graph,
            $drive,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets a drive item by ID.
     *
     * @param string $driveId
     *        The drive ID. Deprecated and will change in version 3; pass the
     *        drive item ID instead.
     * @param mixed $itemId
     *        The drive item ID. Deprecated and will be removed in version 3;
     *        Omit this parameter.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The drive item.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getDriveItemById($driveId, $itemId = null)
    {
        if (func_num_args() == 1) {
            $itemId  = $driveId;
            $driveId = null;
        }

        if ($driveId === null) {
            $driveLocator = '/me/drive';
        } else {
            $message = sprintf(
                '%s()\'s behavior will change in version 3: the $driveId'
                    . ' argument will be removed and the method will get a'
                    . ' drive item from the default drive;'
                    . ' use'
                    . ' \Krizalys\Onedrive\Proxy\DriveProxy::getDriveItemById()'
                    . ' for to retrieve a drive item ID from a given drive',
                __METHOD__
            );

            @trigger_error($message, E_USER_DEPRECATED);
            $driveLocator = "/drives/$driveId";
        }

        $itemLocator = "/items/$itemId";
        $endpoint    = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(Model\DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets a drive item by path.
     *
     * The path is given as an absolute path from the root of the drive, for
     * example:
     *
     * ```php
     * $driveItem = $client->getDriveItemByPath('/path/to/file.txt');
     * ```
     *
     * @param string $path
     *        The path.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The drive item.
     *
     * @since 2.2.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getDriveItemByPath($path)
    {
        $driveLocator = '/me/drive';
        $itemLocator  = "/root:$path";
        $endpoint     = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(Model\DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets the root drive item.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The root drive item.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getRoot()
    {
        $driveLocator = '/me/drive';
        $itemLocator  = '/root';
        $endpoint     = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(Model\DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets a special folder by name.
     *
     * See {@see \Krizalys\Onedrive\Constant\SpecialFolderName SpecialFolderName}
     * for the parameter `$specialFolderName`' supported values.
     *
     * @param string $specialFolderName
     *        The special folder name.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The root drive item.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_get_specialfolder?view=odsp-graph-online
     *       Get a special folder by name
     */
    public function getSpecialFolder($specialFolderName)
    {
        $driveLocator         = '/me/drive';
        $specialFolderLocator = "/special/$specialFolderName";
        $endpoint             = "$driveLocator$specialFolderLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(Model\DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->serviceDefinition->getResourceDefinition('driveItem')
        );
    }

    /**
     * Gets items shared with the signed-in user.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy[]
     *         The shared drive items.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_sharedwithme?view=odsp-graph-online
     *       List items shared with the signed-in user
     */
    public function getShared()
    {
        $driveLocator = '/me/drive';
        $endpoint     = "$driveLocator/sharedWithMe";

        $response = $this
            ->graph
            ->createCollectionRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItems = $response->getResponseAsObject(Model\DriveItem::class);

        if (!is_array($driveItems)) {
            return [];
        }

        return array_map(function (Model\DriveItem $driveItem) {
            return new DriveItemProxy(
                $this->graph,
                $driveItem,
                $this->serviceDefinition->getResourceDefinition('driveItem')
            );
        }, $driveItems);
    }

    /**
     * Gets recent files.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy[]
     *         The recent drive items.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/drive_recent?view=odsp-graph-online
     *       List recent files
     */
    public function getRecent()
    {
        $driveLocator = '/me/drive';
        $endpoint     = "$driveLocator/recent";

        $response = $this
            ->graph
            ->createCollectionRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItems = $response->getResponseAsObject(Model\DriveItem::class);

        if (!is_array($driveItems)) {
            return [];
        }

        return array_map(function (Model\DriveItem $driveItem) {
            return new DriveItemProxy(
                $this->graph,
                $driveItem,
                $this->serviceDefinition->getResourceDefinition('driveItem')
            );
        }, $driveItems);
    }

    // Legacy support //////////////////////////////////////////////////////////

    /**
     * Creates a folder in the current OneDrive account.
     *
     * This operation is supported only on folders (as opposed to files): it
     * fails if `$parentId` does not refer to a folder.
     *
     * @param string $name
     *        The name of the OneDrive folder to be created.
     * @param null|string $parentId
     *        The ID of the OneDrive folder into which to create the OneDrive
     *        folder, or `null` to create it in the OneDrive root folder.
     *        Default: `null`.
     * @param null|string $description
     *        The description of the OneDrive folder to be created, or `null` to
     *        create it without a description. Default: `null`.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The folder created, as a Folder instance referencing to the
     *         OneDrive folder created.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder()
     */
    public function createFolder($name, $parentId = null, $description = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $parentId !== null ?
            $this->getDriveItemById($drive->id, $parentId)
            : $drive->getRoot();

        $options = [];

        if ($description !== null) {
            $options += [
                'description' => (string) $description,
            ];
        }

        $item    = $item->createFolder($name, $options);
        $options = $this->buildOptions($item, ['parent_id' => $parentId]);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Creates a file in the current OneDrive account.
     *
     * This operation is supported only on folders (as opposed to files): it
     * fails if `$parentId` does not refer to a folder.
     *
     * @param string $name
     *        The name of the OneDrive file to be created.
     * @param null|string $parentId
     *        The ID of the OneDrive folder into which to create the OneDrive
     *        file, or `null` to create it in the OneDrive root folder. Default:
     *        `null`.
     * @param string|resource|\GuzzleHttp\Psr7\Stream $content
     *        The content of the OneDrive file to be created, as a string or as
     *        a resource to an already opened file. Default: `''`.
     * @param mixed[string] $options
     *        The options. Unused.
     *
     * @return \Krizalys\Onedrive\File
     *         The file created, as File instance referencing to the OneDrive
     *         file created.
     *
     * @throws \Exception
     *         Thrown on I/O errors.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::upload().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::upload()
     *
     * @todo Support name conflict behavior.
     * @todo Support content type in options.
     */
    public function createFile(
        $name,
        $parentId = null,
        $content = '',
        array $options = []
    ) {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::upload()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $parentId !== null ?
            $this->getDriveItemById($drive->id, $parentId)
            : $drive->getRoot();

        $item    = $item->upload($name, $content);
        $options = $this->buildOptions($item, ['parent_id' => $parentId]);

        return new File($this, $item->id, $options);
    }

    /**
     * Fetches a drive item from the current OneDrive account.
     *
     * @param null|string $driveItemId
     *        The unique ID of the OneDrive drive item to fetch, or `null` to
     *        fetch the OneDrive root folder. Default: `null`.
     *
     * @return object
     *         The drive item fetched, as a DriveItem instance referencing to
     *         the OneDrive drive item fetched.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getDriveItemById()..
     *
     * @see \Krizalys\Onedrive\Client::getDriveItemById()
     */
    public function fetchDriveItem($driveItemId = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Client::getDriveItemById() instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $driveItemId !== null ?
            $this->getDriveItemById($drive->id, $driveItemId)
            : $drive->getRoot();

        $options = $this->buildOptions($item, ['parent_id' => $driveItemId]);

        return $this->isFolder($item) ?
            new Folder($this, $item->id, $options)
            : new File($this, $item->id, $options);
    }

    /**
     * Fetches the root folder from the current OneDrive account.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The root folder, as a Folder instance referencing to the OneDrive
     *         root folder.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getRoot().
     *
     * @see \Krizalys\Onedrive\Client::getRoot()
     */
    public function fetchRoot()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Client::getRoot() instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $item    = $this->getRoot();
        $options = $this->buildOptions($item);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Fetches the "Camera Roll" folder from the current OneDrive account.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The "Camera Roll" folder, as a Folder instance referencing to the
     *         OneDrive "Camera Roll" folder.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::CAMERA_ROLL).
     *
     * @see \Krizalys\Onedrive\Client::getSpecialFolder()
     */
    public function fetchCameraRoll()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3; use'
                . ' \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::CAMERA_ROLL)'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $item    = $this->getSpecialFolder(SpecialFolderName::CAMERA_ROLL);
        $options = $this->buildOptions($item);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Fetches the "Documents" folder from the current OneDrive account.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The "Documents" folder, as a Folder instance referencing to the
     *         OneDrive "Documents" folder.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::DOCUMENTS).
     *
     * @see \Krizalys\Onedrive\Client::getSpecialFolder()
     */
    public function fetchDocs()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3; use'
                . ' \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::DOCUMENTS)'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $item    = $this->getSpecialFolder(SpecialFolderName::DOCUMENTS);
        $options = $this->buildOptions($item);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Fetches the "Pictures" folder from the current OneDrive account.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The "Pictures" folder, as a Folder instance referencing to the
     *         OneDrive "Pictures" folder.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::PHOTOS).
     *
     * @see \Krizalys\Onedrive\Client::getSpecialFolder()
     */
    public function fetchPics()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3; use'
                . ' \Krizalys\Onedrive\Client::getSpecialFolder(\Krizalys\Onedrive\Constant\SpecialFolderName::PHOTOS)'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $item    = $this->getSpecialFolder(SpecialFolderName::PHOTOS);
        $options = $this->buildOptions($item);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Fetches the properties of a drive item in the current OneDrive account.
     *
     * @param null|string $driveItemId
     *        The drive item ID, or `null` to fetch the OneDrive root folder.
     *        Default: `null`.
     *
     * @return object
     *         The properties of the drive item fetched.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getDriveItemById().
     *
     * @see \Krizalys\Onedrive\Client::getDriveItemById()
     */
    public function fetchProperties($driveItemId = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Client::getDriveItemById() instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $driveItemId !== null ?
            $this->getDriveItemById($drive->id, $driveItemId)
            : $drive->getRoot();

        $options = $this->buildOptions(
            $item,
            [
                'id'        => $item->id,
                'parent_id' => $driveItemId,
            ]
        );

        return (object) $options;
    }

    /**
     * Fetches the drive items in a folder in the current OneDrive account.
     *
     * This operation is supported only on folders (as opposed to files): it
     * fails if `$parentId` does not refer to a folder.
     *
     * @param null|string $driveItemId
     *        The drive item ID, or `null` to fetch the OneDrive root folder.
     *        Default: `null`.
     *
     * @return \Krizalys\Onedrive\DriveItem
     *         The drive items in the folder fetched, as DriveItem instances
     *         referencing OneDrive drive items.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::children.
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::children
     */
    public function fetchDriveItems($driveItemId = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::children'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $driveItemId !== null ?
            $this->getDriveItemById($drive->id, $driveItemId)
            : $drive->getRoot();

        return array_map(function (DriveItemProxy $item) use ($driveItemId) {
            $options = $this->buildOptions($item, ['parent_id' => $driveItemId]);

            return $this->isFolder($item) ?
                new Folder($this, $item->id, $options)
                : new File($this, $item->id, $options);
        }, $item->children);
    }

    /**
     * Updates the properties of a drive item in the current OneDrive account.
     *
     * @param string $driveItemId
     *        The unique ID of the drive item to update.
     * @param mixed[]|object $properties
     *        The properties to update. Default: `[]`.
     * @param bool $temp
     *        Option to allow save to a temporary file in case of large files.
     *
     * @throws \Exception
     *         Thrown on I/O errors.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::rename().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::rename()
     */
    public function updateDriveItem($driveItemId, $properties = [], $temp = false)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::rename()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();

        $item = $driveItemId !== null ?
            $this->getDriveItemById($drive->id, $driveItemId)
            : $drive->getRoot();

        $options = (array) $properties;

        if (array_key_exists('name', $options)) {
            $name = $options['name'];
            unset($options['name']);
        } else {
            $name = $item->name;
        }

        $item    = $item->rename($name, $options);
        $options = $this->buildOptions($item, ['parent_id' => $driveItemId]);

        return new Folder($this, $item->id, $options);
    }

    /**
     * Moves a drive item into another folder.
     *
     * `$destinationId` must refer to a folder.
     *
     * @param string $driveItemId
     *        The unique ID of the drive item to move.
     * @param null|string $destinationId
     *        The unique ID of the folder into which to move the drive item, or
     *        `null` to move it to the OneDrive root folder. Default: `null`.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::move().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::move()
     */
    public function moveDriveItem($driveItemId, $destinationId = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::move()'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();
        $item  = $this->getDriveItemById($drive->id, $driveItemId);

        $destination = $destinationId !== null ?
            $this->getDriveItemById($drive->id, $destinationId)
            : $drive->getRoot();

        $item->move($destination);
    }

    /**
     * Copies a file into another folder.
     *
     * This operation is supported only on files (as opposed to folders): it
     * fails if `$driveItemId` does not refer to a file.
     *
     * Additionally, `$destinationId` must refer to a folder.
     *
     * @param string $driveItemId
     *        The unique ID of the file to copy.
     * @param null|string $destinationId
     *        The unique ID of the folder into which to copy the file, or `null`
     *        to copy it to the OneDrive root folder. Default: `null`.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::copy().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::copy()
     */
    public function copyFile($driveItemId, $destinationId = null)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::copy()'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();
        $item  = $this->getDriveItemById($drive->id, $driveItemId);

        $destination = $destinationId !== null ?
            $this->getDriveItemById($drive->id, $destinationId)
            : $drive->getRoot();

        $item->copy($destination);
    }

    /**
     * Deletes a drive item in the current OneDrive account.
     *
     * @param string $driveItemId
     *        The unique ID of the drive item to delete.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::delete().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::delete()
     */
    public function deleteDriveItem($driveItemId)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::delete()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();
        $item  = $this->getDriveItemById($drive->id, $driveItemId);
        $item->delete();
    }

    /**
     * Fetches the quota of the current OneDrive account.
     *
     * @return object
     *         An object with the following properties:
     *           - 'quota' (int) The total space, in bytes ;
     *           - 'available' (int) The available space, in bytes.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveProxy::quota.
     *
     * @see \Krizalys\Onedrive\Proxy\DriveProxy::quota
     */
    public function fetchQuota()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveProxy::quota instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $this->getMyDrive();
        $quota = $drive->quota;

        return (object) [
            'quota'     => $quota->total,
            'available' => $quota->remaining,
        ];
    }

    /**
     * Fetches the recent documents uploaded to the current OneDrive account.
     *
     * @return object
     *         An object with the following properties:
     *           - 'data' (array) The list of the recent documents uploaded.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getRecent().
     *
     * @see \Krizalys\Onedrive\Client::getRecent()
     */
    public function fetchRecentDocs()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Client::getRecent() instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $items = $this->getRecent();

        return (object) [
            'data' => array_map(function (DriveItemProxy $item) {
                return (object) $this->buildOptions($item);
            }, $items),
        ];
    }

    /**
     * Fetches the drive items shared with the current OneDrive account.
     *
     * @return object
     *         An object with the following properties:
     *           - 'data' (array) The list of the shared drive items.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Client::getShared().
     *
     * @see \Krizalys\Onedrive\Client::getShared()
     */
    public function fetchShared()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Client::getShared() instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $items = $this->getShared();

        return (object) [
            'data' => array_map(function (DriveItemProxy $item) {
                return (object) $this->buildOptions($item);
            }, $items),
        ];
    }

    /**
     * Checks whether a given drive item is a folder.
     *
     * @param \Krizalys\Onedrive\Proxy\DriveItemProxy $item
     *        The drive item.
     *
     * @return bool
     *         Whether the drive item is a folder.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Deprecated dependency.
     */
    public function isFolder(DriveItemProxy $item)
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        return $item->folder !== null || $item->specialFolder !== null;
    }

    /**
     * Builds options for legacy File and Folder constructors.
     *
     * @param \Krizalys\Onedrive\Proxy\DriveItemProxy $item
     *        The drive item.
     * @param mixed[string] $options
     *        The options.
     *
     * @return mixed[]
     *         The options.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Deprecated dependency.
     */
    public function buildOptions(DriveItemProxy $item, array $options = [])
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        $defaultOptions = [
            'from' => (object) [
                'name' => null,
                'id'   => null,
            ],
        ];

        if ($item->id !== null) {
            $defaultOptions['id'] = $item->id;
        }

        if ($item->parentReference->id !== null) {
            $defaultOptions['parent_id'] = $item->parentReference->id;
        }

        if ($item->name !== null) {
            $defaultOptions['name'] = $item->name;
        }

        if ($item->description !== null) {
            $defaultOptions['description'] = $item->description;
        }

        if ($item->size !== null) {
            $defaultOptions['size'] = $item->size;
        }

        if ($item->createdDateTime !== null) {
            $defaultOptions['created_time'] = $item->createdDateTime->format(self::LEGACY_DATETIME_FORMAT);
        }

        if ($item->lastModifiedDateTime !== null) {
            $defaultOptions['updated_time'] = $item->lastModifiedDateTime->format(self::LEGACY_DATETIME_FORMAT);
        }

        return $defaultOptions + $options;
    }
}
