<?php

require_once __DIR__ . '/boot/loader.php';

$array = [1,2,3,4,5,6,7,8,9,10];
$index = binarySearch($array, 10);

echo $array[$index];
