<?php

namespace MyApp\tasks;

class Task2PowerOfThree
{
    public function isPowerOfThree(int $number): bool
    {
        if ((string)$number === '') {
            throw new \Exception('empty value');
        }
        if (!preg_match('~^[0123456789]+$~', (string)$number)) {
            throw new \Exception('not an int number');
        }
        if ($number === 1) {
            return true;
        }
        for ($i = 1; $i < 100; $i++) {
            $result = pow($number, (1 / $i));
            if ((float)$result === 3.0) {
                return true;
            }
        }
        return false;
    }
}
