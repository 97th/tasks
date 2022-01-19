<?php
use PHPUnit\Framework\TestCase;

class Task8FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $task8 = new \MyApp\tasks\task8FizzBuzz();
        self::assertEquals("4 Buzz Fizz 7 8 Fizz Buzz ", $task8->fizzBuzz(4,10));
    }
}