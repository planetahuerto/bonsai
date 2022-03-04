<?php
declare(strict_types=1);

namespace App\Bonsai\Application;

use App\Bonsai\Domain\Bonsai;

class UseCaseWater
{
    public function do(Bonsai $bonsai, $month) :string
    {
        return $bonsai->waterPeriodicity($month);
    }
}

