<?php

$arr1 = [1, 2, 3];
$arr2 = [10, 20, 39];
$arr3 = [42.8, 77.1, 22.3];
$arr4 = ["oi", "ok", "olá"];


$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0, 1]);

print_r($arrMerge);
echo "<br>";