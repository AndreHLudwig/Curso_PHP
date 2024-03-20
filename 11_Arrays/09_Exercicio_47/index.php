<?php

$carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automático"];
print_r($carro);
echo "<br>";
list($marca, $motor, $cor, $aro, $acessorio, $cambio) = $carro;
echo "<br>";
echo "$marca <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$acessorio <br>";
echo "$cambio <br>";