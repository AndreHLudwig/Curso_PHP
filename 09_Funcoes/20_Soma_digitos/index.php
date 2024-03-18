<?php
function sumDigits($num) {

    $sum = 0;

    $numStr = (string)$num;

    for ($i = 0; $i < strlen($numStr); $i++) {
        $sum += intval($numStr[$i]);
    }
    return $sum;
}

echo sumDigits(12345); 
