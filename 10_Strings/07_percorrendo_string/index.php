<?php

$str = "Esta é uma String muito grande, ela tem vários caracteres";

for($i = 0; $i < strlen($str); $i++){
    echo "$str[$i] <br>";
}