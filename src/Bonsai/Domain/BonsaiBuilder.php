<?php

namespace App\Bonsai\Domain;

class BonsaiBuilder
{
    /** @var \Bonsai */
    private $item;

    public function __construct()
    {
        $this->reset();
    }

    /**
     * @return void
     */
    protected function reset(): void
    {
        $this->item = \Bonsai::elm();
    }
}
