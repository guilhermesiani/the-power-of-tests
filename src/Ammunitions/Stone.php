<?php

namespace App\Ammunitions;

class Stone implements Ammunition
{
    private const NAME = 'Stone';

    public function getName(): string
    {
        return Stone::NAME;
    }
}
