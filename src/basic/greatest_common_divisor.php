<?php
//Euclidean algorithm for computing the greatest common divisor (GCD)
function greatestCommonDivisor(int $a, int $b) : int
{
    return $b === 0 ? ($a < 0 ? - $a : $a) : greatestCommonDivisor($b, $a % $b);
}
