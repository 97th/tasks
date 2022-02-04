<?php

namespace MyApp;

use MyApp\Logger\LoggerInterface;

class App
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function run(): void
    {
        $this->logger->info('test passed');
        $this->logger->warn('auch');
        $this->logger->warn('auch2');
        $this->logger->err('oh no!');

        echo 'ok';
    }
}