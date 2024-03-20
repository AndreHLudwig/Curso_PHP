<?php

$marca = "Citroen";
$motor = 1.6;
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);