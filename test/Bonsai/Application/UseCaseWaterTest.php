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
            self::JULY => 'muy frecuente',
            self::JULY => 'muy frecuente'
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

    private UseCaseWater $useCase;

    protected function setUp():void
    {
        parent::setUp();
        $this->useCase = new UseCaseWater();
    }

    /**
     * @test
     */
    public function given_an_elm_bonsai_when_executes_then_the_bonsai_is_watered()
    {
        $bonsai = Bonsai::elm();
        $this->testWater($bonsai, 'elm');
    }

    public function given_an_ficus_bonsai_when_executes_then_the_bonsai_is_watered(){
        $bonsai = Bonsai::ficus();
        $this->testWater($bonsai, 'ficus');
    }

    /**
     * @param Bonsai $bonsai
     * @param string $type
     * @return void
     */
    protected function testWater(Bonsai $bonsai, string $type): void
    {
        foreach ($this->meses as $mes) {
            $periodicity = $this->useCase->do($bonsai, $mes);
            $this->assertTrue($periodicity == $this->waterMap[$type][$mes]);
        }
    }

}
