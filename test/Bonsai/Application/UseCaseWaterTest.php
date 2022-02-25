<?php

namespace App\Tests\Bonsai\Application;

use App\Bonsai\Application\UseCaseWater;
use App\Bonsai\Domain\Bonsai;
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

    private $waterMap = [
        'elm' => [
            self::JANUARY => 'muy frecuente',
            self::FEBRUARY => 'muy frecuente',
            self::MARCH => '',
            self::APRIL => '',

        ]
    ];
    private $meses = [
        self::JANUARY,
        self::FEBRUARY,
        self::MARCH,
        self::APRIL,
        self::MAY,
        self::JUNE,
        self::JULY,
        self::AUGUST,
        self::SEPTEMBER,
        self::OCTOBER,
        self::NOVEMBER,
        self::DECEMBER
    ];

    private UseCaseWater $waterUseCase;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

    }


    protected function setUp():void
    {
        parent::setUp();
        $this->waterUseCase = new UseCaseWater();
    }

    /**
     * @test
     */
    public function given_an_elm_bonsai_when_executes_then_the_bonsai_is_watered()
    {
        $elm = Bonsai::elm();
        $this->testWaterAllMonths($elm);
    }

    public function given_an_ficus_bonsai_when_executes_then_the_bonsai_is_watered(){
        $ficus = Bonsai::ficus();
        $this->testWaterAllMonths($ficus);
    }

    /**
     * @param Bonsai $bonsai
     * @return void
     */
    protected function testWaterAllMonths(Bonsai $bonsai): void
    {
        foreach ($this->meses as $mes) {
            $periodicity = $this->waterUseCase->do($bonsai, $mes);
            $this->assertTrue($periodicity == $this->waterMap[(string)$bonsai->type()][$mes]);
        }
    }

}
