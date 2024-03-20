<?php

$arr = [
    'André' => 29,
    'Pedro' => 23, 
    'Duda' => 17,
    "Laura" => 16
];

asort($arr);

print_r($arr);
echo "<br>";

$arr2 = [
    'André' => 2,
    'Pedro' => 15, 
    'Duda' => 18,
    "Laura" => 21
];

arsort($arr2);

print_r($arr2);
echo "<br>";

ksort($arr2);

print_r($arr2);
echo "<br>";

krsort($arr2);

print_r($arr2);
echo "<br>";