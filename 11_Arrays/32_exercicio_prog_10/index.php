<?php

$arr = [4, 7, 9, 2, 3, 22, 12];

function maiorElemento($arr){
    $maior = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] > $maior){
            $maior = $arr[$i];
        }     
    }
    return $maior;
}

$maiorNum = maiorElemento($arr);
echo "$maiorNum <br>";
