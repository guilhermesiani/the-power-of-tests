<?php

namespace App\Targets;

class Factory
{
    public function make(string $name): Target
    {
        if (strtolower($name) == 'bird') {
            return new Bird;
        }
        throw new \InvalidArgumentException('Invalid target name');
    }
}
