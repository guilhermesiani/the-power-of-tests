<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Elastic;
use App\Ammunitions\Ammunition;
use App\Mesh;

class ElasticTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    function testConstructShouldReceiveInstanceOfMesh()
    {
        $elastic = new Elastic($this->createMock(Mesh::class));
    }

    function testStretchShouldPutMeshToHoldAmmunition()
    {
        $meshMock = $this->createMock(Mesh::class);
        $ammunitionMock = $this->createMock(Ammunition::class);
        $meshMock->expects($this->once())
            ->method('hold')
            ->with($ammunitionMock);
        $elastic = new Elastic($meshMock);
        $elastic->stretch($ammunitionMock);
    }
}
