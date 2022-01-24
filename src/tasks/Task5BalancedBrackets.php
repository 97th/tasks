<?php
namespace MyApp\tasks;

class Task5BalancedBrackets
{
    public function isBalanced(string $line)
    {
        if ($line === '') {
            throw new \Exception('empty value');
        }
        if (!preg_match('~^[()]+$~', $line)) {
            throw new \Exception('available values "(" and ")" only');
        }
        $balance = 0;
        $lineLength = strlen($line);
        for ($i = 0; $i < $lineLength; $i++) {
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
