<?php

$servername = "localhost";
$database = "meusite";
$username = "root";
$password = "";
// Criar a conexão

$conn = mysqli_connect($servername, $username, $password, $database);
// Checar a conexão

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>