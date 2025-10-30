<?php
defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

if (!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['link'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $link = $_POST['link'];

    $query = "INSERT INTO projeto (titulo, descricao, link) VALUES ('$titulo', '$descricao', '$link')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php?rota=dashboard&success=1");
        exit;
    } else {
        die("Erro ao inserir registro: " . mysqli_error($conn));
       }
} else {
    header("Location: index.php?rota=dashboard");
    exit;
}