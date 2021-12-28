<?php
function isPerfect($number)
{
    $sumOfDiv = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sumOfDiv += $i;
        }
    }
    if ($sumOfDiv == $number) {
        return true;
    }
    else
        return false;
}
echo isPerfect(8128);
