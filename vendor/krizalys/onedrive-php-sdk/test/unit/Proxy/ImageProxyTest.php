<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\ImageProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Image;
use PHPUnit\Framework\TestCase;

class ImageProxyTest extends TestCase
{
    public function testHeightShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $image = $this->createMock(Image::class);

        $image
            ->expects($this->atLeastOnce())
            ->method('getHeight')
            ->willReturn(123);

        $sut = new ImageProxy($graph, $image);
        $this->assertSame(123, $sut->height);
    }

    public function testWidthShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $image = $this->createMock(Image::class);

        $image
            ->expects($this->atLeastOnce())
            ->method('getWidth')
            ->willReturn(123);

        $sut = new ImageProxy($graph, $image);
        $this->assertSame(123, $sut->width);
    }
}
