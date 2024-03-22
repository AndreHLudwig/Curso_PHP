<?php

class Humano{
    public function falar(){
        echo "Olá <br>";
    }
}

$loris = new Humano;
$teste = 10;

if(is_object($loris)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if(is_object($teste)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($loris) ."<br>";

if(method_exists($loris, "falar")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($loris, "teste")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}