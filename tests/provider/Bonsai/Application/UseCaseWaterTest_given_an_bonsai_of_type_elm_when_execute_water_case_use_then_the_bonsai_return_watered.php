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
    'water january elm' => [
        JANUARY,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT,
    ],
    'water february elm' => [
        FEBRUARY,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water march elm' => [
        MARCH,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water april elm' => [
        APRIL,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water may elm' => [
        MAY,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water june elm' => [
        JUNE,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water july elm' => [
        JULY,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water august elm' => [
        AUGUST,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water september elm' => [
        SEPTEMBER,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water october elm' => [
        OCTOBER,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water november elm' => [
        NOVEMBER,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water december elm' => [
        DECEMBER,
        Bonsai::elm(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
];
