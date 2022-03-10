<?php

namespace MyApp\Logger;

class LoggerFactory
{
    private array $config;
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function createLogger(): LoggerInterface
    {
        switch ($this->config['logger']['type']) {
            case 'stdout':
                return new StdoutLogger();
            case 'file':
                return new FileLogger($this->config['logger']['filename']);
            default:
                return new FakeLogger();
        }
    }
}
