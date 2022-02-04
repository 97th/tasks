<?php

namespace MyApp\tasks;

class Task8FizzBuzz
{
    public function fizzBuzz(int $begin, int $end): void
    {
        echo implode('', $this->generateFizzBuzz($begin, $end));
    }
    public function generateFizzBuzz(int $begin, int $end): array
    {
        if ($begin > $end) {
            throw new \Exception('end value less than start');
        }
        $output = [];
        for ($i = $begin; $i <= $end; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $output[$i] = 'FizzBuzz ';
            } elseif ($i % 3 === 0) {
                $output[$i] = 'Fizz ';
            } elseif ($i % 5 === 0) {
                $output[$i] = 'Buzz ';
            } else {
                $output[$i] = $i . ' ';
            }
        }
        return $output;
    }
}
