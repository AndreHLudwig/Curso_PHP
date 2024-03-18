<?php

function isPrime($num){
    if ($num < 2){
        return false;
    } else {
        
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return false;
            }
        }
        return true;
    }
}

var_dump(isPrime(17));