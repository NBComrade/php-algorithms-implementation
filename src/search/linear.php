<?php

function linearSearch(array $array, $element) : int
{
    $count = count($array);
    for($i = 0; $i < $count; $i++) {
        if ($array[$i] === $element) {
            return $i;
        }
    }
    return -1;
}
