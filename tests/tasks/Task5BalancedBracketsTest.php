<?php
use PHPUnit\Framework\TestCase;

class Task5BalancedBracketsTest extends TestCase
{
    /**
     * @dataProvider balancedBracketsWrong
     */
    public function testBalancedBracketsWrong($line)
    {
        $task5 = new \MyApp\tasks\Task5BalancedBrackets();
        $this->expectException('Exception');
        $task5->isBalanced($line);
    }
    public function balancedBracketsWrong(): array
    {
        return [
            [''],
            ['gghjj'],
            ['())h'],
        ];
    }

    public function testIsBalanced(): void
    {
        $task5 = new \MyApp\tasks\task5BalancedBrackets();
        self::assertEquals(true, $task5->isBalanced('()(((())))'));
        self::assertEquals(false, $task5->isBalanced(')(((())))'));
    }
}
