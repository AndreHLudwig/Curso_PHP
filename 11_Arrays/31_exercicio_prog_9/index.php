<?php

$arr = [1, 2, 3, 4, 55, 85, 46];

function somaElementos($arr){
    $resultado = 0;
    
    for ($i = 0; $i < count($arr); $i++) {
         $resultado += $arr[$i];
    }
    return $resultado;
}

echo "O resultado é: $resultado <br>";