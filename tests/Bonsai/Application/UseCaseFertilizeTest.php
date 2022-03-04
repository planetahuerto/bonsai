<?php

namespace App\Tests\Bonsai\Application;

use App\Bonsai\Application\UseCaseFertilize;
use App\Bonsai\Domain\Bonsai;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class UseCaseFertilizeTest extends TestCase
{

    protected UseCaseFertilize $fertilizeUseCase;

    protected function setUp(): void
    {
        $this->fertilizeUseCase = new UseCaseFertilize();
        parent::setUp();
    }


    /**
     * @test
     */
    public function given_a_bonsai_when_fertilizes_then_the_bonsai_is_fertilized()
    {
        $sprintTime = DateTimeImmutable::createFromFormat('Y-m-d', '2022-04-01');
        $sprintTime30daysAfter = $sprintTime->add(new \DateInterval('P30D'));
        $sprintTime29daysAfter = $sprintTime->add(new \DateInterval('P29D'));

        $hasToFertilize = $this->fertilizeUseCase->do(Bonsai::elm(), $sprintTime);
        $hasToFertilizeAfter30Days = $this->fertilizeUseCase->do(Bonsai::elm(), $sprintTime30daysAfter);
        $hasToFertilizeAfter29Days = $this->fertilizeUseCase->do(Bonsai::elm(), $sprintTime29daysAfter);

        $this->assertTrue($hasToFertilize);
        $this->assertTrue($hasToFertilizeAfter30Days);
        $this->assertFalse($hasToFertilizeAfter29Days);
    }
}
