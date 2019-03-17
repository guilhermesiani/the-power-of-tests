<?php

namespace Test\Unit\Ammunitions;

use PHPUnit\Framework\TestCase;
use App\Ammunitions\Factory;
use App\Ammunitions\Stone;

class FactoryTest extends TestCase
{
    function testMakeWithStoneShouldReturnInstance()
    {
        $this->assertInstanceOf(Stone::class, (new Factory)->make('stone'));
    }

    function testMakeWithInvalidStringShouldThrownAnException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid ammunition name');
        (new Factory)->make('nonExistentAmmunition');
    }
}
