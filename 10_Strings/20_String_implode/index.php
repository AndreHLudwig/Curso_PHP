<?php

$arr = ["Maçã", "Pera", "Mamão", "Batata"];
$str = implode(", ", $arr);

echo "$str <br>";

$arr3 = ["Avião", "Tanque", "Onibus", "Carreta"];

$str3 = implode(" <-> ", $arr3);
echo "$str3 <br>";