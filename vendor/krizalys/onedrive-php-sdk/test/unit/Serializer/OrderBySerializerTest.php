<?php

namespace Test\Unit\Krizalys\Onedrive\Serializer;

use Krizalys\Onedrive\Serializer\OrderBySerializer;
use PHPUnit\Framework\TestCase;

class OrderBySerializerTest extends TestCase
{
    public function testSerializeShouldReturnExpectedValue()
    {
        $sut = new OrderBySerializer();

        $actual = $sut->serialize([
            ['a', 'asc'],
            ['b', 'desc'],
        ]);

        $this->assertSame('a asc, b desc', $actual);
    }
}
