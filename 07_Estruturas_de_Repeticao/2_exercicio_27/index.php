<?php

$arr = [5, "Matheus", false, 3.5, "André", "Cálculo", 555, [], true, "Dev", 8,66, "Software"];

$x = count($arr);
$y = 0;

while($y < $x){
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;
}