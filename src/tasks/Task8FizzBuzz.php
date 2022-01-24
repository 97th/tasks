<?php
namespace MyApp\tasks;

class Task8FizzBuzz
{
    public function fizzBuzz(int $begin, int $end)
    {
        if ($begin > $end) {
            throw new \Exception('end value less than start');
        }
        $output = "";
        for ($i = $begin; $i <= $end; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $output .= 'FizzBuzz ';
            } elseif ($i % 3 === 0) {
                $output .= 'Fizz ';
            } elseif ($i % 5 === 0) {
                $output .= 'Buzz ';
            } else {
                $output .= strval($i) . ' ';
            }
        }
        return $output;
    }
}
