<?php

// Returns index of $element if it is present in $array,
// else return -1
function binarySearch(array $array, int $element) : int
{
    $left = 0;
    $right = count($array);
    while ($left <= $right) {
        $mid = $left + ($right - $left) / 2;
        // Check if $element is present at $mid
        if ($array[$mid] === $element) {
            return $mid;
        }
        // If $element greater, ignore left half
        if ($array[$mid] < $element) {
            $left = $mid + 1;
        } else {  // If $element is smaller, ignore right half
            $right = $mid - 1;
        }
    }
    // if we reach here, then $element was not present
    return -1;
}
