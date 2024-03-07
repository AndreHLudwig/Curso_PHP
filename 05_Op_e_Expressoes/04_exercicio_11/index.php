<?php

$teste = gettype("5" * 12);

echo $teste;
echo "<br>";

$operacao = "5" * 12;
echo $operacao . "<br>";

echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");
echo "<br>";