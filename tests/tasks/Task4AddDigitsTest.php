<?php

namespace MyApp\tests\tasks;

use PHPUnit\Framework\TestCase;

class Task4AddDigitsTest extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits(int $expected, int $num): void
    {
        $task4 = new \MyApp\tasks\task4AddDigits();
        self::assertEquals($expected, $task4->addDigits($num));
    }

    public function addDigitsProvider(): array
    {
        return [
            [2, 209],
            [3, 111],
            [5, 122],
            [1, 541],
        ];
    }
}
