<?php

namespace App;

use App\Ammunitions\Ammunition;
use App\Mesh;

class Elastic
{
    private $mesh;

    public function __construct(Mesh $mesh)
    {
        $this->mesh = $mesh;
    }

    public function stretch(Ammunition $ammunition): Elastic
    {
        $this->mesh->hold($ammunition);
        return $this;
    }

    public function drop(): string
    {
        if ($this->mesh->empty()) {
            throw new DomainException("No ammunition");
        }
        $ammunation = $this->mesh->getAmmunition();
        $this->mesh->free();
        return "Launched a {$ammunation->getName()}";
    }
}
