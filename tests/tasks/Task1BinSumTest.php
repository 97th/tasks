<?php

namespace MyApp\tests\tasks;

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
/*
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(): void
    {
        $this->logger->info('test passed');
        $this->logger->warn('auch');
        $this->logger->err('oh no!');

        echo 'ok';
    }
*/
    public function testBinarySum(): void
    {
        $task1 = new \MyApp\tasks\task1BinSum();
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
