<?php

namespace App\Bonsai\Domain;

abstract class BonsaiType
{
    const WATER_TYPE_VERY_FREQUENT = 'muy frecuente';
    const WATER_TYPE_FREQUENT = 'frecuente';
    const WATER_TYPE_INFREQUENT = 'poco frecuente';

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
