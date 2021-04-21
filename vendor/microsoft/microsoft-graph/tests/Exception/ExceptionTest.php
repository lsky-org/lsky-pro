<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Exception\GraphException;

class ExceptionTest extends TestCase
{
    public function testToString()
    {
        $exception = new GraphException('bad stuff', '404');
        $this->assertEquals("Microsoft\Graph\Exception\GraphException: [404]: bad stuff\n", $exception->__toString());
    }
}