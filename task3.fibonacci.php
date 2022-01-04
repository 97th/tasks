<?php
function fib(int $number)
{
    switch ($number) {
        case 0:
            $result = 0;
            return $result;
        case 1:
            $result = 1;
            return $result;
    }
    $previous = 1;
    $prePrevious = 0;
    $result = 0;
    for ($i = 2; $i <= $number; $i++) {
        $result = $previous + $prePrevious;
        $prePrevious = $previous;
        $previous = $result;
    }
    return $result;
}

echo fib(1);