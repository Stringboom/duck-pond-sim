<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_3_more_ducks_please;

use Fittinq\DuckPond\Duck\Duck;
use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\RobotDuck;
use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;
use PHPUnit\Framework\TestCase;

class RobotDuckTest extends TestCase
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
        $this->duck = $duckFactory->letThereBeDuck(RobotDuck::class);
    }

    /**
     *
     */
    public function test_display_looksLikeAWoodenDecoyDuck()
    {
        $this->assertEquals(Display::ROBOT_DUCK, $this->duck->display());
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
    public function test_quack_robotDucksDoNotQuack()
    {
        $this->assertEquals(Quack::NO_QUACK, $this->duck->quack());
    }

    /**
     *
     */
    public function test_fly_robotFliesWithARocket()
    {
        $this->assertEquals(Fly::ROCKET_GOES_BRRR, $this->duck->fly());
    }
}
