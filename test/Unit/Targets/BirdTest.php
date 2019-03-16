<?php

namespace Test\Unit\Targets;

use PHPUnit\Framework\TestCase;
use App\Targets\Bird;

class BirdTest extends TestCase
{
    function testGetNameShouldReturnValidString()
    {
        $bird = new Bird;
        $this->assertEquals('Bird', $bird->getName());
    }
}
