<?php

function selectionSort(array &$arr) : void
{
    $n = count($arr);
    // One by one move boundary of unsorted subarray
    for ($i = 0; $i < $n-1; $i++) {
        // Find the minimum element in unsorted array
        $minIdx = $i;
        for ($j = $i+1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIdx]) {
                $minIdx = $j;
            }
        }
        // Swap the found minimum element with the first element
        $temp = $arr[$minIdx];
        $arr[$minIdx] = $arr[$i];
        $arr[$i] = $temp;
    }
}
