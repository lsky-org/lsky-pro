<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\DriveType;
use Krizalys\Onedrive\Proxy\ItemReferenceProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\ItemReference;
use PHPUnit\Framework\TestCase;

class ItemReferenceProxyTest extends TestCase
{
    public function testIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getId')
            ->willReturn('1234');

        $sut = new ItemReferenceProxy($graph, $itemReference);
        $this->assertInternalType('string', $sut->id);
        $this->assertSame('1234', $sut->id);
    }

    public function testDriveIdShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveId')
            ->willReturn('1234');

        $sut = new ItemReferenceProxy($graph, $itemReference);
        $this->assertInternalType('string', $sut->driveId);
        $this->assertSame('1234', $sut->driveId);
    }

    public function testDriveTypeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getDriveType')
            ->willReturn(DriveType::PERSONAL);

        $sut = new ItemReferenceProxy($graph, $itemReference);
        $this->assertInternalType('string', $sut->driveType);
        $this->assertSame(DriveType::PERSONAL, $sut->driveType);
    }

    public function testPathShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $itemReference = $this->createMock(ItemReference::class);

        $itemReference
            ->expects($this->atLeastOnce())
            ->method('getPath')
            ->willReturn('/path');

        $sut = new ItemReferenceProxy($graph, $itemReference);
        $this->assertInternalType('string', $sut->path);
        $this->assertSame('/path', $sut->path);
    }
}
