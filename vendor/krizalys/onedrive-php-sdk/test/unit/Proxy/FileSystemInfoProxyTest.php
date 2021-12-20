<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\FileSystemInfoProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\FileSystemInfo;
use PHPUnit\Framework\TestCase;

class FileSystemInfoProxyTest extends TestCase
{
    public function testCreatedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $fileSystemInfo = $this->createMock(FileSystemInfo::class);

        $fileSystemInfo
            ->expects($this->atLeastOnce())
            ->method('getCreatedDateTime')
            ->willReturn($dateTime);

        $sut = new FileSystemInfoProxy($graph, $fileSystemInfo);
        $this->assertSame($dateTime, $sut->createdDateTime);
    }

    public function testLastAccessedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $fileSystemInfo = $this->createMock(FileSystemInfo::class);

        $fileSystemInfo
            ->expects($this->atLeastOnce())
            ->method('getLastAccessedDateTime')
            ->willReturn($dateTime);

        $sut = new FileSystemInfoProxy($graph, $fileSystemInfo);
        $this->assertSame($dateTime, $sut->lastAccessedDateTime);
    }

    public function testLastModifiedDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $fileSystemInfo = $this->createMock(FileSystemInfo::class);

        $fileSystemInfo
            ->expects($this->atLeastOnce())
            ->method('getLastModifiedDateTime')
            ->willReturn($dateTime);

        $sut = new FileSystemInfoProxy($graph, $fileSystemInfo);
        $this->assertSame($dateTime, $sut->lastModifiedDateTime);
    }
}
