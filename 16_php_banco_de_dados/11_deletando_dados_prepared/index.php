<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//Assunto da aula
$nome = "Batataphone";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome); 

$stmt->execute();

$stmt->close();