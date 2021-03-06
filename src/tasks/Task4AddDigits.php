<?php

namespace MyApp\tasks;

class Task4AddDigits
{
    public function addDigits(int $number): int
    {
        $line = (string)$number;
        $numberOfDigits = strlen($line);
        if ($numberOfDigits === 1) {
            $result = $line;
            return $result;
        }

        while ($numberOfDigits !== 1) {
            $result = 0;
            for ($i = 0; $i < $numberOfDigits; $i++) {
                $result += (int)$line[$i];
            }
            $line = (string)$result;
            $numberOfDigits = strlen($line);
        }
        return $result;
    }
}
