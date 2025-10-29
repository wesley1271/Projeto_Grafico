<?php


include "conexao.php";

if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['senha']) ){
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO cadastro (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

if (mysqli_query($conn, $query)){

    echo "Registro inserido com sucesso";

}else {
    echo "erro ao inserir um registro" . mysqli_error($conn);
}

}

?>