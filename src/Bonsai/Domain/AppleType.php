<?php

namespace App\Bonsai\Domain;

class AppleType extends BonsaiType
{
    public function water($month)
    {
        if (8 == $month || 7 == $month) {
            return parent::water($month);
        }

        return parent::WATER_TYPE_FREQUENT;
    }
}
