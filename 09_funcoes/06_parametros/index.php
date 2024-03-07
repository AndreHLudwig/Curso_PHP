<?php

function velocidadeMaxima($vel){
    
    if(is_int($vel)){
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, insira um número inteiro <br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

//Não pode
//velocidadeMaxima();

echo "Teste continuado <br>";

$velocidade = 133;

velocidadeMaxima($velocidade);

//PHP ignora parâmetro desnecessário
velocidadeMaxima(500, "teste");

velocidadeMaxima("teste");

//Mais parâmetros

function descreverAnimal($nome, $raca){
    
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Joãozinho", "Vira Lata");
descreverAnimal("Zeus", "Dobermann");