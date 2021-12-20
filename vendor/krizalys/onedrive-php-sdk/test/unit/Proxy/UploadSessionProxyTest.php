<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use GuzzleHttp\Psr7;
use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use Krizalys\Onedrive\Proxy\UploadSessionProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Http\GraphRequest;
use Microsoft\Graph\Http\GraphResponse;
use Microsoft\Graph\Model\DriveItem;
use Microsoft\Graph\Model\UploadSession;
use PHPUnit\Framework\TestCase;

class UploadSessionProxyTest extends TestCase
{
    public function testExpirationDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $uploadSession = $this->createMock(UploadSession::class);

        $uploadSession
            ->expects($this->atLeastOnce())
            ->method('getExpirationDateTime')
            ->willReturn($dateTime);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            '',
            $driveItemResourceDefinition
        );

        $this->assertSame($dateTime, $sut->expirationDateTime);
    }

    public function testNextExpectedRangesShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $uploadSession = $this->createMock(UploadSession::class);

        $uploadSession
            ->expects($this->atLeastOnce())
            ->method('getNextExpectedRanges')
            ->willReturn(['0-1', '2-3']);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            '',
            $driveItemResourceDefinition
        );

        $this->assertInternalType('array', $sut->nextExpectedRanges);
        $this->assertSame(['0-1', '2-3'], $sut->nextExpectedRanges);
    }

    public function testUploadUrlShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $uploadSession = $this->createMock(UploadSession::class);

        $uploadSession
            ->expects($this->atLeastOnce())
            ->method('getUploadUrl')
            ->willReturn('http://uplo.ad/url');

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            '',
            $driveItemResourceDefinition
        );

        $this->assertInternalType('string', $sut->uploadUrl);
        $this->assertSame('http://uplo.ad/url', $sut->uploadUrl);
    }

    public function testCompleteWithStringContentShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('123abc');

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->will($this->onConsecutiveCalls(202, 201));

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('addHeaders')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $uploadSession = $this->createMock(UploadSession::class);

        $content = str_repeat('1', 327680 + 1);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $options = [
            'range_size' => 327680,
        ];

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            $content,
            $driveItemResourceDefinition,
            $options
        );

        $actual = $sut->complete();
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame('123abc', $actual->id);
    }

    public function testCompleteWithStreamContentShouldReturnExpectedValue()
    {
        $item = $this->createMock(DriveItem::class);

        $item
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('123abc');

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->will($this->onConsecutiveCalls(202, 201));

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('addHeaders')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $uploadSession = $this->createMock(UploadSession::class);

        $content = Psr7\stream_for(str_repeat('1', 327680 + 1));

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $options = [
            'range_size' => 327680,
        ];

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            $content,
            $driveItemResourceDefinition,
            $options
        );

        $actual = $sut->complete();
        $this->assertInstanceOf(DriveItemProxy::class, $actual);
        $this->assertSame('123abc', $actual->id);
    }

    public function testCompleteContentShouldSendExpectedHeaders()
    {
        $item = $this->createMock(DriveItem::class);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->will($this->onConsecutiveCalls(202, 201));

        $response
            ->expects($this->atLeastOnce())
            ->method('getResponseAsObject')
            ->willReturn($item);

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $request
            ->expects($this->exactly(2))
            ->method('addHeaders')
            ->withConsecutive(
                [$this->callback(function ($headers) {
                    return
                        $headers['Content-Length'] == '655360'
                        && $headers['Content-Range'] == 'bytes 0-655359/655361';
                })],
                [$this->callback(function ($headers) {
                    return
                        $headers['Content-Length'] == '1'
                        && $headers['Content-Range'] == 'bytes 655360-655360/655361';
                })]
            )
            ->willReturnSelf();

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $uploadSession = $this->createMock(UploadSession::class);

        $content = str_repeat('1', 655360 + 1);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $options = [
            'range_size' => 655360,
        ];

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            $content,
            $driveItemResourceDefinition,
            $options
        );

        $sut->complete();
    }

    /**
     * @expectedException \Exception
     *
     * @expectedExceptionMessage OneDrive did not create a drive item for the
     *                           uploaded file
     */
    public function testCompleteShouldThrowFileNotCreatedException()
    {
        $item = $this->createMock(DriveItem::class);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->will($this->onConsecutiveCalls(202, 202));

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('addHeaders')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $uploadSession = $this->createMock(UploadSession::class);

        $content = str_repeat('1', 327680 + 1);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $options = [
            'range_size' => 327680,
        ];

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            $content,
            $driveItemResourceDefinition,
            $options
        );

        $sut->complete();
    }

    /**
     * @expectedException \Exception
     *
     * @expectedExceptionMessage Unexpected status code produced by 'PUT
     *                           http://uplo.ad/url': 503
     */
    public function testCompleteShouldThrowUnexpectedStatusCodeException()
    {
        $item = $this->createMock(DriveItem::class);

        $response = $this->createMock(GraphResponse::class);

        $response
            ->expects($this->atLeastOnce())
            ->method('getStatus')
            ->will($this->onConsecutiveCalls(202, 503));

        $request = $this->createMock(GraphRequest::class);

        $request
            ->expects($this->atLeastOnce())
            ->method('addHeaders')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('attachBody')
            ->willReturnSelf();

        $request
            ->expects($this->atLeastOnce())
            ->method('execute')
            ->willReturn($response);

        $graph = $this->createMock(Graph::class);

        $graph
            ->expects($this->atLeastOnce())
            ->method('createRequest')
            ->willReturn($request);

        $uploadSession = $this->createMock(UploadSession::class);

        $uploadSession
            ->expects($this->atLeastOnce())
            ->method('getUploadUrl')
            ->willReturn('http://uplo.ad/url');

        $content = str_repeat('1', 327680 + 1);

        $driveItemResourceDefinition = $this->createMock(ResourceDefinitionInterface::class);

        $options = [
            'range_size' => 327680,
        ];

        $sut = new UploadSessionProxy(
            $graph,
            $uploadSession,
            $content,
            $driveItemResourceDefinition,
            $options
        );

        $sut->complete();
    }
}
