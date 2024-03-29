<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


if($conn->connect_errno){
    echo "Erro na conexão <br>";
    echo "Erro: " . $conn->connect_error;
} 