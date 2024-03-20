<?php

$food = ["Batata", "maçã", "pera", "feijão", "arroz"];

$removed = array_splice($food, 2, 2);

print_r($food);
echo "<br>";

print_r($removed);
echo "<br>";