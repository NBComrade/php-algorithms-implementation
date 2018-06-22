<?php

function fibonacciRecursive(int $n) : int
{
    if ($n <= 1) {
    	return $n;
    }
    return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
}
