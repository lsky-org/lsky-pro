<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\FileProxy;
use Krizalys\Onedrive\Proxy\HashesProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\File;
use Microsoft\Graph\Model\Hashes;
use PHPUnit\Framework\TestCase;

class FileProxyTest extends TestCase
{
    public function testCrc32HashShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $hashes = $this->createMock(Hashes::class);

        $hashes
            ->expects($this->atLeastOnce())
            ->method('getCrc32Hash')
            ->willReturn('1234');

        $file = $this->createMock(File::class);

        $file
            ->expects($this->atLeastOnce())
            ->method('getHashes')
            ->willReturn($hashes);

        $sut = new FileProxy($graph, $file);
        $this->assertInstanceOf(HashesProxy::class, $sut->hashes);
        $this->assertSame('1234', $sut->hashes->crc32Hash);
    }

    public function testMimeTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $file = $this->createMock(File::class);

        $file
            ->expects($this->atLeastOnce())
            ->method('getMimeType')
            ->willReturn('mime/type');

        $sut = new FileProxy($graph, $file);
        $this->assertInternalType('string', $sut->mimeType);
        $this->assertSame('mime/type', $sut->mimeType);
    }
}
