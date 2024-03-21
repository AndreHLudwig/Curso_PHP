<?php

class Humano{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante(){
        echo "Quantidade de braços: " . self::BRACOS . "<br>";
    }
}

$rob = new Humano;

echo "Quantidade de olhos: " . $rob::OLHOS . "<br>";

$rob->mostrarConstante();