<?php

$idade1 = 16;
$idade2 = 18;
$idade3 = 22;

$maioridade = 18;

$mensagem = "Voce é maior de idade <br>";
$msgErro = "Você é menor de idade <br>";

if($idade1 >= $maioridade){
    echo "1 - " + $mensagem;
}
else{
    echo "1 - ";
    echo $msgErro;}

if($idade2 >= $maioridade){
    echo "2 - ";
    echo $mensagem;
}
else{
    echo $msgErro;}

if($idade3 >= $maioridade){
    echo "3 - ";
    echo $mensagem;
}
else {
    echo $msgErro;}

?>