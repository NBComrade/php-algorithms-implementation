<?php

function fibonacci(int $n) : int
{
    if ($n === 0) {
        return 1;
    }
    $previous = 1;
    $current = 1;
    for ($i = 3; $i <= $n; ++$i) {
        $temp =  $current;
        $current += $previous;
        $previous = $temp;
    }
    return $current;
}
