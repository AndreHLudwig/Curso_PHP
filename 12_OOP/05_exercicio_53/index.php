<?php

class Cachorro{
    function latir(){
        echo "Wof, wof, wof <br>";
    }

    function andar($m){
        echo "O cachorro andou $m metros <br>";
    }
}

$bob = new Cachorro;
$max = new Cachorro;

$bob->andar(10);
$max->andar(5);
$max->latir();
$bob->latir();