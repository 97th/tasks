<?php
namespace MyApp\tasks;

class Task8FizzBuzz
{
    public function generateFizzBuzz ($beginFizz, $endFizz): string
    {
        return $this->fizzBuzz($beginFizz, $endFizz);
    }
    public function fizzBuzz($begin, $end)
    {
        $output = "";
        for ($i = $begin; $i <= $end; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $output .= 'FizzBuzz ';
                //print_r('FizzBuzz ');
            } elseif ($i % 3 === 0) {
                $output .= 'Fizz ';
                //print_r('Fizz ');
            } elseif ($i % 5 === 0) {
                //print_r('Buzz ');
                $output .= 'Buzz ';
            } else {
                $output .= strval($i) . ' ';
                //print_r($i . ' ');
            }
        }
        return $output;
    }
}
