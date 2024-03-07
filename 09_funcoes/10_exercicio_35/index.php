<?php

function numQuadrado($num){
    return $num*$num;
    //ou **2;
}

$a = numQuadrado(2);
$b = numQuadrado(5);
$c = numQuadrado(7);
$d = numQuadrado(50);

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";