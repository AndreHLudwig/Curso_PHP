<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//Assunto da aula
$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//um resultado
$item = $result->fetch_assoc();

print_r($item);
echo "<br>";

//todos os resultados
$itens = $result->fetch_all();
print_r($itens);
echo "<br>";