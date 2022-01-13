<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_2_learning_to_fly;

use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\RedheadDuck;
use Fittinq\DuckPond\Constants\Fly;
use PHPUnit\Framework\TestCase;

class RedheadDuckTest extends TestCase
{
    /**
     *
     */
    public function test_fly_flapFlapTheWings()
    {
        $duckFactory = new DuckFactory();
        $duck = $duckFactory->letThereBeDuck(RedheadDuck::class);
        $this->assertEquals(Fly::FLAP_FLAP, $duck->fly());
    }
}
