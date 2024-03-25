<?php
$dataNascimento = mktime(02, 12, 33, 11, 21, 1996);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataEspec = mktime(10, 20, 11, 04, 28, 2041);

$dataEspec = date('m/d/y', $dataEspec);

echo $dataEspec . "<br>";