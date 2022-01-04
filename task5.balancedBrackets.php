<?php
function isBalanced(string $line)
{
    if ($line === '') {
        return true;
    }
    for ($i = 0; $i < strlen($line); $i++) {
        if ($line[$i] !== '(' && $line[$i] !== ')') {
            return false;
        }
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
echo isBalanced('()(())())))()())()');
