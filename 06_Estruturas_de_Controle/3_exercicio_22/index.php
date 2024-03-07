<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 22;

$maioridade = 18;

$mensagem = "Voce é maior de idade <br>";

if($idade1 >= $maioridade){
    echo "1 - ";
    echo $mensagem;
}

if($idade2 >= $maioridade){
    echo "2 - ";
    echo $mensagem;
}

if($idade3 >= $maioridade){
    echo "3 - ";
    echo $mensagem;
}

?>