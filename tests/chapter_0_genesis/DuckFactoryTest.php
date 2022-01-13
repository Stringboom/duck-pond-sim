<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_0_genesis;

use Fittinq\DuckPond\Duck\DuckFactory;
use PHPUnit\Framework\TestCase;
use UnexpectedValueException;

class DuckFactoryTest extends TestCase
{
    public function test_createNonExistingMallard_expectUnexpectedValueException()
    {
        $duckFactory = new DuckFactory();
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionMessage('This duck is not yet known');
        $duckFactory->letThereBeDuck('unknown_duck');
    }
}