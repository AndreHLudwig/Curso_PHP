<?php

$arr = [
    'porta' => 200,
    'janela' => 150,
    'cafeteira' => 95,
    'geladeira' => 2000
];

function itensCaros($arr){
    $arrItensCaros = [];

    foreach($arr as $item => $preco){
        if($preco > 100){
            array_push($arrItensCaros, $item);
        }
    }
    return $arrItensCaros;
}

$novoArr = itensCaros($arr);

print_r($novoArr);