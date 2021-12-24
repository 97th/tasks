<?php
function fib(int $number){
    switch ($number) {
        case 0:
            echo "0";
            break;
        case 1:
            echo "1";
            break;
    }
    $previous = 1;
    $prePrevious = 0;
    $result = 0;
    for ($i = 2; $i <= $number; $i++){
        $result = $previous + $prePrevious;
        $prePrevious = $previous;
        $previous = $result;
    }
    print_r($result);
}
fib(20);
