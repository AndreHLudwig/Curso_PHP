<?php

$arr = [
    [2, 4, 6, 8],
    [1, 3, 5, 7],
    [3, 7, 11, 15]
];

for($i = 0; $i < count($arr); $i++){
    echo "Imprimindo Array: " . ($i + 1) . "<br>";
    for ($j=0; $j < count($arr[$i]); $j++) { 
        echo $arr[$i][$j] . "<br>";
    }
}