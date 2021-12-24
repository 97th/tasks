<?php
function addDigits(int $number){
    $line = strval($number);
    $numberOfDigits = strlen($line);
    if ($numberOfDigits == 1){
        $result = $line;
        return print_r($result);
    }

    while ($numberOfDigits != 1){
        $result = 0;
        for ($i = 0; $i < $numberOfDigits; $i++){
            $result = $result + $line[$i];
        }
        $line = strval($result);
        $numberOfDigits = strlen($line);
    }
    return print_r($result);
}
addDigits(999);
