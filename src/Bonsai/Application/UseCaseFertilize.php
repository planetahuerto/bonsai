<?php
declare(strict_types=1);

namespace App\Bonsai\Application;

use App\Bonsai\Domain\Bonsai;

class UseCaseFertilize
{
    public function do(Bonsai $bonsai, \DateTimeInterface $date) : bool
    {
        return $bonsai->fertilize($date);
    }
}
