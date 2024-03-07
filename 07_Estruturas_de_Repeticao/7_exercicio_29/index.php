<?php

$nums = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = count($nums);
$j = 0;
while($j < $i){
    
    if($nums[$j] == 30 || $nums[$j] == 40){
        echo "---- <br>";
        $j++;
        continue;
    }

    echo "Entrando no loop " . $nums[$j] . "<br>";

    $j++;

}