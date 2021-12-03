<?php

namespace App\Bonsai\Application;

use App\Bonsai\Domain\Bonsai;

class UseCaseWater
{
    public function do(Bonsai $bonsai, $month)
    {
        $bonsai->type()->water();
    }

}

