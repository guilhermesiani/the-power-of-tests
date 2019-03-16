<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Ammunitions\Ammunition;
use App\Mesh;

class MeshTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    function testHoldShouldReceiveAmmunition()
    {
        $mesh = new Mesh;
        $mesh->hold($this->createMock(Ammunition::class));
    } 

    function testEmptyShouldReturnFalseWhenThereIsAmmuntion()
    {
        $mesh = new Mesh;
        $mesh->hold($this->createMock(Ammunition::class));
        $this->assertFalse($mesh->empty());
    }

    function testEmptyShouldReturnTrueWhenThereIsNoAmmuntion()
    {
        $mesh = new Mesh;
        $this->assertTrue($mesh->empty());
    }

    function testFreeShouldSetNullAmmunition()
    {
        $mesh = new Mesh;
        $mesh->hold($this->createMock(Ammunition::class));
        $mesh->free();
        $this->assertTrue($mesh->empty());
    }
}
