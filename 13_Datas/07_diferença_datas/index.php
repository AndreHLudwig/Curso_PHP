<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(1969, 06, 13);

print_r($dataA);
echo "<br>";

print_r($dataB);
echo "<br>";

$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
echo "<br>";