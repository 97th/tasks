<?php

namespace MyApp\tasks;

use MyApp\Logger\LoggerInterface;

class Task1BinSum
{
   private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function binarySum(string $binFirst, string $binSecond): string
    {
        if ($binFirst === '' or $binSecond === '') {
            $this->logger->err('empty value');
            throw new \Exception('empty value');
        }
        if (!preg_match('~^[01]+$~', $binFirst) or (!preg_match('~^[01]+$~', $binSecond))) {
            $this->logger->err('not a binary value');
            throw new \Exception('not a binary value');
        }
        $decFirst = bindec($binFirst);
        $decSecond = bindec($binSecond);
        $decRes = $decSecond + $decFirst;
        $this->logger->info('success task 1');
        return decbin($decRes);
    }
}
