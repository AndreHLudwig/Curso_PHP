<?php

function sumEvenNumbers ($num){
    
    if ($num <= 0) {
        return "O número fornecido deve ser um inteiro positivo.";
    }
    
    $soma = 0;
    
    for ($i = 1; $i <= $num; $i++){
        if($i % 2 == 0){
            $soma += $i;
        }
    }
   
    return $soma;
}

echo "A soma dos números pares até 4 é: " . sumEvenNumbers(4);

