<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//assunto da aula

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte Monitor";
$descricao = "novo e barato";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();