<?php
use PHPUnit\Framework\TestCase;

class task5BalancedBracketsTest extends TestCase
{
    public function testIsBalanced(): void
    {
        $task5 = new \MyApp\tasks\task5BalancedBrackets();
        self::assertEquals(true, $task5->isBalanced('()(((())))'));
        self::assertEquals(false, $task5->isBalanced(')(((())))'));
    }
}
