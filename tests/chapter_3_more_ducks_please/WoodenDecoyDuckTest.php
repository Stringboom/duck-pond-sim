<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_3_more_ducks_please;

use Fittinq\DuckPond\Duck\Duck;
use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\RubberDuck;
use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;
use Fittinq\DuckPond\Duck\WoodenDecoyDuck;
use PHPUnit\Framework\TestCase;

class WoodenDecoyDuckTest extends TestCase
{
    /**
     * @var Duck
     */
    private Duck $duck;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        parent::setUp();

        $duckFactory = new DuckFactory();
        $this->duck = $duckFactory->letThereBeDuck(WoodenDecoyDuck::class);
    }

    /**
     *
     */
    public function test_display_looksLikeAWoodenDecoyDuck()
    {
        $this->assertEquals(Display::WOODEN_DECOY_DUCK, $this->duck->display());
    }

    /**
     *
     */
    public function test_swim_splashAroundInTheWater()
    {
        $this->assertEquals(Swim::SPLASH_SPLASH, $this->duck->swim());
    }

    /**
     *
     */
    public function test_quack_woodenDecoyDucksDoNotQuack()
    {
        $this->assertEquals(Quack::NO_QUACK, $this->duck->quack());
    }

    /**
     *
     */
    public function test_fly_woodenDecoyDucksDoNotFly()
    {
        $this->assertEquals(Fly::NO_FLY, $this->duck->fly());
    }
}
