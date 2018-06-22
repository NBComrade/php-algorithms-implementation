<?php

function heapSort(array &$arr)
{
    $n = count($arr);

    // Build heap (rearrange array)
    for ($i = $n / 2 - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }

    // One by one extract an element from heap
    for ($i= $n-1; $i >= 0; $i--) {
        // Move current root to end
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        // call max heapify on the reduced heap
        heapify($arr, $i, 0);
    }
}

function heapify(array &$arr, int $n, int $i)
{
        $largest = $i;  // Initialize largest as root
        $l = 2 * $i + 1;  // left = 2*i + 1
        $r = 2 * $i + 2;  // right = 2*i + 2

        // If left child is larger than root
        if ($l < $n && $arr[$l] > $arr[$largest]) {
            $largest = $l;
        }
        // If right child is larger than largest so far
        if ($r < $n && $arr[$r] > $arr[$largest]) {
            $largest = $r;
        }
        // If largest is not root
        if ($largest !== $i) {
            $swap = $arr[$i];
            $arr[$i] = $arr[$largest];
            $arr[$largest] = $swap;

            // Recursively heapify the affected sub-tree
            heapify($arr, $n, $largest);
        }
}
