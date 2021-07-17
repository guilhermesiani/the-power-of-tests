<?php

namespace App;

use App\Ammunitions\Ammunition;
use App\Targets\Target;

class Sling
{
    public function __construct(private Fork $fork) {}

    public function shot(Ammunition $ammunition, Target $target): string
    {
        $shottedAmmunation = $this->fork->getElastic()
             ->stretch($ammunition)
             ->drop();
        return "$shottedAmmunation on a {$target->getName()}";
    }
}
