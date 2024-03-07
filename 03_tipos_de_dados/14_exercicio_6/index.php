<?php

$carro = ['modelo' => 'Saveiro', 
        'cor' => 'Branca',
        'ano' => '2019',
        'vel_max' => '180'
];

echo $carro ['modelo'];
echo "<br>";
echo $carro ['cor'];
echo "<br>";

$marca = $carro['modelo'];
$veloc_max = $carro['vel_max'];

echo "O modelo $marca atinge no máximo, $veloc_max km/h";