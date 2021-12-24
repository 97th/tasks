<?php
function binarySum(string $binFirst, string $binSecond){
    $decFirst = bindec($binFirst);
    $decSecond = bindec($binSecond);
    $decRes = $decSecond + $decFirst;
    return decbin($decRes);
}

echo binarySum ('1101','101');