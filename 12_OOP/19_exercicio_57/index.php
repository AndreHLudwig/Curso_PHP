<?php

class Cachorro{
    public $raca;
    public $patas;
    public $pelagem;

    function __construct($raca, $patas, $pelagem){
        $this->raca = $raca;
        $this->patas = $patas;
        $this->pelagem = $pelagem;
    }

    public function toString(){
        echo "O cachorro é da raça: $this->raca, tem $this->patas patas e tem a
                pelagem $this->pelagem. <br>";
    }
}

$luna = new Cachorro("Cane Corso", 4, "Amarelada");
$luna->toString();

$zeus = new Cachorro("Dobermann", 4, "Escura");
$zeus->toString();