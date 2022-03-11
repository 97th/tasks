<?php

namespace MyApp\tasks;

use MyApp\Logger\LoggerInterface;

class Task3Fibonacci
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function fib(int $number): int
    {
        if ($number < 0) {
            $this->logger->err('fail');
            throw new \Exception('value must be more or equal zero');
        }
        switch ($number) {
            case 0:
                $result = 0;
                $this->logger->info('success task 3');
                return $result;
            case 1:
                $result = 1;
                $this->logger->info('success task 3');
                return $result;
        }
        $previous = 1;
        $prePrevious = 0;
        $result = 0;
        for ($i = 2; $i <= $number; $i++) {
            $result = $previous + $prePrevious;
            $prePrevious = $previous;
            $previous = $result;
        }
        $this->logger->info('success task 3');
        return $result;
    }
}
