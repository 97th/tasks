<?php

namespace MyApp\tests\tasks;

use PHPUnit\Framework\TestCase;

class Task1BinSumTest extends TestCase
{
    /**
     * @dataProvider binarySumWrongProvider
     */
    public function testBinarySumWrong($num1, $num2)
    {
        $task1 = new \MyApp\tasks\Task1BinSum();
        $this->expectException('Exception');
        $task1->binarySum($num1, $num2);
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
        $task1 = new \MyApp\tasks\task1BinSum();
        $actual = $task1->binarySum(111, 1);
        $expected = '1000';
        self::assertEquals($actual, $expected);

        $config = require __DIR__ . '/../../config.php';
        $loggerFactory = new \MyApp\Logger\LoggerFactory($config);
        $logger = $loggerFactory->createLogger();
        $app = new \MyApp\App($logger);
        $app->run();
    }
}
