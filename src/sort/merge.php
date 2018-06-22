<?php
// Main function that sorts arr[l..r] using
// merge()
function mergeSort(array &$arr, int $l, int $r) :void
{
    if ($l < $r) {
        // Find the middle point
        $m = ($l + $r)/2;
        // Sort first and second halves
        mergeSort($arr, $l, $m);
        mergeSort($arr , $m + 1, $r);
        // Merge the sorted halves
        merge($arr, $l, $m, $r);
    }
}

// Merges two subarrays of arr[].
// First subarray is arr[l..m]
// Second subarray is arr[m+1..r]
function merge(array &$arr, int $l, int $m, int $r) :void
{
    // Find sizes of two subarrays to be merged
    $n1 = $m - $l + 1;
    $n2 = $r - $m;

    /* Create temp arrays */
    $L[] = $n1;
    $R[] = $n2;

    /*Copy data to temp arrays*/
    for ($i = 0; $i < $n1; ++$i) {
        $L[$i] = $arr[$l + $i];
    }
    for ($j = 0; $j < $n2; ++$j) {
        $R[$j] = $arr[$m + 1+ $j];
    }
    /* Merge the temp arrays */
    // Initial indexes of first and second subarrays
    $i = 0;
    $j = 0;
    // Initial index of merged subarry array
    $k = $l;
    while ($i < $n1 && $j < $n2) {
        if ($L[$i] <= $R[$j]) {
            $arr[$k] = $L[$i];
            $i++;
        } else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }
    /* Copy remaining elements of L[] if any */
    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }
    /* Copy remaining elements of R[] if any */
    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}
