<?php

namespace App\Targets;

class Bird implements Target
{
    private $name = 'Bird';

    public function getName(): string
    {
        return $this->name;
    }
}
