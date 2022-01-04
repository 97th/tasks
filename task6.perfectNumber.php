<?php
function isPerfect($number)
{
    $sumOfDiv = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            $sumOfDiv += $i;
        }
    }
    return $sumOfDiv === $number;
}

echo isPerfect(8128);
