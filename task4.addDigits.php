<?php
function addDigits(int $number)
{
    $line = strval($number);
    $numberOfDigits = strlen($line);
    if ($numberOfDigits == 1) {
        $result = $line;
        return $result;
    }

    while ($numberOfDigits != 1) {
        $result = 0;
        for ($i = 0; $i < $numberOfDigits; $i++) {
            $result += (int)$line[$i];
        }
        $line = strval($result);
        $numberOfDigits = strlen($line);
    }
    return $result;
}

echo addDigits(95191);
