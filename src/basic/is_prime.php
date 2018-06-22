<?php

//check if the $n simple number
function isPrime(int $n) : bool
{
    if ($n === 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $n; ++$i) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}
