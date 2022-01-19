<?php

use PHPUnit\Framework\TestCase;

class Task3FibonacciTest extends TestCase
{
    public function testFib(): void
    {
        $task3 = new \MyApp\tasks\task3Fibonacci();
        self::assertEquals(6765, $task3->fib(20));
    }
}
