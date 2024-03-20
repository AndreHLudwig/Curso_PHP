<?php

$arr = [
    'nome' => 'André',
    'idade' => 27
];

if(array_key_exists("nome", $arr)){
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}


if(array_key_exists("profissao", $arr)){
    echo "A chave 2 existe <br>";
} else {
    echo "A chave 2 não existe <br>";
}

if(isset($arr['nome'])){
    echo "A chave existe! ISSET <br>";
} else {
    echo "A chave 2 não existe! ISSET <br>";
}

if(isset($arr['teste'])){
    echo "A chave existe! ISSET <br>";
} else {
    echo "A chave não existe! ISSET <br>";
}