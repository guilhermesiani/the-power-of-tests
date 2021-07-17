<?php

namespace App;

class Fork
{
    public function __construct(private Elastic $elastic) {}

    public function getElastic(): Elastic
    {
        return $this->elastic;
    }
}
