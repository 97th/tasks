<?php

namespace MyApp\tasks;

class Task1BinSum
{
    public function binarySum(string $binFirst, string $binSecond): string
    {
        if ($binFirst === '' OR $binSecond === '') {
            throw new \Exception('empty value');
        }
        if (!preg_match('~^[01]+$~', $binFirst) OR (!preg_match('~^[01]+$~', $binSecond))) {
            throw new \Exception('not a binary value');
        }
        $decFirst = bindec($binFirst);
        $decSecond = bindec($binSecond);
        $decRes = $decSecond + $decFirst;
        return decbin($decRes);
    }
}
