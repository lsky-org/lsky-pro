<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Exception\GraphException;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamFile;
use org\bovigo\vfs\vfsStreamWrapper;
use org\bobigo\vfs\vfsStreamDirectory;

class StreamTest extends TestCase
{
    private $root;
    private $client;
    private $body;
    private $container;

    public function setUp(): void
    {
        $this->root = vfsStream::setup('testDir');

        $this->body = json_encode(array('body' => 'content'));
        $stream = GuzzleHttp\Psr7\stream_for('content');

        $mock = new GuzzleHttp\Handler\MockHandler([
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], $this->body),
            new GuzzleHttp\Psr7\Response(200,['foo' => 'bar'], $stream),
            new GuzzleHttp\Psr7\Response(200, ['foo' => 'bar'], 'hello')
        ]);

        $this->container = [];
        $history = GuzzleHttp\Middleware::history($this->container);
        $handler = GuzzleHttp\HandlerStack::create($mock);
        $handler->push($history);
        $this->client = new GuzzleHttp\Client(['handler' => $handler]);
    }

    public function testUpload()
    {
        $file = new VfsStreamFile('foo.txt');
        $this->root->addChild($file);
        $file->setContent('data');

        $request = new GraphRequest("GET", "/me", "token", "url", "v1.0");
        $request->upload($file->url(), $this->client);

        $this->assertEquals($this->container[0]['request']->getBody()->getContents(), $file->getContent());
    }

    public function testInvalidUpload()
    {
        $this->expectException(Microsoft\Graph\Exception\GraphException::class);

        $file = new VfsStreamFile('foo.txt', 0000);
        $this->root->addChild($file);

        $request = new GraphRequest("GET", "/me", "token", "url", "v1.0");
        $request->upload($file->url(), $this->client);
    }

    public function testDownload()
    {
        $request = new GraphRequest("GET", "/me", "token", "url", "v1.0");
        $file = new VfsStreamFile('foo.txt');
        $this->root->addChild($file);

        $request->download($file->url(), $this->client);
        $this->assertEquals($this->body, $file->getContent());
    }

    public function testInvalidDownload()
    {
        set_error_handler(function() {});
        try {
            $this->expectException(Microsoft\Graph\Exception\GraphException::class);

            $file = new VfsStreamFile('foo.txt', 0000);
            $this->root->addChild($file);

            $request = new GraphRequest("GET", "/me", "token", "url", "v1.0");
            $request->download($file->url(), $this->client);
        } finally {
            restore_error_handler();
        } 
    }

    public function testSetReturnStream()
    {
        $request = new GraphRequest("GET", "/me", "token", "url", "v1.0");
        $request->setReturnType(GuzzleHttp\Psr7\Stream::class);

        $this->assertTrue($request->getReturnsStream());

        $response = $request->execute($this->client);
        $this->assertInstanceOf(GuzzleHttp\Psr7\Stream::class, $response);

        $response = $request->execute($this->client);
        $this->assertInstanceOf(GuzzleHttp\Psr7\Stream::class, $response);
    }
}