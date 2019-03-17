<?php

namespace Test\Unit\Targets;

use PHPUnit\Framework\TestCase;
use App\Targets\Factory;
use App\Targets\Bird;

class FactoryTest extends TestCase
{
    function testMakeWithBirdShouldReturnInstance()
    {
        $this->assertInstanceOf(Bird::class, (new Factory)->make('bird'));
    }

    function testMakeWithInvalidStringShouldThrownAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid target name');
        (new Factory)->make('nonExistentTarget');
    }
}
