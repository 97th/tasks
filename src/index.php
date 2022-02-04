<?php

require_once __DIR__ . '/../vendor/autoload.php';
//echo (new \MyApp\tasks\task1BinSum())->binarySum('100','1y') . PHP_EOL;
//echo (new \MyApp\tasks\task2PowerOfThree())->isPowerOfThree(81) . PHP_EOL;
//echo (new \MyApp\tasks\task3Fibonacci())->fib(-9) . PHP_EOL;
//echo (new \MyApp\tasks\task4AddDigits())->addDigits(656) . PHP_EOL;
//echo (new \MyApp\tasks\task5BalancedBrackets())->isBalanced('())h') . PHP_EOL;
//echo (new \MyApp\tasks\task6PerfectNumber())->isPerfect(6) . PHP_EOL;
//echo (new \MyApp\tasks\task7HappyTicket())->isHappy(323008) . PHP_EOL;
//echo (new \MyApp\tasks\task8FizzBuzz())->fizzBuzz(4, 10) . PHP_EOL;


//$logger = new \MyApp\Logger\StdoutLogger();
//$filelogger = new \MyApp\Logger\FileLogger(__DIR__ . '/../log.txt');

$config = require __DIR__ . '/../config.php';
//print_r($config);

$loggerFactory = new \MyApp\Logger\LoggerFactory($config);
$logger = $loggerFactory->createLogger();

//$filelogger->info('3678866');
//$filelogger->warn('auch');
$app = new \MyApp\App($logger);
$app->run();

