<?php

namespace Test\Unit\Krizalys\Onedrive\Parameter;

use Krizalys\Onedrive\Parameter\ParameterBuilderInterface;
use Krizalys\Onedrive\Parameter\ParameterDefinitionCollection;
use PHPUnit\Framework\TestCase;

class ParameterDefinitionCollectionTest extends TestCase
{
    public function testBuildOptionsShouldReturnExpectedValue()
    {
        $parameterBuilder = $this->createMock(ParameterBuilderInterface::class);

        $parameterBuilder
            ->expects($this->atLeastOnce())
            ->method('build')
            ->willReturnCallback(function (array $_, $options) {
                return $options;
            });

        $sut = new ParameterDefinitionCollection($parameterBuilder, []);

        $options = ['name' => 'Value'];
        $actual  = $sut->buildOptions($options);
        $this->assertSame($options, $actual);
    }
}
