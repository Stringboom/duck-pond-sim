<?php declare(strict_types=1);

namespace Test\Fittinq\DuckPond\chapter_4_breaking_the_fourth_wall;

use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;

class InterpreterTestCase extends TestCase
{
    /**
     * @var string
     */
    private string $code = '';

    protected function setUp(): void
    {
        parent::setUp();

        $files = $this->getAllPHPFilePaths();

        foreach ($files as $file) {
            $this->code .= file_get_contents($file);
        }
    }

    /**
     * @return RegexIterator
     */
    private function getAllPHPFilePaths(): RegexIterator
    {
        $directory = new RecursiveDirectoryIterator('src');
        $iterator = new RecursiveIteratorIterator($directory);
        $files = new RegexIterator($iterator, '/(.*\.php)$/i', RecursiveRegexIterator::REPLACE);
        $files->replacement = '$1';

        return $files;
    }

    /**
     * @param int $expected
     * @param string $string
     * @param string $message
     */
    public function assertOccurrences(int $expected, string $string, string $message) {
        $this->assertEquals($expected, substr_count($this->code, $string), $message);
    }
}
