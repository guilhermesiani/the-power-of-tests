<?php

namespace App\Targets;

class Bird implements Target
{
    private const NAME = 'Bird';

    public function getName(): string
    {
        return Bird::NAME;
    }
}
