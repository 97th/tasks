<?php

//namespace MyApp\tests\tasks;

use MyApp\Logger\FakeLogger;
use MyApp\Logger\FileLogger;
use MyApp\Logger\LoggerInterface;
use PHPUnit\Framework\TestCase;

class Task1BinSumTest extends TestCase
{
    //private FakeLogger $fakeLogger;

    /**
     * @dataProvider binarySumWrongProvider
     */
    public function testBinarySumWrong(string $num1, string $num2)
    {
        $fakeLogger = new MyApp\Logger\FakeLogger();
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
        $fakeLogger = new MyApp\Logger\FakeLogger();
        $task1 = new \MyApp\tasks\task1BinSum($fakeLogger);
        $actual = $task1->binarySum(111, 1);
        $expected = '1000';
        self::assertEquals($expected, $actual);

        $config = require __DIR__ . '/../../config.php';
        $loggerFactory = new \MyApp\Logger\LoggerFactory($config);
        $logger = $loggerFactory->createLogger();
        $app = new \MyApp\App($logger);
        $app->run();
    }
}
