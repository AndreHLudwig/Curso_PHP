<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//Assunto da aula

$id = 10;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$stmt->close();