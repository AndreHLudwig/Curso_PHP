<?php

$str = "carro - navio - helicóptero - barco - jangada";

$novaString = explode("-", $str);

for ($i=0; $i < count($novaString) ; $i++) { 
    echo "$novaString[$i] <br>";
}