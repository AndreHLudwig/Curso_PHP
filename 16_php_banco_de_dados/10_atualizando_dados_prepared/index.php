<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//Assunto da aula
$id = 12;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "ObaPhone";
$descricao = "Smartphone para idosos";

$stmt->bind_param("ssi", $nome, $descricao, $id); 

$stmt->execute();

if($stmt->error){
    echo "Erro: " . $stmt->error . "<br>";
}
