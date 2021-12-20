<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Exception\GraphException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client;

class HttpTest extends TestCase
{
    public $client;
    public $getRequest;
    public $container;

    public function setUp(): void
    {
        $mock = new MockHandler([
            new Response(200, ['foo' => 'bar']),
            new Response(200, ['foo' => 'bar'])
        ]);
        $this->container = [];
        $history = GuzzleHttp\Middleware::history($this->container);
        $handler = HandlerStack::create($mock);
        $handler->push($history);
        $this->client = new Client(['handler' => $handler]);

        $this->getRequest = new GraphRequest("GET", "/endpoint", "token", "baseUrl", "version");
    }

    public function testGet()
    {
        $response = $this->getRequest->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testPost()
    {
        $request = new GraphRequest("POST", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testPut()
    {
        $request = new GraphRequest("PUT", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testPatch()
    {
        $request = new GraphRequest("PATCH", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testUpdate()
    {
        $request = new GraphRequest("UPDATE", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testDelete()
    {
        $request = new GraphRequest("DELETE", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($this->client);
        $code = $response->getStatus();

        $this->assertEquals("200", $code);
    }

    public function testInvalidVerb()
    {
        $this->expectException(GraphException::class);

        $mock = new MockHandler([
            new Response(400, ['foo' => 'bar'])
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $request = new GraphRequest("OBLITERATE", "/endpoint", "token", "baseUrl", "version");
        $response = $request->execute($client);
        $code = $response->getStatus();

        $this->assertEquals("400", $code);
    }

    public function testSendJson()
    {
        $body = json_encode(array('1' => 'a', '2' => 'b'));

        $request = $this->getRequest->attachBody($body);
        $this->assertInstanceOf(GraphRequest::class, $request);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
        $this->assertEquals($body, $this->container[0]['request']->getBody()->getContents());
    }

    public function testSendArray()
    {
        $body = array('1' => 'a', '2' => 'b');
        $request = $this->getRequest->attachBody($body);
        $this->assertInstanceOf(GraphRequest::class, $request);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
        $this->assertEquals(json_encode($body), $this->container[0]['request']->getBody()->getContents());
    }

    public function testSendObject()
    {
        $user = new Microsoft\Graph\Model\User();
        $user->setDisplayName('Bob Barker');
        $request = $this->getRequest->attachBody($user);
        $this->assertInstanceOf(GraphRequest::class, $request);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
        $this->assertEquals(json_encode($user->getProperties()), $this->container[0]['request']->getBody()->getContents());
    }

    public function testSendString()
    {
        $body = '{"1":"a","2":"b"}';
        $request = $this->getRequest->attachBody($body);
        $this->assertInstanceOf(GraphRequest::class, $request);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
        $this->assertEquals($body, $this->container[0]['request']->getBody()->getContents());
    }

    public function testSendStream()
    {
        $body = GuzzleHttp\Psr7\stream_for('stream');
        $request = $this->getRequest->attachBody($body);
        $this->assertInstanceOf(GraphRequest::class, $request);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(Microsoft\Graph\Http\GraphResponse::class, $response);
        $this->assertEquals($body, $this->container[0]['request']->getBody()->getContents());
    }
}