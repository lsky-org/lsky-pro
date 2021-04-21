<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\VideoProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Video;
use PHPUnit\Framework\TestCase;

class VideoProxyTest extends TestCase
{
    public function testAudioBitsPerSampleShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getAudioBitsPerSample')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->audioBitsPerSample);
    }

    public function testAudioChannelsShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getAudioChannels')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->audioChannels);
    }

    public function testAudioFormatShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getAudioFormat')
            ->willReturn('TestAudioFormat');

        $sut = new VideoProxy($graph, $video);
        $this->assertSame('TestAudioFormat', $sut->audioFormat);
    }

    public function testAudioSamplesPerSecondShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getAudioSamplesPerSecond')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->audioSamplesPerSecond);
    }

    public function testBitrateShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getBitrate')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->bitrate);
    }

    public function testDurationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getDuration')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->duration);
    }

    public function testFourCCFormatShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getFourCC')
            ->willReturn('TestFourCC');

        $sut = new VideoProxy($graph, $video);
        $this->assertSame('TestFourCC', $sut->fourCc);
    }

    public function testFrameRateShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getFrameRate')
            ->willReturn(1.23);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(1.23, $sut->frameRate);
    }

    public function testHeightShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getHeight')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->height);
    }

    public function testWidthRateShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $video = $this->createMock(Video::class);

        $video
            ->expects($this->atLeastOnce())
            ->method('getWidth')
            ->willReturn(123);

        $sut = new VideoProxy($graph, $video);
        $this->assertSame(123, $sut->width);
    }
}
