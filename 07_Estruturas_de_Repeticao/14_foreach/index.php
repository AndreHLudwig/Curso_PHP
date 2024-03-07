<?php

$nomes = ["Mathues", "André", "Diego", "Maria"];

$a = ", beleza?";

foreach($nomes as $nome){
    echo "O nome do índice atual é $nome <br>";
    if($nome == "André"){
        echo "Opaa$a <br>";
    }
}