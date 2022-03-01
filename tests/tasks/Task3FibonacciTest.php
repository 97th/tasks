<?php

namespace MyApp\tests\tasks;

use PHPUnit\Framework\TestCase;

class Task3FibonacciTest extends TestCase
{
    public function testFibonacciWrong(): void
    {
        $task3 = new \MyApp\tasks\Task3Fibonacci();
        $this->expectException('Exception');
        $task3->fib(-3);
    }

    /**
     * @dataProvider fibonacciProvider
     */
    public function testFib(int $result, int $num): void
    {
        $task3 = new \MyApp\tasks\task3Fibonacci();
        self::assertEquals($result, $task3->fib($num));
    }

    public function fibonacciProvider(): array
    {
        return [
            [6765, 20],
            [1, 1],
            [0, 0],
        ];
    }
}
