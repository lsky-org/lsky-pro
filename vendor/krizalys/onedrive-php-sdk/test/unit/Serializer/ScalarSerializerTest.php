<?php

namespace Test\Unit\Krizalys\Onedrive\Serializer;

use Krizalys\Onedrive\Serializer\ScalarSerializer;
use PHPUnit\Framework\TestCase;

class ScalarSerializerTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testSerializeShouldReturnExpectedValue($value, $expected)
    {
        $sut = new ScalarSerializer();

        $actual = $sut->serialize($value);
        $this->assertSame($expected, $actual);
    }

    public function valueProvider()
    {
        return [
            ['Test', 'Test'],
            [1234,   '1234'],
            [false,  'false'],
            [true,   'true'],
        ];
    }
}
