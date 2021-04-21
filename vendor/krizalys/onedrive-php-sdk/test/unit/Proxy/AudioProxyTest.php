<?php

namespace Test\Unit\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Proxy\AudioProxy;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Audio;
use PHPUnit\Framework\TestCase;

class AudioProxyTest extends TestCase
{
    public function testAlbumShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getAlbum')
            ->willReturn('Test Album');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Album', $sut->album);
    }

    public function testAlbumArtistShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getAlbumArtist')
            ->willReturn('Test Album Artist');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Album Artist', $sut->albumArtist);
    }

    public function testArtistShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getArtist')
            ->willReturn('Test Artist');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Artist', $sut->artist);
    }

    public function testBitrateShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getBitrate')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->bitrate);
    }

    public function testComposersShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getComposers')
            ->willReturn('Test Composers');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Composers', $sut->composers);
    }

    public function testCopyrightShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getCopyright')
            ->willReturn('Test Copyright');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Copyright', $sut->copyright);
    }

    public function testDiscShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getDisc')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->disc);
    }

    public function testDiscCountCopyrightShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getDiscCount')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->discCount);
    }

    public function testDurationShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getDuration')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->duration);
    }

    public function testGenreShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getGenre')
            ->willReturn('Test Genre');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Genre', $sut->genre);
    }

    public function testHasDrmShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getHasDrm')
            ->willReturn(true);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(true, $sut->hasDrm);
    }

    public function testIsVariableBitrateShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getIsVariableBitrate')
            ->willReturn(true);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(true, $sut->isVariableBitrate);
    }

    public function testTitleShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getTitle')
            ->willReturn('Test Title');

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame('Test Title', $sut->title);
    }

    public function testTrackShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getTrack')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->track);
    }

    public function testTrackCountShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getTrackCount')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->trackCount);
    }

    public function testYearShouldReturnExpectedValue()
    {
        $graph = $this->createMock(Graph::class);

        $audio = $this->createMock(Audio::class);

        $audio
            ->expects($this->atLeastOnce())
            ->method('getYear')
            ->willReturn(123);

        $sut = new AudioProxy($graph, $audio);
        $this->assertSame(123, $sut->year);
    }
}
