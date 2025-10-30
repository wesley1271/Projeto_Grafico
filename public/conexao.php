<?php
defined('CONTROL') or die('Acesso negado!');
$servername = "localhost";
$database = "showboard";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou" . mysqli_connect_error());
}



?>