<?php
namespace MyApp\tasks;

class Task7HappyTicket
{
    public function isHappy($number)
    {
        $len = strlen($number);
        if ($len === 0) {
            throw new \Exception('Not a ticket');
        }
        $line = strval($number);
        $numberOfDigits = strlen($line);
        if ($numberOfDigits % 2 !== 0) {
            throw new \Exception('the number is odd');
        }

        $firstPart = $numberOfDigits / 2;
        $firstRes = 0;
        $secondRes = 0;
        for ($i = 0; $i < $firstPart; $i++) {
            $firstRes += $line[$i];
        }
        for ($i = $firstPart; $i < $numberOfDigits; $i++) {
            $secondRes += $line[$i];
        }
        return $firstRes === $secondRes;
    }
}
