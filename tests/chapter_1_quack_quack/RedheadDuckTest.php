<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_1_quack_quack;

use Fittinq\DuckPond\Duck\Duck;
use Fittinq\DuckPond\Duck\DuckFactory;
use Fittinq\DuckPond\Duck\RedheadDuck;
use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;
use PHPUnit\Framework\TestCase;

class RedheadDuckTest extends TestCase
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
        $this->duck = $duckFactory->letThereBeDuck(RedheadDuck::class);
    }

    /**
     *
     */
    public function test_display_looksLikeARedhead()
    {
        $this->assertEquals(Display::REDHEAD_DUCK, $this->duck->display());
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
    public function test_quack_makeQuackQuackSound()
    {
        $this->assertEquals(Quack::QUACK_QUACK, $this->duck->quack());
    }
}
