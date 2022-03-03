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
    'water january olive' => [
        JANUARY,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water february olive' => [
        FEBRUARY,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water march olive' => [
        MARCH,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water april olive' => [
        APRIL,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water may olive' => [
        MAY,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water june olive' => [
        JUNE,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water july olive' => [
        JULY,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water august olive' => [
        AUGUST,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_VERY_FREQUENT
    ],
    'water september olive' => [
        SEPTEMBER,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water october olive' => [
        OCTOBER,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water november olive' => [
        NOVEMBER,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
    'water december olive' => [
        DECEMBER,
        Bonsai::olive(),
        BonsaiType::WATER_TYPE_INFREQUENT
    ],
];
