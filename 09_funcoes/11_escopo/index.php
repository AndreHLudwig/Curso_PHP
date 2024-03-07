<?php

$a = 10;

$b = 15;

function testeEscopo(){

    $a = 5;

    global $b;

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "Escopo local de A: $a <br>";

    echo "Escopo global na função de B: $b <br>";

    echo "Escopo static de C: $c <br>";

}

echo "Escopo Global de A: $a <br>";
echo "Escopo global na função de B: $b <br>";

testeEscopo();

echo "Escopo global na função de B 2: $b <br>";

testeEscopo();