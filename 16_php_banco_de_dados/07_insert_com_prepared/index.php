<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//Assunto da aula

$nome = "Batataphone";
$descricao = "Smartphone do paraguai";

$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao); //s = string, i = integer, d = double

$stmt->execute();