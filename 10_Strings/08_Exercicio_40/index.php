<?php

$strin = "O rato roeu a roupa do rei de Roma";

$letrasA = 0;

for($i = 0; $i < strlen($strin); $i++){

    if($strin[$i] === "a"){
        $letrasA++;
    }
    
}

echo "O número de letras 'a' é igual a: $letrasA <br>";

