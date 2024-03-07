<?php

function verificaNumero ($numero){

    if($numero % 2 == 0){
        echo "O número $numero é par <br>";
    } else {
        echo "O número $numero é ímpar <br>";
    }
}

verificaNumero(2);
verificaNumero(3);
verificaNumero(28);
verificaNumero(55);