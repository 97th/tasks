<?php

use PHPUnit\Framework\TestCase;

class Task6PerfectNumberTest extends TestCase
{
    public function testIsPerfect(): void
    {
        $task6 = new \MyApp\tasks\task6PerfectNumber();
        self::assertEquals(true, $task6->isPerfect(6));
        self::assertEquals(false, $task6->isPerfect(0));
    }
}
