<?php

namespace App\Bonsai\Domain;

interface SeasonCalculatorInterface
{
    public static function calculate(\DateTimeInterface $dateTime): string;
}
