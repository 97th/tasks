<?php

namespace MyApp\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract protected function log(string $msg): void;

    public function err(string $msg): void
    {
        $this->log('[ERR] ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->log('[WARNING] ' . $msg);
    }

    public function info(string $msg): void
    {
        $this->log('[INFO] ' . $msg);
    }
}
