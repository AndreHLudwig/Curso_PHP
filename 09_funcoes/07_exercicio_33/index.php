<?php

function apresentarPessoa ($nome, $idade, $genero){
    echo "Olá, eu sou $genero $nome e tenho $idade anos.  <br>";
}

$nome1 = "André Ludwig";
$idade1 = 27;

apresentarPessoa($nome1, $idade1, "o");

apresentarPessoa("Carlos", 22, "a");