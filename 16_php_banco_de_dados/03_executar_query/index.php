<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

// query

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

print_r($result);

$conn->close();