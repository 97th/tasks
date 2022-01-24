<?php
namespace MyApp\tasks;

class Task5BalancedBrackets
{
    public function isBalanced(string $line)
    {
        if ($line === '') {
            throw new \Exception('empty value');
        }
        $balance = 0;
        $lineLength = strlen($line);
        for ($i = 0; $i < $lineLength; $i++) {
            if ($line[$i] !== '(' && $line[$i] !== ')') {
                throw new \Exception('available values "(" and ")" only');
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
