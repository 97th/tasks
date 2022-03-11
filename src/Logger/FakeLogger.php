<?php

namespace MyApp\Logger;

class FakeLogger implements LoggerInterface
{
    public string $messages;

    public function getLastMsg(): string
    {
        return $this->messages;
    }

    public function err(string $msg): void
    {
        $this->messages = $msg;
    }

    public function warn(string $msg): void
    {
    }

    public function info(string $msg): void
    {
    }
}
