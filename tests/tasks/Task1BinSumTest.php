<?php

namespace MyApp;

use MyApp\Logger\FakeLogger;
use MyApp\Logger\FileLogger;
use MyApp\Logger\LoggerInterface;
use PHPUnit\Framework\TestCase;

class Task1BinSumTest extends TestCase
{
    /**
     * @dataProvider binarySumWrongProvider
     */
    public function testBinarySumWrong(string $num1, string $num2)
    {
        $fakeLogger = new Logger\FakeLogger();
        $task1 = new \MyApp\tasks\Task1BinSum($fakeLogger);

        try {
            $this->expectException('Exception');
            $task1->binarySum($num1, $num2);
        } catch (\Throwable $e) {
            $expected = $e->getMessage();
            $actual = $fakeLogger->getLastMsg();
            self::assertEquals($expected, $actual);
            throw $e;
        }
    }

    public function binarySumWrongProvider(): array
    {
        return [
            ['','10'],
            ['10',''],
            ['12','10'],
            ['10','12'],
        ];
    }


    public function testBinarySum(): void
    {
        $fakeLogger = new Logger\FakeLogger();
        $task1 = new \MyApp\tasks\task1BinSum($fakeLogger);
        $actual = $task1->binarySum(111, 1);
        $expected = '1000';
        self::assertEquals($expected, $actual);
    }
}
