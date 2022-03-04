<?php
declare(strict_types=1);

namespace App\Bonsai\Domain;

use App\Bonsai\Domain\Date\Season;

abstract class BonsaiType
{
    private ?\DateTimeInterface $lastFertilize;

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

    public function fertilize($date): bool
    {
        $dateSeason = Season::createFromDate($date);
        $isSpring = Season::spring()->equals($dateSeason);
        $isAutumn = Season::autumn()->equals($dateSeason);
        $canExecute = $isSpring || $isAutumn;
        $cannotExecute = !$canExecute;
        if ($cannotExecute) {
            return false;
        }
        if ($this->lastFertilize != null) {
            $this->lastFertilize = $date;
            return true;
        }


    }

    public function __toString(): string
    {
        return basename(get_class($this));
    }


}
