<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "cursophp";

$conn = new mysqli($servername, $username, $password, $database);

//CREATE AND DELETE TABLES

//$q = "CREATE TABLE teste3 (nome VARCHAR(100), sobrenome VARCHAR (100))";

$d = "DROP TABLE teste2";

$conn->query($d);

