<?php

namespace App\Bonsai\Domain;

class FicusType extends BonsaiType
{
    public function water($month)
    {
        if (8 == $month || 7 == $month) {
            return parent::water($month);
        }

        return parent::WATER_TYPE_INFREQUENT;
    }
}
