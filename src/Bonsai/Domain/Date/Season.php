<?php

namespace App\Bonsai\Domain\Date;

class Season
{
    private string $value;

    private const WINTER = 'winter';
    private const SPRING = 'spring';
    private const SUMMER = 'summer';
    private const AUTUMN = 'autumn';

    private function __construct()
    {
    }

    public static function createFromDate(\DateTimeInterface $dateTime)
    {
        $season = new static();

        $season->value = SeasonC

        return $season;
        // comprobar que estacion es segun mes y dia devolver el enum correspondiente
    }

    public function isSpring()
    {
        return $this->value === self::WINTER;
    }

    public static function winter(): self
    {
        $obj = new static();
        $obj->value = self::WINTER;
        return $obj;
    }

    public static function spring(): self
    {
        $obj = new static();
        $obj->value = self::SPRING;
        return $obj;
    }

    public static function autumn(): self
    {
        $obj = new static();
        $obj->value = self::AUTUMN;
        return $obj;
    }


}


