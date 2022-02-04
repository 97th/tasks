<?php

namespace MyApp\tasks;

class Task3Fibonacci
{
    public function fib(int $number): int
    {
        if ($number < 0) {
            throw new \Exception('value must be more or equal zero');
        }
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
}
