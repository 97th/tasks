<?php

namespace MyApp\tests\tasks;

use PHPUnit\Framework\TestCase;

class Task2PowerOfThreeTest extends TestCase
{
    public function testIsPowerOfThree(): void
    {
        $task2 = new \MyApp\tasks\task2PowerOfThree();
        self::assertEquals(true, $task2->isPowerOfThree(1));
        self::assertEquals(true, $task2->isPowerOfThree(81));
        self::assertEquals(false, $task2->isPowerOfThree(810));
    }

    /**
     * @dataProvider isPowerOfThreeWrong
     */
    public function testIsPowerOfThreeWrong(int $int)
    {
        $task2 = new \MyApp\tasks\Task2PowerOfThree();
        $this->expectException('Exception');
        $task2->isPowerOfThree($int);
    }
    public function isPowerOfThreeWrong(): array
    {
        return [
            [-9],
            [-3],
        ];
    }
}
