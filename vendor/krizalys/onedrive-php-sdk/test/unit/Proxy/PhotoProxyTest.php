<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\PhotoProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Photo;
use PHPUnit\Framework\TestCase;

class PhotoProxyTest extends TestCase
{
    public function testCameraMakeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getCameraMake')
            ->willReturn('Test Camera Make');

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame('Test Camera Make', $sut->cameraMake);
    }

    public function testCameraModelShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getCameraModel')
            ->willReturn('Test Camera Model');

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame('Test Camera Model', $sut->cameraModel);
    }

    public function testExposureDenominatorShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getExposureDenominator')
            ->willReturn(1.23);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame(1.23, $sut->exposureDenominator);
    }

    public function testExposureNumeratorShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getExposureNumerator')
            ->willReturn(1.23);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame(1.23, $sut->exposureNumerator);
    }

    public function testFNumberShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getFNumber')
            ->willReturn(1.23);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame(1.23, $sut->fNumber);
    }

    public function testFocalLengthShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getFocalLength')
            ->willReturn(1.23);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame(1.23, $sut->focalLength);
    }

    public function testIsoShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getIso')
            ->willReturn(123);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame(123, $sut->iso);
    }

    public function testTakenDateTimeShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $dateTime = new \DateTime();

        $photo = $this->createMock(Photo::class);

        $photo
            ->expects($this->atLeastOnce())
            ->method('getTakenDateTime')
            ->willReturn($dateTime);

        $sut = new PhotoProxy($graph, $photo);
        $this->assertSame($dateTime, $sut->takenDateTime);
    }
}
