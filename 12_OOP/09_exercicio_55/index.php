<?php

class Carro{
    public $cor;
    public $numPortas;
    public $marca;
    public $modelo;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($velMax){
        $this->velocidadeMaxima = $velMax; 
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima é: " .$this->velocidadeMaxima . " km/h <br>";
    }
}

$mercedez = new Carro;

$mercedez->cor = "Preta";
$mercedez->numPortas = 4;
$mercedez->marca = "Mercedez-Benz";
$mercedez->modelo = "gla-450";
$mercedez->setVelocidadeMaxima(240);
$mercedez->getVelocidadeMaxima();