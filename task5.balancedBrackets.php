<?php
function isBalanced(string $line){
    if ($line === ''){
        return print_r('true');
    }
    for ($i = 0; $i < strlen($line); $i++){
        if ($line[$i] != '(' && $line[$i] != ')'){
            return print_r('bad line');
        }
    }
    $balance = 0;
    for ($i = 0; $i < strlen($line); $i++){
        if ($line[$i] == '('){
            $balance++;
        }
        else{
            $balance--;
        }
        if ($balance < 0){
            return ('not balanced');
        }
    }
    if ($balance > 0){
        return ('not balanced');
    }
    else {
        return ('balanced!');
    }
}
echo (isBalanced('()(())()()())'));
