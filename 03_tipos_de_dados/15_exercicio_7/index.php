<?php

$pessoa = ['nome' => 'Ellen',
           'idade' => "25",
           'profissao' => 'programadora',
           'altura' => '1.70',
           'solteira' => true
];


$ela = $pessoa ['nome'];
$yo = $pessoa ['idade'];
$work = $pessoa ['profissao'];

if($yo > 18){
    echo "$ela é $work e tem $yo anos!";
};