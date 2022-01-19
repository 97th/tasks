<?php

use PHPUnit\Framework\TestCase;

class Task4AddDigitsTest extends TestCase
{
    public function testAddDigits(): void
    {
        $task4 = new \MyApp\tasks\task4AddDigits();
        self::assertEquals(2, $task4->addDigits(209));
    }
}
