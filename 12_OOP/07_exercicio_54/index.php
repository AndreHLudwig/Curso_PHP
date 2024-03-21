<?php

class Pessoa{
    public $nome;
    public $idade;

    function andar($meters){
        echo "Essa pessoa andou $meters metros! <br>";
    }
}

$andre = new Pessoa;

$andre->nome = "André";
$andre->idade = 27;

echo "O nome de é $andre->nome e tem $andre->idade anos <br>";
echo "<br>";

$andre->andar(50);