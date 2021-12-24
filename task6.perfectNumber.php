<?php
function isPerfect($number){
    $sumOfDiv = 0;
    for ($i = 1; $i < $number; $i++){
        if ($number % $i == 0){
            $sumOfDiv += $i;
        }
    }
    if ($sumOfDiv == $number) {
        return print_r('true');
    }
    else
        return print_r('false');
}
isPerfect(8128);
