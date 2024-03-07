<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;

$y = 15;

echo "<br>";
echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

$x = 20;

echo "<br>";
echo "Atribuição após ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

$nome = "André";
$nome2 =& $nome;

echo "<br>";
echo $nome;
echo " <br>";
echo $nome2;

$nome2 = "duda";

echo "<br>";
echo $nome;
echo " <br>";
echo $nome2;