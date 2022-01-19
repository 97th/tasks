<?php
namespace MyApp\tasks;

class Task7HappyTicket
{
    public function isHappy($number)
    {
        $line = strval($number);
        $numberOfDigits = strlen($line);
        if ($numberOfDigits % 2 !== 0) {
            return false;
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
//echo isHappy(212005);
