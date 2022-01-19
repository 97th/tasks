<?php

use PHPUnit\Framework\TestCase;

class task2PowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree(): void
    {
        $task2 = new \MyApp\tasks\task2PowerOfThree();
        self::assertEquals(true, $task2->isPowerOfThree(81));
        self::assertEquals(false, $task2->isPowerOfThree(810));
    }
}