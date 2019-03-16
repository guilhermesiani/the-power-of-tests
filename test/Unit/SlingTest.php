<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Sling;
use App\Fork;
use App\Elastic;
use App\Ammunitions\Ammunition;
use App\Targets\Target;

class SlingTest extends TestCase
{
    function testShotShouldStretchAndDrop()
    {
        $forkMock = $this->createMock(Fork::class);
        $elasticMock = $this->createMock(Elastic::class);
        $elasticMock->expects($this->once())
            ->method('stretch')
            ->willReturnSelf();
        $elasticMock->expects($this->once())
            ->method('drop');
        $forkMock->expects($this->once())
            ->method('getElastic')
            ->willReturn($elasticMock);
        $sling = new Sling($forkMock);
        $sling->shot(
            $this->createMock(Ammunition::class),
            $this->createMock(Target::class)
        );
    }
}
