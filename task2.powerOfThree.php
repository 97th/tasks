<?php
function isPowerOfThree(int $number)
{
    if ($number == 1)
    {
        return print_r('true 3^0'.PHP_EOL);
    }
    for ($i=1;$i<100;$i++)
    {
        $result = pow($number, (1/$i));
        if ($result == 3)
        {
            return print_r('true 3^'.$i.PHP_EOL);
        }
    }
    return print_r('false');
}

isPowerOfThree(31381059609);
