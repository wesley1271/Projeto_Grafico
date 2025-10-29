<?php
include "conexao.php";

if (!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['link'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $link = $_POST['link'];

    $query = "INSERT INTO projeto (titulo, descricao, link) VALUES ('$titulo', '$descricao', '$link')";

    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
}
?>