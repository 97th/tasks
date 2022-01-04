<?php
function isPowerOfThree(int $number)
{
    if ($number == 1) {
        return true;
    }
    for ($i = 1; $i < 100; $i++) {
        $result = pow($number, (1 / $i));
        if ($result == 3) {
            return true;
        }
    }
    return false;
}

echo isPowerOfThree(31381059609);
