<?php

class Animal{
    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }
    function latir(){
        return "Au au <br>";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
}

$bob = new Animal;

echo "O nome do animal é: $bob->nome <br>";

$bob->escolherNome("Bob");

echo "O nome do animal é: $bob->nome <br>";

echo $bob->latir();

echo $bob->latirForte();