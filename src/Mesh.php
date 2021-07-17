<?php

namespace App;

use App\Ammunitions\Ammunition;

class Mesh
{
    private ?Ammunition $ammunition = null;

    public function hold(Ammunition $ammunition): void
    {
        $this->ammunition = $ammunition;
    }

    public function getAmmunition(): ?Ammunition
    {
        return $this->ammunition;
    }

    public function free(): void
    {
        $this->ammunition = null;
    }

    public function empty(): bool
    {
        return is_null($this->ammunition);
    }
}
