<?php
use PHPUnit\Framework\TestCase;

class Task7HappyTicketTest extends TestCase
{
    /**
     * @dataProvider isHappyWrongProvider
     */
    public function testIsHappyWrong($num)
    {
        $task7 = new \MyApp\tasks\task7HappyTicket();

        $this->expectException('Exception');
        $task7->isHappy($num);
    }

    public function isHappyWrongProvider(): array
    {
        return [
            [''],
            ['123'],
        ];
    }
    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy($expected, $num): void
    {
        $task7 = new \MyApp\tasks\task7HappyTicket();
        self::assertEquals($expected, $task7->isHappy($num));
    }

    public function isHappyProvider(): array
    {
        return [
            [true, '323008'],
            [false, '01'],
        ];
    }
}
