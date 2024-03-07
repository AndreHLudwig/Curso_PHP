<?php

$peso = 80.5;
$peso2 = 66.6;

if($peso > 80){
    echo "1 - Está pesado demais <br>";
}
else{
    echo "Peso dentro do limite <br>";
}
if(is_float($peso2)){
    echo "2 é float <br>";
}
else{
    echo "Não é float <br>";
}

?>