<?php

namespace App;

class Fork
{
    private $elastic;

    public function __construct(Elastic $elastic)
    {
        $this->elastic = $elastic;
    }

    public function getElastic(): Elastic
    {
        return $this->elastic;
    }
}
