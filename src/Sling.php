<?php

namespace App;

use App\Ammunitions\Ammunition;
use App\Targets\Target;

class Sling
{
    private $fork;

    public function __construct(Fork $fork)
    {
        $this->fork = $fork;
    }

    public function shot(Ammunition $ammunition, Target $target): void
    {
        $this->fork->getElastic()
             ->stretch($ammunition)
             ->drop();
        echo " on a {$target->getName()}";
    }
}
