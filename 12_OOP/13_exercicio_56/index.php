<?php

class Humano{
    public $altura;
    public $idade;

    public function falar(){
        echo "Olá, sou humano! <br>";
    }

}

class Professor extends Humano{
    public $areaConhecimento;
    public $quantTurmas;

    public function getAreaConhecimento(){
        return "Área de conhecimento: " . $this->areaConhecimento;
    }

    public function getQuantTurmas(){
        return $this->quantTurmas . " turmas";
    }

    public function setAreaConhecimento($novaArea){
        $this->areaConhecimento = $novaArea;
    }

    public function setQuantTurmas($numTurmas){
        $this->quantTurmas = $numTurmas;
    }
}

$andre = new Professor;

$andre->altura = 1.75;
$andre->idade = 27;
echo "$andre->altura <br>";
echo "$andre->idade <br>";

$andre->falar();

$andre->setAreaConhecimento("Programação");
$andre->setQuantTurmas(3);

echo $andre->getAreaConhecimento() . "<br>";
echo $andre->getQuantTurmas() . "<br>";