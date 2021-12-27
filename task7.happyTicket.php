<?php
function isHappy($number){
    $line = strval($number);
    $numberOfDigits = strlen($line);
    if ($numberOfDigits % 2 != 0){
        return print_r('Uneven');
    }
    $firstPart = $numberOfDigits / 2;
    $firstRes = 0;
    $secondRes = 0;
    for ($i = 0; $i < $firstPart ;$i++){
        $firstRes += $line[$i];
    }
    for ($i = $firstPart; $i < $numberOfDigits ;$i++){
        $secondRes += $line[$i];
    }
    $firstRes == $secondRes ? print_r('true') : print_r('false');

}
echo (isHappy(385916));
