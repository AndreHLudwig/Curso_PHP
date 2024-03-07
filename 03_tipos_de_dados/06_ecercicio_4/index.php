<?php

$a = 1.6;
$b = 3.41;
$c = -9.9;

echo $a; 
echo "<br>";
echo $b; 
echo "<br>";
echo $c;
echo "<br>";

if(is_float($b)){
    echo "B é float! <br>";
}

if(is_float($c)){
    echo "Sim, negativos também são floats! <br>";
}