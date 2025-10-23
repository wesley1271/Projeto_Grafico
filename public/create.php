<?php
defined('CONTROL') or die('Acesso negado');

include "conexao.php";

if (!empty($_POST['usuario']) && !empty($_POST['senha'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "INSERT INTO login (usuario, senha) VALUES ('$usuario', '$senha')";

if (mysqli_query($conn, $query)){

    echo "Registro inserido com sucesso";

}else {
    echo "erro ao inserir um registro" . mysqli_error($conn);
}

}

?>