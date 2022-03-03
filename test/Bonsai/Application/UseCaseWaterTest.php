<?php

namespace App\Tests\Bonsai\Application;

use App\Bonsai\Application\UseCaseWater;
use App\Bonsai\Domain\Bonsai;
use App\Bonsai\Domain\BonsaiType;
use PHPUnit\Framework\TestCase;

class UseCaseWaterTest extends TestCase
{
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

    private UseCaseWater $waterUseCase;


    protected function setUp():void
    {
        parent::setUp();
        $this->waterUseCase = new UseCaseWater();
    }

    /**
     * @test
     * @dataProvider bonsaisData
     */
    public function given_an_bonsai_when_execute_water_case_use_then_the_bonsai_return_watered($month, $bonsai, $expected)
    {
        // Arrange

        // Action
        $periodicity = $this->waterUseCase->do($bonsai, $month);

        // Assert
        $this->assertTrue($periodicity == $expected);
    }


    public function bonsaisData(): array
    {
        return [
            'water january elm' => [
                self::JANUARY,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT,
            ],
            'water february elm' => [
                self::FEBRUARY,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water march elm' => [
                self::MARCH,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water april elm' => [
                self::APRIL,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water may elm' => [
                self::MAY,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water june elm' => [
                self::JUNE,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water july elm' => [
                self::JULY,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water august elm' => [
                self::AUGUST,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water september elm' => [
                self::SEPTEMBER,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water october elm' => [
                self::OCTOBER,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water november elm' => [
                self::NOVEMBER,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water december elm' => [
                self::DECEMBER,
                Bonsai::elm(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water january apple' => [
                self::JANUARY,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water february apple' => [
                self::FEBRUARY,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water march apple' => [
                self::MARCH,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water april apple' => [
                self::APRIL,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water may apple' => [
                self::MAY,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water june apple' => [
                self::JUNE,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water july apple' => [
                self::JULY,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water august apple' => [
                self::AUGUST,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water september apple' => [
                self::SEPTEMBER,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water october apple' => [
                self::OCTOBER,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water november apple' => [
                self::NOVEMBER,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water december apple' => [
                self::DECEMBER,
                Bonsai::apple(),
                BonsaiType::WATER_TYPE_FREQUENT
            ],
            'water january ficus' => [
                self::JANUARY,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water february ficus' => [
                self::FEBRUARY,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water march ficus' => [
                self::MARCH,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water april ficus' => [
                self::APRIL,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water may ficus' => [
                self::MAY,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water june ficus' => [
                self::JUNE,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water july ficus' => [
                self::JULY,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water august ficus' => [
                self::AUGUST,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water september ficus' => [
                self::SEPTEMBER,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water october ficus' => [
                self::OCTOBER,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water november ficus' => [
                self::NOVEMBER,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water december ficus' => [
                self::DECEMBER,
                Bonsai::ficus(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water january olive' => [
                self::JANUARY,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water february olive' => [
                self::FEBRUARY,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water march olive' => [
                self::MARCH,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water april olive' => [
                self::APRIL,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water may olive' => [
                self::MAY,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water june olive' => [
                self::JUNE,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water july olive' => [
                self::JULY,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water august olive' => [
                self::AUGUST,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_VERY_FREQUENT
            ],
            'water september olive' => [
                self::SEPTEMBER,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water october olive' => [
                self::OCTOBER,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water november olive' => [
                self::NOVEMBER,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
            'water december olive' => [
                self::DECEMBER,
                Bonsai::olive(),
                BonsaiType::WATER_TYPE_INFREQUENT
            ],
        ];
    }

}
