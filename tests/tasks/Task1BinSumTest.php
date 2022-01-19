<?php
use PHPUnit\Framework\TestCase;

class Task1BinSumTest extends TestCase
{
    public function testBinarySum(): void
    {
        $task1 = new \MyApp\tasks\task1BinSum();
        $actual = $task1->binarySum(111,1);
        $expected = '1000';
        self::assertEquals($actual,$expected);
    }
}
