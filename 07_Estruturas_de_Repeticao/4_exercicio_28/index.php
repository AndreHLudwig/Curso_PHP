<?php

$a = 4;

while ($a <= 30){
    echo "Valor de A: $a <br>";

    if($a == 24){
        echo "Fim do loop <br>";
        break;
    }
    
    $a += 2;

}
