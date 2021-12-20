<?php

namespace Test\Unit\Krizalys\Onedrive\Parameter;

use Krizalys\Onedrive\Definition\Parameter\ParameterDefinitionInterface;
use Krizalys\Onedrive\Parameter\ParameterBuilder;
use PHPUnit\Framework\TestCase;

class ParameterBuilderTest extends TestCase
{
    public function testBuildShouldReturnExpectedValue()
    {
        $parameterDefinition1 = $this->createMock(ParameterDefinitionInterface::class);

        $parameterDefinition1
            ->expects($this->atLeastOnce())
            ->method('serializeValue')
            ->willReturnCallback(function ($value) {
                return "Serialized $value";
            });

        $parameterDefinition1
            ->expects($this->atLeastOnce())
            ->method('injectValue')
            ->willReturnCallback(function (array $values, $value) {
                return $values + [$value => $value];
            });

        $parameterDefinition2 = $this->createMock(ParameterDefinitionInterface::class);

        $parameterDefinition2
            ->expects($this->atLeastOnce())
            ->method('serializeValue')
            ->willReturnCallback(function ($value) {
                return "Serialized $value";
            });

        $parameterDefinition2
            ->expects($this->atLeastOnce())
            ->method('injectValue')
            ->willReturnCallback(function (array $values, $value) {
                return $values + [$value => $value];
            });

        $sut = new ParameterBuilder();

        $actual = $sut->build(
            [
                '1' => $parameterDefinition1,
                '2' => $parameterDefinition2,
                '3' => $parameterDefinition2,
            ],
            [
                '1' => 1,
                '2' => 2,
                '4' => 4,
            ]
        );

        $this->assertSame([
            'Serialized 1' => 'Serialized 1',
            'Serialized 2' => 'Serialized 2',
        ], $actual);
    }
}
