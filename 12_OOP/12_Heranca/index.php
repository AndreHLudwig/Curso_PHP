<?php

class Pessoa{
    public $idade = 27;

    public function falar(){
        echo "Olá Mundo! <br>";
    }

    private function gritar(){
        echo "PHP É MUITO BOM <br>";
    }

    public function acessaGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "xiiiiuu! <br>";
    }

    public function acessaFalarBaixinho(){
        $this->falarBaixinho();
    }
}

$ze = new Pessoa;

$ze->falar();
$ze->acessaGritar();
$ze->acessaFalarBaixinho();

class Programador extends Pessoa{

    public function acessaFalarBaixinhoProgramador(){
        $this->falarBaixinho();
    }

}

$andre = new Programador;

echo $andre->idade . "<br>";
$andre->falar();
$andre->acessaGritar();
$andre->acessaFalarBaixinhoProgramador();
