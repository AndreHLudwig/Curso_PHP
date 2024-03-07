<?php

    class Pessoa {

        function falar() {
            echo "Olá Pessoal!";
        }

    }

    $andre = new Pessoa();

    $andre->nome = "André";

    echo $andre->nome;

    echo "<br>";

    $andre->falar();