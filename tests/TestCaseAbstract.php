<?php declare(strict_types=1);

namespace App\Tests;

use PHPUnitProviderAutoloader;

abstract class TestCaseAbstract extends PHPUnitProviderAutoloader\TestCaseAbstract
{
    protected $_testNamespace = __NAMESPACE__;
}