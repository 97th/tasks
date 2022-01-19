<?php

namespace MyApp\tasks;

class Task1BinSum
{
    public function binarySum(string $binFirst, string $binSecond): string
    {
        $decFirst = bindec($binFirst);
        $decSecond = bindec($binSecond);
        $decRes = $decSecond + $decFirst;
        return decbin($decRes);
    }

    //echo binarySum ('1101', '1101');
}
