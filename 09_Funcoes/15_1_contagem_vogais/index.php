<?php

function countVowels($str){
    $count = 0;
    $str = strtolower($str);
    
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

echo countVowels("Coffee") . "<br>";

function countVowels2($str) {
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos("aeiouAEIOU", $str[$i]) !== false) {
            $count++;
        }
    }
    
    return $count;
}

// Exemplo de uso
echo countVowels("Olá, isso é um exemplo de frase!") . "<br>";
echo countVowels2("Paraguai <br>");