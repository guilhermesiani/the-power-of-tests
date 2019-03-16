<?php

namespace App\Ammunitions;

class Stone implements Ammunition
{
    private $name = 'Stone';

    public function getName(): string
    {
        return $this->name;
    }
}
