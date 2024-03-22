<?php

interface Caracteristicas{

    const nome = "André";
    public function falar();
}

class Humano implements Caracteristicas{

    public $idade = 22;

    public function falar(){
        echo "Olá guys! <br>";
    }
    public function dizerNome(){
        echo "Meu nome é " . self::nome . "<br>";
    }

}

$andre = new Humano;

$andre->falar();
$andre->dizerNome();