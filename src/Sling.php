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

    public function shot(Ammunition $ammunition, Target $target): string
    {
        $shottedAmmunation = $this->fork->getElastic()
             ->stretch($ammunition)
             ->drop();
        return "$shottedAmmunation on a {$target->getName()}";
    }
}
