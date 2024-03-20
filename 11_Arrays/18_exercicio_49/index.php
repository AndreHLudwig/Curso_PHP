<?php

$raca = "dobermann";
$patas = 4;
$rabo = true;
$pelagem = "preta";

$zeus = compact("raca", "patas", "rabo", "pelagem");

foreach ($zeus as $chave => $valor) {
    echo "$chave: $valor <br>";
}