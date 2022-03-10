<?php

namespace MyApp\tests\tasks;

use PHPUnit\Framework\TestCase;

class Task8FizzBuzzTest extends TestCase
{
    public function testFizzBuzzWrong()
    {
        $task8 = new \MyApp\tasks\Task8FizzBuzz();
        $this->expectException('Exception');
        $task8->fizzBuzz(5, 1);
    }

    public function testFizzBuzz(): void
    {
        $task8 = new \MyApp\tasks\task8FizzBuzz();
        $actual = $task8->fizzBuzz(4, 10);
        self::assertEquals("4 Buzz Fizz 7 8 Fizz Buzz ", $actual);
    }
}
