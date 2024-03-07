<?php

$vel = 40;
$velMax = 40;

if($vel < $velMax){
    echo "Motorista na velocidade correta <br>";

} else if($vel == $velMax){

    echo "Cuidado motorista, estás no limite da velocidade <br>";

} else {
    echo "Você excedeu a velocidade, uma multa será aplicada <br>";
}

?>
