<?php

use App\Bonsai\Domain\Bonsai;
use App\Bonsai\Domain\BonsaiType;

const JANUARY = 1;
const FEBRUARY = 2;
const MARCH = 3;
const APRIL = 4;
const MAY = 5;
const JUNE = 6;
const JULY = 7;
const AUGUST = 8;
const SEPTEMBER = 9;
const OCTOBER = 10;
const NOVEMBER = 11;
const DECEMBER = 12;

return [
    'water january apple' => [
        JANUARY,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water february apple' => [
        FEBRUARY,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water march apple' => [
        MARCH,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water april apple' => [
        APRIL,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water may apple' => [
        MAY,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water june apple' => [
        JUNE,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water july apple' => [
        JULY,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water august apple' => [
        AUGUST,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water september apple' => [
        SEPTEMBER,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water october apple' => [
        OCTOBER,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water november apple' => [
        NOVEMBER,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
    'water december apple' => [
        DECEMBER,
        Bonsai::apple(),
        BonsaiType::WATER_TYPE_FREQUENT
    ],
];
