<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_3_more_ducks_please;

use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\RobotDuck;
use Fittinq\DuckPond\Duck\RubberDuck;
use Fittinq\DuckPond\Duck\WoodenDecoyDuck;
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

    public function test_createARobotDuck_returnInstanceOfRobotDuck()
    {
        $this->assertInstanceOf(RobotDuck::class, $this->duckFactory->letThereBeDuck(RobotDuck::class));
    }

    public function test_createARubberDuck_returnInstanceOfRubberDuck()
    {
        $this->assertInstanceOf(RubberDuck::class, $this->duckFactory->letThereBeDuck(RubberDuck::class));
    }

    public function test_createAWoodenDecoyDuck_returnInstanceOfWoodenDecoyDuck()
    {
        $this->assertInstanceOf(WoodenDecoyDuck::class, $this->duckFactory->letThereBeDuck(WoodenDecoyDuck::class));
    }
}