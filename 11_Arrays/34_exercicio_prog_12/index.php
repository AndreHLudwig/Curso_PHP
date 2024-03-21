<?php

$arr = [3, 2, 9, 6, 8, 5, 20, 14, 70, 19, 33, 45];

function ordenarNumeros($arr){
   sort($arr);
   return $arr;  
}

$novoArray = ordenarNumeros($arr);
print_r($novoArray);
echo "<br>";