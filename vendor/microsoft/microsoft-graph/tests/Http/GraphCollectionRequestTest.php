<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Http\GraphCollectionRequest;
use Microsoft\Graph\Model;

class GraphCollectionRequestTest extends TestCase
{
    private $collectionRequest;
    private $client;
    private $reflectedRequestUrlHandler;

    public function setUp(): void
    {
        $this->collectionRequest = new GraphCollectionRequest("GET", "/endpoint", "token", "url", "version");
        $this->collectionRequest->setReturnType(Model\User::class);
        $this->collectionRequest->setPageSize(2);

        $body = json_encode(array('body' => 'content', '@odata.nextLink' => 'url/version/endpoint?skiptoken=link'));
        $body2 = json_encode(array('body' => 'content'));
        $mock = new GuzzleHttp\Handler\MockHandler([
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $body),
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $body2),
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $body2),
        ]);
        $handler = GuzzleHttp\HandlerStack::create($mock);
        $this->client = new GuzzleHttp\Client(['handler' => $handler]);

        $this->reflectedRequestUrlHandler = new ReflectionMethod('Microsoft\Graph\Http\GraphRequest', '_getRequestUrl');
        $this->reflectedRequestUrlHandler->setAccessible(true);
    }

    public function testHitEndOfCollection()
    {
        $this->expectError();

        //First page
        $this->collectionRequest->setPageCallInfo();
        $response = $this->collectionRequest->execute($this->client);
        $this->collectionRequest->processPageCallReturn($response);

        //Last page
        $this->collectionRequest->setPageCallInfo();
        $response = $this->collectionRequest->execute($this->client);
        $result1 = $this->collectionRequest->processPageCallReturn($response);

        $this->assertTrue($this->collectionRequest->isEnd());

        //Expect error
        $this->collectionRequest->setPageCallInfo();
    }

    public function testProcessPageCallReturn()
    {
        $this->collectionRequest->setPageCallInfo();
        $response = $this->collectionRequest->execute($this->client);
        $result = $this->collectionRequest->processPageCallReturn($response);
        $this->assertInstanceOf(Microsoft\Graph\Model\User::class, $result);
    }

    public function testEndpointManipulation()
    {
        //Page should be 1
        $this->assertFalse($this->collectionRequest->isEnd());

        $requestUrl = $this->reflectedRequestUrlHandler->invokeArgs($this->collectionRequest, array());

        $this->assertEquals($requestUrl, 'version/endpoint');

        $this->collectionRequest->setPageCallInfo();

        $requestUrl = $this->reflectedRequestUrlHandler->invokeArgs($this->collectionRequest, array());
        $this->assertEquals('version/endpoint?$top=2', $requestUrl);
    }
}