<?php

namespace App\Ammunitions;

class Factory
{
    public function make(string $name): Ammunition
    {
        if (strtolower($name) == 'stone') {
            return new Stone;
        }
        throw new \InvalidArgumentException('Invalid ammunition name');
    }
}
