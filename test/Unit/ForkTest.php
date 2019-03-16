<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Fork;
use App\Elastic;

class ForkTest extends TestCase
{
    function testGetElasticShouldReturnAnInstance()
    {
        $fork = new Fork($this->createMock(Elastic::class));
        $this->assertInstanceOf(Elastic::class, $fork->getElastic());
    }
}
