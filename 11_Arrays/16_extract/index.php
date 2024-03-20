<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";

$pessoa = [
    'nome' => 'Lucas',
    'idade' => 20
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";