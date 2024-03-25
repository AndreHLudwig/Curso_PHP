<?php

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dezDias = strtotime("10 days");

echo $dezDias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincoDias);

echo $dataAtualMais5 ."<br>";

$dataAtualMais10 = date('d/m/y', $dezDias);

echo $dataAtualMais10 ."<br>";

$doisMeses = strtotime("2 months");

$doisMeses = date('d/m/y', $doisMeses);

echo $doisMeses ."<br>";

$dezAnos = strtotime("10 years");

$dezAnos = date('d/m/Y', $dezAnos);

echo $dezAnos ."<br>";