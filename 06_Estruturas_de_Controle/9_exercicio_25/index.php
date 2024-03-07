<?php

$a = 25;
$b = 89;
$teste = "teste";

if(is_int($a) || is_float($a)){
    $c = $a * 2; 
    $multi = $a * 2;

    if($multi > 100){

        echo "Novo número maior que 100 <br>";
        
    } else {
        echo "O número não é maior que 100 <br>";
    }

} else {

    echo "Não é um número! <br>";
}
//////
if(is_int($b) || is_float($b)){
    $c = $b * 2; 
    $multi = $b * 2;

    if($multi > 100){

        echo "Novo número maior que 100 <br>";

    } else {
        echo "O número não é maior que 100 <br>";
    }

} else {

    echo "Não é um número! <br>";
}
//////
if(is_int($teste) || is_float($teste)){
    $multi = $teste * 2; 
    $multi1 = $teste * 2;

    if($multi1 > 100){

        echo "Novo número maior que 100 <br>";

    } else {
        echo "O número não é maior que 100 <br>";
    }

} else {

    echo "Não é um número! <br>";
}

?>