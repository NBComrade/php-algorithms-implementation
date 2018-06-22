<?php

function factorial(int $n) : float
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}