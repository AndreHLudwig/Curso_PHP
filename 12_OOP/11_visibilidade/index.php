<?php

class Car{
    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function peliculaDeFabrica($pelicula){
        $this->vidro = $pelicula;
    }

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }
}

class Mecanico{
    public function alterarRodas($obj){
        $obj->rodas = 10;
    }

    public function colocarPelicula($obj, $pelicula){
        $obj->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas. "<br>";

$andre = new Mecanico;
$andre->alterarRodas($carro);

echo $carro->rodas. "<br>";

//Não pode alterar porque é privado
//$andre->colocarPelicula($carro, "G5");

//$carro->peliculaDeFabrica("G7");

echo $carro->getVidro() ."<br>";

//$carro->vidro() = "tste";

echo $carro->getPortas() ."<br>";