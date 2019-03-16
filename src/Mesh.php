<?php

namespace App;

class Mesh
{
    private $ammunition;

    public function hold(Ammunition $ammunition): void
    {
        $this->ammunition = $ammunition;
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
