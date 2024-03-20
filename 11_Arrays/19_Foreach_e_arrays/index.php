<?php

$andre = [
     'nome' => 'André',
     'idade' => 27,
     'profissao' => 'Programador'
];

$maria = [
    'nome' => 'Maria',
    'idade' => 32,
    'profissao' => 'Esteticista'
];

foreach($andre as $carac => $valor){

    echo "$carac =>> $valor <br>";
}

foreach($maria as $valor){

    echo "$valor <br>";
}

