<?php

namespace Test\Unit\Krizalys\Onedrive\Definition\Parameter;

use Krizalys\Onedrive\Definition\Parameter\AbstractParameterDefinition;
use Krizalys\Onedrive\Parameter\Injector\InjectorInterface;
use Krizalys\Onedrive\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

class AbstractParameterDefinitionTest extends TestCase
{
    public function testSerializeValueShouldInteractWithItsSerializerAsExpected()
    {
        $injector = $this->createMock(InjectorInterface::class);

        $serializer = $this->createMock(SerializerInterface::class);

        $serializer
            ->expects($this->once())
            ->method('serialize')
            ->with('Value')
            ->willReturn('Serialized value');

        $sut = new TestAbstractParameterDefinition($injector, $serializer);

        $actual = $sut->serializeValue('Value');
        $this->assertSame('Serialized value', $actual);
    }

    public function testInjectValueShouldInteractWithItsInjectorAsExpected()
    {
        $injector = $this->createMock(InjectorInterface::class);

        $injector
            ->expects($this->once())
            ->method('inject')
            ->with(['key' => 'value'], 'Value')
            ->willReturn(['injected_key' => 'Injected value']);

        $serializer = $this->createMock(SerializerInterface::class);

        $sut = new TestAbstractParameterDefinition($injector, $serializer);

        $actual = $sut->injectValue(['key' => 'value'], 'Value');
        $this->assertSame(['injected_key' => 'Injected value'], $actual);
    }
}

class TestAbstractParameterDefinition extends AbstractParameterDefinition
{
}
