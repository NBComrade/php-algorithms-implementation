<?php

function quickSort(array &$arr, int $low, int $high) :void
{
    if ($low < $high)
    {
        /* pI is partitioning index, arr[pI] is
          now at right place */
       $pI = partition($arr, $low, $high);
        // Recursively sort elements before
        // partition and after partition
        quickSort($arr, $low, $pI - 1);
        quickSort($arr, $pI + 1, $high);
    }
}

/*
*This function takes last element as pivot,
*places the pivot element at its correct
*position in sorted array, and places all
*smaller (smaller than pivot) to left of
*pivot and all greater elements to right
*of pivot
 */
function partition(array &$arr, int $low, int $high) :int
{
    $pivot = $arr[$high];
    $i = $low - 1; // index of smaller element
    for ($j = $low; $j<$high; $j++) {
        // If current element is smaller than or
        // equal to pivot
        if ($arr[$j] <= $pivot) {
            $i++;
            // swap
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }

    // swap arr[i+1] and arr[high] (or pivot)
    $temp = $arr[$i+1];
    $arr[$i+1] = $arr[$high];
    $arr[$high] = $temp;

    return $i + 1;
}
