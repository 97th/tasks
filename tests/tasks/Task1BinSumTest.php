<?php
use PHPUnit\Framework\TestCase;

class Task1BinSumTest extends TestCase
{
    /**
     * @dataProvider binarySumProvider
     */
    public function testBinarySumWrong($num1, $num2)
    {
        $task1 = new \MyApp\tasks\Task1BinSum();
        $this->expectException('Exception');
        $task1->binarySum($num1, $num2);
    }

    public function binarySumProvider(): array
    {
        return [
            ['','10'],
            ['10',''],
            ['12','10'],
            ['10','12'],
        ];
    }

    public function testBinarySum(): void
    {
        $task1 = new \MyApp\tasks\task1BinSum();
        $actual = $task1->binarySum(111,1);
        $expected = '1000';
        self::assertEquals($actual,$expected);
    }
}
