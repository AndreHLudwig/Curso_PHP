<?php

function teste($a = "teste"){
    echo "O valor de A é: $a <br>";
}

teste();
teste("asd");

//boa prática, valores default por último nos argumentos
function testando2( $b, $a = "x"){
    echo "O valor de A é: $a e de B é $b <br>";

}

testando2("1");
testando2("2", "1");