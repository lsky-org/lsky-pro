<?php

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Microsoft\Graph\Core\ExceptionWrapper;
use Microsoft\Graph\Exception\GraphException;
use PHPUnit\Framework\TestCase;

class ExceptionWrapperTest extends TestCase
{
    public function testWrapBadResponseExceptionReturnsGraphException()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new BadResponseException("Error: API returned 400", new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertInstanceOf(GraphException::class, $graphException);
    }

    public function testWrapBadResponseExceptionHasResponseBody()
    {
        $responseBody = json_encode(array('body' => 'content'));
        $ex = new BadResponseException("Error: API returned 400", new Request("GET", "/endpoint"), new Response(400, [], $responseBody));
        $graphException = ExceptionWrapper::wrapGuzzleBadResponseException($ex);
        $this->assertStringContainsString($responseBody, $graphException->getMessage());
    }

    public function testWrapBadResponseExceptionWithInvalidInput()
    {
        $this->expectException(TypeError::class);
        ExceptionWrapper::wrapGuzzleBadResponseException(null);
    }
}