<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_1_quack_quack;

use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\MallardDuck;
use Fittinq\DuckPond\Duck\RedheadDuck;
use PHPUnit\Framework\TestCase;

class DuckFactoryTest extends TestCase
{
    private DuckFactory $duckFactory;

    /**
     *
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->duckFactory = new DuckFactory();
    }

    public function test_createAMallardDuck_returnInstanceOfMallardDuck()
    {
        $this->assertInstanceOf(MallardDuck::class, $this->duckFactory->letThereBeDuck(MallardDuck::class));
    }

    public function test_createARedheadDuck_returnInstanceOfRedheadDuck()
    {
        $this->assertInstanceOf(RedheadDuck::class, $this->duckFactory->letThereBeDuck(RedheadDuck::class));
    }
}