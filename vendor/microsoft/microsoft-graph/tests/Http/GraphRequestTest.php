<?php

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Core\GraphConstants;
use Microsoft\Graph\Exception\GraphException;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\Test\MockClientFactory;

class GraphRequestTest extends TestCase
{
    protected $requests;
    protected $defaultHeaders;
    protected $client;

    public function setUp(): void
    {
        $this->requests = array(
            new GraphRequest("GET", "/endpoint", "token", "baseUrl", "version"),
            new GraphRequest("PATCH", "/endpoint?query", "token", "baseUrl", "version"),
            new GraphRequest("GET", "/endpoint?query&query2", "token", "baseUrl", "version")
        );

        $this->defaultHeaders = array(
            "Host" => "baseUrl",
            "Content-Type" => "application/json",
            "SdkVersion" => "Graph-php-" . GraphConstants::SDK_VERSION,
            "Authorization" => "Bearer token"
        );

        $body = json_encode(array('body' => 'content'));
        $mock = new GuzzleHttp\Handler\MockHandler([
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $body),
            new GuzzleHttp\Psr7\Response(201, ['foo' => 'bar']),
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $body)
        ]);
        $handler = GuzzleHttp\HandlerStack::create($mock);
        $this->client = new GuzzleHttp\Client(['handler' => $handler]);
    }

    public function testSetReturnType()
    {
        //Temporarily make getRequestUrl() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphRequest', '_getRequestUrl');
        $reflectionMethod->setAccessible(true);

        $graph = new Graph();
        $graph->setApiVersion('beta');
        $graph->setAccessToken('token');
        $request = $graph->createRequest("get", "/me");
        $graph->setApiVersion('v1.0');

        $requestUrl = $reflectionMethod->invokeArgs($request, array());
        $this->assertEquals($requestUrl, "beta/me");

        $request2 = $graph->createRequest("get", "/me");
        $requestUrl = $reflectionMethod->invokeArgs($request2, array());
        $this->assertEquals("v1.0/me", $requestUrl);
    }

    public function testAddHeaders()
    {
        $testHeader = array("test" => "header");
        $request = $this->requests[0]->addHeaders($testHeader);
        $headers = $request->getHeaders();

        $expectedHeaders = array(
            "Host" => "baseUrl",
            "Content-Type" => "application/json",
            "SdkVersion" => "Graph-php-" . GraphConstants::SDK_VERSION,
            "Authorization" => "Bearer token",
            "test" => "header"
        );

        $this->assertEquals($expectedHeaders, $headers);
    }

    public function testCustomHeadersOverwriteDefaults()
    {
        $testHeader = array("Content-Type" => "application/x-www-form-urlencoded");
        $request = $this->requests[0]->addHeaders($testHeader);
        $headers = $request->getHeaders();

        $expectedHeaders = array(
            "Host" => "baseUrl",
            "Content-Type" => "application/x-www-form-urlencoded",
            "SdkVersion" => "Graph-php-" . GraphConstants::SDK_VERSION,
            "Authorization" => "Bearer token"
        );

        $this->assertEquals($expectedHeaders, $headers);
    }

    public function testDefaultHeaders()
    {
        $headers = $this->requests[0]->getHeaders();

        $this->assertEquals($this->defaultHeaders, $headers);
    }

    public function testGetBody()
    {
        $testBody = json_encode(array('body' => 'content'));
        $this->requests[0]->attachBody($testBody);
        $body = $this->requests[0]->getBody();
        $this->assertEquals($testBody, $body);
    }

    public function testAttachPropertyDictionary()
    {
        $model = new Microsoft\Graph\Model\User(array("id" => 1, "manager" => new Microsoft\Graph\Model\User(array("id" => 2))));
        $this->requests[0]->attachBody($model);
        $body = $this->requests[0]->getBody();
        $this->assertEquals('{"id":1,"manager":{"id":2}}', $body);
    }

    public function testAttachDoubleNestedDictionary()
    {
        $testBody = json_encode(array("data"=> array("key" => array("key2" => "val"))));
        $this->requests[0]->attachBody(array("data"=> array("key" => array("key2" => "val"))));
        $body = $this->requests[0]->getBody();
        $this->assertEquals($testBody, $body);
    }

    public function testSetTimeout()
    {
        $this->requests[0]->setTimeout('200');
        $this->assertEquals('200', $this->requests[0]->getTimeout());
    }

    public function testDefaultTimeout()
    {
        $this->assertEquals('100', $this->requests[0]->getTimeout());
    }

    public function testCreateGuzzleClient()
    {
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphRequest', 'createGuzzleClient');
        $reflectionMethod->setAccessible(true);

        $request = $this->requests[0];
        $client = $reflectionMethod->invokeArgs($request, array());

        $this->assertInstanceOf(GuzzleHttp\Client::class, $client);

    }

    public function testExecute()
    {
        $response = $this->requests[0]->execute($this->client);

        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
    }

    public function testExecuteWithTimeout()
    {
        $response = $this->requests[0]->setTimeout(300)->execute($this->client);

        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
    }

    public function testExecuteAsync()
    {
        $promise = $this->requests[0]
                         ->executeAsync($this->client);
        $this->assertInstanceOf(GuzzleHttp\Promise\PromiseInterface::class, $promise);

        $promise = $this->requests[1]
                         ->executeAsync($this->client);
        $this->assertInstanceOf(GuzzleHttp\Promise\PromiseInterface::class, $promise);

        $response = \GuzzleHttp\Promise\unwrap(array($promise));
        foreach ($response as $responseItem) {
            $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $responseItem);
        }
    }

    public function testGetRequestUrl()
    {
        //Temporarily make getRequestUrl() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphRequest', '_getRequestUrl');
        $reflectionMethod->setAccessible(true);

        $requestUrl = $reflectionMethod->invokeArgs($this->requests[0], array());
        $this->assertEquals($requestUrl, "version/endpoint");
    }

    public function testGetConcatenator()
    {
        //Temporarily make getConcatenator() public
        $reflectionMethod = new ReflectionMethod('Microsoft\Graph\Http\GraphRequest', 'getConcatenator');
        $reflectionMethod->setAccessible(true);

        $concatenator = $reflectionMethod->invokeArgs($this->requests[0], array());
        $this->assertEquals($concatenator, "?");

        $concatenator = $reflectionMethod->invokeArgs($this->requests[1], array());
        $this->assertEquals($concatenator, "&");

        $concatenator = $reflectionMethod->invokeArgs($this->requests[2], array());
        $this->assertEquals($concatenator, "&");
    }

    public function testExecuteWith4xxResponse()
    {
        $this->expectException(GraphException::class);
        $mockResponse = array(new Response(400));
        $client = MockClientFactory::create(['http_errors' => true], $mockResponse);
        $this->requests[0]->execute($client);
    }

    public function testExecuteWith5xxResponse()
    {
        $this->expectException(GraphException::class);
        $mockResponse = array(new Response(500));
        $client = MockClientFactory::create(['http_errors' => true], $mockResponse);
        $this->requests[0]->execute($client);
    }
    
    public function testExecuteAsyncWithBadResponseTriggersNotice()
    {
        $this->expectNotice();
        $mockResponse = array(new Response(400));
        $client = MockClientFactory::create(['http_errors' => true], $mockResponse);
        $promise = $this->requests[0]->executeAsync($client);
        $promise->wait();
    }

    public function testExecuteAsyncWithBadResponseReturnsNull()
    {
        $mockResponse = array(new Response(400));
        $client = MockClientFactory::create(['http_errors' => true], $mockResponse);
        $promise = $this->requests[0]->executeAsync($client);
        $result = @$promise->wait();
        $this->assertNull($result);
    }
}
