<?php

namespace App\Bonsai\Domain;

class ElmType extends BonsaiType
{
    public function pulverize()
    {

    }

    public function water($month)
    {
        if (8 == $month || 7 == $month) {
            return parent::water($month);
        }

        return parent::WATER_TYPE_VERY_FREQUENT;
    }
}
