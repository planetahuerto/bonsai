<?php

namespace App\Bonsai\Infrastructure;

use App\Bonsai\Domain\SeasonCalculatorInterface;
use Jaybizzle\Seasons;

class SeasonCalculator extends Seasons implements SeasonCalculatorInterface
{
    public static function calculate(\DateTimeInterface $dateTime): string
    {
        return '';
    }
}
