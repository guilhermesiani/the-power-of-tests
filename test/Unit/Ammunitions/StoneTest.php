<?php

namespace Test\Unit\Ammunitions;

use PHPUnit\Framework\TestCase;
use App\Ammunitions\Stone;

class StoneTest extends TestCase
{
    function testGetNameShouldReturnValidString()
    {
        $stone = new Stone;
        $this->assertEquals('Stone', $stone->getName());
    }
}
