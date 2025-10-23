<?php

$servername = "localhost";
$database = "showboard";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou" . mysqli_connect_error());
}

echo "conexão bem sucedida";

?>