<?php

namespace MyApp\tasks;

class Task1BinSum
{
    public function binarySum(string $binFirst, string $binSecond): string
    {
        if ($binFirst === '' or $binSecond === '') {
            throw new \Exception('empty value');
        }
        if (!preg_match('~^[01]+$~', $binFirst) or (!preg_match('~^[01]+$~', $binSecond))) {
            throw new \Exception('not a binary value');
        }
        $decFirst = bindec($binFirst);
        $decSecond = bindec($binSecond);
        $decRes = $decSecond + $decFirst;

        $config = require __DIR__ . '/../../config.php';
        $loggerFactory = new \MyApp\Logger\LoggerFactory($config);
        $logger = $loggerFactory->createLogger();
        $app = new \MyApp\App($logger);
        $app->run();

        return decbin($decRes);
    }
}
