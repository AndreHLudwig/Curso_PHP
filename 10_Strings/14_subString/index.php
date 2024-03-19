<?php

$str = "Esta é a minha string";

$minha = substr($str, 10, 5); //String pai, índice inicial, comprimento da palavra

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 9); //Omitir comprimento = pegar até o fim

echo $novaString . "<br>";

$novaString2 = substr($str2, 9, -3); //Comprimento negativo = remover do ultimo índice

echo $novaString2 . "<br>";