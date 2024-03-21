<?php

class  Pessoa{

    function falar(){
        echo "Olá, eu sou um objeto <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }
}

$mateus = new Pessoa;

$mateus->falar();
$mateus->falar();

$joao = new Pessoa;

$joao->falar();

$mateus->somar(1,2);
$joao->somar(3,8);