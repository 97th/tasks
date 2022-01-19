<?php
use PHPUnit\Framework\TestCase;

class task7HappyTicketTest extends TestCase
{
    public function testIsHappy(): void
    {
        $task7 = new \MyApp\tasks\task7HappyTicket();
        self::assertEquals(true, $task7->isHappy(323008));
        self::assertEquals(false, $task7->isHappy(01));
    }
}

