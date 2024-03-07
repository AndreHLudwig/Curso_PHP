<?php

$number = 7;
$palavra = "olá";
$bool = true;

if(is_int($number)){
    echo $number . " é um número inteiro <br>";
}
else{
    echo $number . " não é um número inteiro <br>";
}

if(is_string($palavra)){
    echo $palavra . " é uma String <br>";
}
else{
    echo $palavra . " não é uma String <br>";
}
if(is_bool($bool)){
    echo $bool . " é um booleano <br>";
}
else{
    echo $bool . " não é booleano <br>";
}

if(is_bool($palavra)){
    echo $palavra . " é um booleano <br>";
}
else{
    echo $palavra . " não é booleano <br>";
}

?>