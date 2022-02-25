<?php

namespace App\Bonsai\Domain;

abstract class BonsaiType
{
    public function water($month)
    {
        if (8 == $month || 7 == $month) {
            return 'muy frecuente';
        }
        return '';
    }

    public function fertilize()
    {

    }

    public function plantOut()
    {

    }

    public function __toString(): string
    {
        return basename(get_class($this));
    }


}
