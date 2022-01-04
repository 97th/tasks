<?php
function fizzBuzz($begin, $end)
{
    for ($i = $begin; $i <= $end; $i++) {
        if (($i % 3 === 0) && ($i % 5 === 0)) {
            print_r('FizzBuzz ');
        } elseif ($i % 3 === 0) {
            print_r('Fizz ');
        } elseif ($i % 5 === 0) {
            print_r('Buzz ');
        } else {
            print_r($i . ' ');
        }
       }
}

echo fizzBuzz(44,120);
