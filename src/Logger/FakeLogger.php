<?php

namespace MyApp\Logger;

class FakeLogger implements LoggerInterface
{
    public function err(string $msg): void
    {
    }

    public function warn(string $msg): void
    {
    }

    public function info(string $msg): void
    {
    }
}
