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
    'water january ficus' => [
        JANUARY,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water february ficus' => [
        FEBRUARY,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water march ficus' => [
        MARCH,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water april ficus' => [
        APRIL,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water may ficus' => [
        MAY,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water june ficus' => [
        JUNE,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water july ficus' => [
        JULY,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water august ficus' => [
        AUGUST,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water september ficus' => [
        SEPTEMBER,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water october ficus' => [
        OCTOBER,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water november ficus' => [
        NOVEMBER,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water december ficus' => [
        DECEMBER,
        Bonsai::ficus(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
];
