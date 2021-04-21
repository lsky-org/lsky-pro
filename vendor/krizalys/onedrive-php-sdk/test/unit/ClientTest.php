<?php

namespace Test\Unit\Krizalys\Onedrive;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use Krizalys\Onedrive\Client;
use Krizalys\Onedrive\Constant\AccessTokenStatus;
use Krizalys\Onedrive\Constant\SpecialFolderName;
use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Krizalys\Onedrive\Definition\ServiceDefinitionInterface;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use Krizalys\Onedrive\Proxy\DriveProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\GraphResponse;
use Microsoft\Graph\Model\Drive;
use Microsoft\Graph\Model\DriveItem;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class ClientTest extends TestCase
{
    const CLIENT_ID     = '01234567-89ab-cdef-0123-456789abcdef';
    const CLIENT_SECRET = 'SeCrEt';
    const REDIRECT_URI  = 'http://ho.st/redirect/uri';
    const AUTH_CODE     = 'M01234567-89ab-cdef-0123-456789abcdef';
    const USER_ID       = '0000000000000001';
    const GROUP_ID      = '0000000000000002';
    const SITE_ID       = '0000000000000003';
    const DRIVE_ID      = '0000000000000004';
    const DRIVE_ITEM_ID = '0123';

    /**
     * @expectedException \Exception
     */
    public function testConstructorWithNullGraphShouldThrowException()
    {
        $graph      = $this->createMock(Graph::class);
        $httpClient = $this->createMock(ClientInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        new Client(null, $graph, $httpClient, $serviceDefinition, []);
    }

    public function testGetLogInUrlShouldReturnExpectedValue()
    {
        $graph      = $this->createMock(Graph::class);
        $httpClient = $this->createMock(ClientInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $scopes = [
            'test.scope.1',
            'test.scope.2',
        ];

        $actual = $sut->getLogInUrl($scopes, self::REDIRECT_URI, 'Test state');
        $this->assertEquals('https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=' . self::CLIENT_ID . '&response_type=code&redirect_uri=http%3A%2F%2Fho.st%2Fredirect%2Furi&scope=test.scope.1%20test.scope.2&response_mode=query&state=Test%20state', $actual);
    }

    public function testGetTokenExpireShouldReturnExpectedValue()
    {
        \FunctionsMock::$timeCallback = function () {
            return strtotime('1999-01-01T00:00:01Z');
        };

        $options = [
            'options' => [
                'state' => (object) [
                    'token' => (object) [
                        'obtained' => strtotime('1999-01-01Z'),

                        'data' => (object) [
                            'access_token' => 'AcCeSs+ToKeN',
                            'expires_in'   => 3600,
                        ],
                    ],
                ],
            ],
        ];

        $graph  = $this->createMock(Graph::class);
        $sut    = $this->createClient($graph, $options);
        $actual = $sut->getTokenExpire();
        $this->assertSame(3599, $actual);
    }

    public function provideGetAccessTokenStatusShouldReturnExpectedValue()
    {
        return [
            'Fresh token' => [
                'time'     => strtotime('1999-01-01T00:58:59Z'),
                'expected' => AccessTokenStatus::VALID,
            ],

            'Expiring token' => [
                'time'     => strtotime('1999-01-01T00:59:00Z'),
                'expected' => AccessTokenStatus::EXPIRING,
            ],

            'Expired token' => [
                'time'     => strtotime('1999-01-01T01:00:00Z'),
                'expected' => AccessTokenStatus::EXPIRED,
            ],
        ];
    }

    /**
     * @dataProvider provideGetAccessTokenStatusShouldReturnExpectedValue
     */
    public function testGetAccessTokenStatusShouldReturnExpectedValue(
        $time,
        $expected
    ) {
        \FunctionsMock::$timeCallback = function () use ($time) {
            return $time;
        };

        $options = [
            'options' => [
                'state' => (object) [
                    'token' => (object) [
                        'obtained' => strtotime('1999-01-01Z'),

                        'data' => (object) [
                            'access_token' => 'AcCeSs+ToKeN',
                            'expires_in'   => 3600,
                        ],
                    ],
                ],
            ],
        ];

        $graph  = $this->createMock(Graph::class);
        $sut    = $this->createClient($graph, $options);
        $actual = $sut->getAccessTokenStatus();
        $this->assertEquals($expected, $actual);
    }

    public function testObtainAccessTokenShouldSetExpectedState()
    {
        \FunctionsMock::$timeCallback = function () {
            return strtotime('1999-01-01Z');
        };

        $httpClient      = new ClientMock();
        $receivedUri     = null;
        $receivedOptions = null;

        $httpClient->postCallback = function ($uri, $options) use (&$receivedUri, &$receivedOptions) {
            $receivedUri     = $uri;
            $receivedOptions = $options;
            $response        = $this->createMock(ResponseInterface::class);

            $response
                ->expects($this->atLeastOnce())
                ->method('getBody')
                ->willReturn(json_encode([
                    'access_token' => 'AcCeSs+ToKeN',
                    'key'          => 'value',
                ]));

            return $response;
        };

        $options = [
            'httpClient' => $httpClient,

            'options' => [
                'state' => (object) [
                    'redirect_uri' => self::REDIRECT_URI,

                    'token' => (object) [
                        'obtained' => strtotime('1999-01-01Z'),
                        'data'     => (object) ['access_token'  => 'AcCeSs+ToKeN'],
                    ],
                ],
            ],
        ];

        $graph = $this->createMock(Graph::class);
        $sut   = $this->createClient($graph, $options);
        $sut->obtainAccessToken(self::CLIENT_SECRET, self::AUTH_CODE);
        $this->assertSame('https://login.microsoftonline.com/common/oauth2/v2.0/token', $receivedUri);

        $this->assertSame(
            $receivedOptions,
            [
                'form_params' => [
                    'client_id'     => self::CLIENT_ID,
                    'redirect_uri'  => self::REDIRECT_URI,
                    'client_secret' => self::CLIENT_SECRET,
                    'code'          => self::AUTH_CODE,
                    'grant_type'    => 'authorization_code',
                ],
            ]
        );

        $actual = $sut->getState();

        $this->assertEquals((object) [
            'redirect_uri' => null,

            'token' => (object) [
                'obtained' => strtotime('1999-01-01Z'),

                'data' => (object) [
                    'access_token' => 'AcCeSs+ToKeN',
                    'key'          => 'value',
                ],
            ],
        ], $actual);
    }

    public function testRenewAccessTokenShouldSetExpectedState()
    {
        \FunctionsMock::$timeCallback = function () {
            return strtotime('1999-01-01Z');
        };

        $httpClient      = new ClientMock();
        $receivedUri     = null;
        $receivedOptions = null;

        $httpClient->postCallback = function ($uri, $options) use (&$receivedUri, &$receivedOptions) {
            $receivedUri     = $uri;
            $receivedOptions = $options;
            $response        = $this->createMock(ResponseInterface::class);

            $response
                ->expects($this->atLeastOnce())
                ->method('getBody')
                ->willReturn(json_encode([
                    'access_token' => 'AcCeSs+ToKeN',
                    'key'          => 'value',
                ]));

            return $response;
        };

        $options = [
            'httpClient' => $httpClient,

            'options' => [
                'state' => (object) [
                    'token' => (object) [
                        'obtained' => strtotime('1999-01-01Z'),

                        'data' => (object) [
                            'access_token'  => 'AcCeSs+ToKeN',
                            'refresh_token' => 'ReFrEsH+ToKeN',
                        ],
                    ],
                ],
            ],
        ];

        $graph  = $this->createMock(Graph::class);
        $sut    = $this->createClient($graph, $options);
        $sut->renewAccessToken(self::CLIENT_SECRET);

        $this->assertSame('https://login.microsoftonline.com/common/oauth2/v2.0/token', $receivedUri);

        $this->assertSame(
            $receivedOptions,
            [
                'form_params' => [
                    'client_id'     => self::CLIENT_ID,
                    'client_secret' => self::CLIENT_SECRET,
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => 'ReFrEsH+ToKeN',
                ],
            ]
        );

        $actual = $sut->getState();

        $this->assertEquals((object) [
            'token' => (object) [
                'obtained' => strtotime('1999-01-01Z'),

                'data' => (object) [
                    'access_token' => 'AcCeSs+ToKeN',
                    'key'          => 'value',
                ],
            ],
        ], $actual);
    }

    public function testGetDrivesShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn([$drive]);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createCollectionRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDrives();
        $this->assertInternalType('array', $actual);
        $this->assertCount(1, $actual);

        foreach ($actual as $drive) {
            $this->assertInstanceOf(DriveProxy::class, $drive);
            $this->assertSame(self::DRIVE_ID, $drive->id);
        }
    }

    public function testGetMyDriveShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($drive);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getMyDrive();
        $this->assertInstanceOf(DriveProxy::class, $actual);
        $this->assertSame(self::DRIVE_ID, $actual->id);
    }

    public function testGetDriveByIdShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($drive);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDriveById(self::DRIVE_ID);
        $this->assertInstanceOf(DriveProxy::class, $actual);
        $this->assertSame(self::DRIVE_ID, $actual->id);
    }

    public function testGetDriveByUserShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($drive);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDriveByUser(self::USER_ID);
        $this->assertInstanceOf(DriveProxy::class, $actual);
        $this->assertSame(self::DRIVE_ID, $actual->id);
    }

    public function testGetDriveByGroupShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($drive);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDriveByGroup(self::GROUP_ID);
        $this->assertInstanceOf(DriveProxy::class, $actual);
        $this->assertSame(self::DRIVE_ID, $actual->id);
    }

    public function testGetDriveBySiteShouldReturnExpectedValue()
    {
        $drive = $this->createMock(Drive::class);

        $drive
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($drive);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDriveBySite(self::SITE_ID);
        $this->assertInstanceOf(DriveProxy::class, $actual);
        $this->assertSame(self::DRIVE_ID, $actual->id);
    }

    public function testGetDriveItemByIdShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getDriveItemById(self::DRIVE_ID, self::DRIVE_ITEM_ID);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetRootShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getRoot();
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetSpecialFolderShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getSpecialFolder(SpecialFolderName::DOCUMENTS);
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame(self::DRIVE_ITEM_ID, $actual->id);
    }

    public function testGetSharedShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn([$item]);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createCollectionRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getShared();

        foreach ($actual as $item) {
            $this->assertInstanceOf(DriveItemProxy::class, $item);
            $this->assertSame(self::DRIVE_ITEM_ID, $item->id);
        }
    }

    public function testGetRecentShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn(self::DRIVE_ITEM_ID);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->willReturn('200');

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn([$item]);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createCollectionRequest')
            ->willReturn($request);

        $httpClient = $this->createMock(ClientInterface::class);

        $resourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $serviceDefinition
            ->expects($this->atLeastOnce())
            ->method('getResourceDefinition')
            ->willReturn($resourceDefinition);

        $sut = new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            []
        );

        $actual = $sut->getRecent();

        foreach ($actual as $item) {
            $this->assertInstanceOf(DriveItemProxy::class, $item);
            $this->assertSame(self::DRIVE_ITEM_ID, $item->id);
        }
    }

    private function createClient(Graph $graph, array $options = [])
    {
        $httpClient = array_key_exists('httpClient', $options) ?
            $options['httpClient']
            : $this->createMock(ClientInterface::class);

        $serviceDefinition = $this->createMock(ServiceDefinitionInterface::class);

        $options = array_key_exists('options', $options) ?
            $options['options']
            : [];

        return new Client(
            self::CLIENT_ID,
            $graph,
            $httpClient,
            $serviceDefinition,
            $options
        );
    }
}

class ClientMock extends GuzzleHttpClient
{
    public $postCallback;

    public function post($uri, array $options = [])
    {
        $function = $this->postCallback;

        return $function($uri, $options);
    }
}
