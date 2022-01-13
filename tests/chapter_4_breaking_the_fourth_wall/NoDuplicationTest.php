<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_4_breaking_the_fourth_wall;

use Fittinq\DuckPond\Constants\Display;
use Fittinq\DuckPond\Constants\Fly;
use Fittinq\DuckPond\Constants\Quack;
use Fittinq\DuckPond\Constants\Swim;
use ReflectionClass;
use ReflectionException;

class NoDuplicationTest extends InterpreterTestCase
{
    private const CLASSES = [
        Display::class,
        Fly::class,
        Quack::class,
        Swim::class,
    ];

    /**
     * @throws ReflectionException
     */
    public function test_checkConstantUsage_everyConstantShouldOnlyBeUsedOnce()
    {
        foreach (self::CLASSES as $class) {
            $reflection = new ReflectionClass($class);
            $constants = array_keys($reflection->getConstants());
            $this->assertConstantsAreUsedOnlyOnce($constants);
        }
    }

    /**
     * @param array $constants
     */
    private function assertConstantsAreUsedOnlyOnce(array $constants): void
    {
        foreach ($constants as $constant) {
            // we use 2 here, because the declaration also counts
            $this->assertOccurrences(2, $constant, "Constant {$constant} is used more than once");
        }
    }
}
