<?php

//data atual
$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l . F . Y') . "<br>";

//data atual + 5 dias
$data->modify('+5 days');

echo $data->format('d/m/y') . "<br>";

$data->modify('-4 years');

echo $data->format('d/m/y') . "<br>";
