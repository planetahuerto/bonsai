<?php

namespace App\Tests\Bonsai\Application;

use App\Bonsai\Application\UseCaseWater;
use App\Tests\TestCaseAbstract;

class UseCaseWaterTest extends TestCaseAbstract
{
    private UseCaseWater $waterUseCase;

    protected function setUp():void
    {
        parent::setUp();
        $this->waterUseCase = new UseCaseWater();
    }

    /**
     * @test
     * @dataProvider providerAutoloader
     */
    public function given_an_bonsai_of_type_elm_when_execute_water_case_use_then_the_bonsai_return_watered($month, $bonsai, $expected)
    {
        // Action
        $periodicity = $this->waterUseCase->do($bonsai, $month);

        // Assert
        $this->assertTrue($periodicity == $expected);
    }

    /**
     * @test
     * @dataProvider providerAutoloader
     */
    public function given_an_bonsai_of_type_apple_when_execute_water_case_use_then_the_bonsai_return_watered($month, $bonsai, $expected)
    {
        // Action
        $periodicity = $this->waterUseCase->do($bonsai, $month);

        // Assert
        $this->assertTrue($periodicity == $expected);
    }

    /**
     * @test
     * @dataProvider providerAutoloader
     */
    public function given_an_bonsai_of_type_olive_when_execute_water_case_use_then_the_bonsai_return_watered($month, $bonsai, $expected)
    {
        // Action
        $periodicity = $this->waterUseCase->do($bonsai, $month);

        // Assert
        $this->assertTrue($periodicity == $expected);
    }

    /**
     * @test
     * @dataProvider providerAutoloader
     */
    public function given_an_bonsai_of_type_ficus_when_execute_water_case_use_then_the_bonsai_return_watered($month, $bonsai, $expected)
    {
        // Action
        $periodicity = $this->waterUseCase->do($bonsai, $month);

        // Assert
        $this->assertTrue($periodicity == $expected);
    }
}
