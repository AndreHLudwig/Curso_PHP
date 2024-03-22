<?php

class Humano {

}

class Animal{

}

class Professor extends Humano{

}

$maria = new Humano;
$turca = new Animal;

if($maria instanceof Humano){
    echo "Maria é Humana <br>";
} else {
    echo "A Maria não é Humana <br>";
}

if($turca instanceof Humano){
    echo "Turca é Humana <br>";
} else {
    echo "A turca não é Humana <br>";
}

$pedro = new Professor;

if($pedro instanceof Professor){
    echo "Pedro é Professor <br>";
} else {
    echo "O Pedro não é Professor <br>";
}

if($pedro instanceof Humano){
    echo "Pedro é Humano <br>";
} else {
    echo "O Pedro não é Humana <br>";
}
