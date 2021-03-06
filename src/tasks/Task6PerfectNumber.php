<?php

namespace MyApp\tasks;

class Task6PerfectNumber
{
    public function isPerfect(int $number): bool
    {
        if ($number === 0) {
            return false;
        }
        $sumOfDiv = 0;
        for ($i = 1; $i < $number; $i++) {
            if ($number % $i === 0) {
                $sumOfDiv += $i;
            }
        }
        return $sumOfDiv === $number;
    }
}
