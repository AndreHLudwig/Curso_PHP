<?php

$arr = range(10,45);

for($i = 0; $i < count($arr); $i++){
    $arr[$i] += 6;
    echo "$arr[$i] <br>";

    if($arr[$i] > 30){
        echo "O número $arr[$i] é muito alto <br>";
    }
}