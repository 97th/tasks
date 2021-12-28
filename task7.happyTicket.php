<?php
function isHappy($number)
{
    $line = strval($number);
    $numberOfDigits = strlen($line);
    if ($numberOfDigits % 2 != 0) {
        return print_r('Uneven');
    }
    $firstPart = $numberOfDigits / 2;
    $firstRes = 0;
    $secondRes = 0;
    for ($i = 0; $i < $firstPart ;$i++) {
        $firstRes += $line[$i];
    }
    for ($i = $firstPart; $i < $numberOfDigits; $i++) {
        $secondRes += $line[$i];
    }
    if ($firstRes == $secondRes) {
        return true;
    }
    else
        return false;
}

echo isHappy(212005);
