<?php
namespace MyApp\tasks;

class Task5BalancedBrackets
{
    public function isBalanced(string $line)
    {
        if ($line === '') {
            return true;
        }
        $balance = 0;
        $lineLength = strlen($line);
        for ($i = 0; $i < $lineLength; $i++) {
            if ($line[$i] !== '(' && $line[$i] !== ')') {
                return false;
            }
            if ($line[$i] === '(') {
                $balance++;
            } else {
                $balance--;
            }
            if ($balance < 0) {
                return false;
            }
        }
        return $balance === 0;
    }
}
//echo isBalanced('()()');
