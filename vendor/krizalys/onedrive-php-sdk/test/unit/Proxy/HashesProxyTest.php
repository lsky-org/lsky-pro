<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\HashesProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Hashes;
use PHPUnit\Framework\TestCase;

class HashesProxyTest extends TestCase
{
    public function testCrc32HashShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $hashes = $this->createMock(Hashes::class);

        $hashes
            ->expects($this->atLeastOnce())
            ->method('getCrc32Hash')
            ->willReturn('1234');

        $sut = new HashesProxy($graph, $hashes);
        $this->assertInternalType('string', $sut->crc32Hash);
        $this->assertSame('1234', $sut->crc32Hash);
    }

    public function testQuickXorHashShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $hashes = $this->createMock(Hashes::class);

        $hashes
            ->expects($this->atLeastOnce())
            ->method('getQuickXorHash')
            ->willReturn('1234');

        $sut = new HashesProxy($graph, $hashes);
        $this->assertInternalType('string', $sut->quickXorHash);
        $this->assertSame('1234', $sut->quickXorHash);
    }

    public function testSha1HashShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $hashes = $this->createMock(Hashes::class);

        $hashes
            ->expects($this->atLeastOnce())
            ->method('getSha1Hash')
            ->willReturn('1234');

        $sut = new HashesProxy($graph, $hashes);
        $this->assertInternalType('string', $sut->sha1Hash);
        $this->assertSame('1234', $sut->sha1Hash);
    }
}
