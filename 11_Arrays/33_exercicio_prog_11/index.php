<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 12, 55, 77, 88, 102];

function encontrarPares($arr){
    $arrayPares = [];
    for ($i=0; $i < count($arr); $i++) { 
        if($arr[$i] % 2 === 0){
            $arrayPares[] = $arr[$i];
        }
    }
    return $arrayPares;
}

$arrayDePares = encontrarPares($arr);

print_r($arrayDePares);
echo "<br>";
