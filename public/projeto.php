<?php

defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

$id_user = $_SESSION['usuario_id'] ?? null;

if (!$id_user) {
    die("Usuário não autenticado.");
}

if (!empty($_POST['titulo']) && !empty($_POST['link'])) {
    
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    $link = mysqli_real_escape_string($conn, $_POST['link']);

    $query = "INSERT INTO projetos (titulo, descricao, link, usuario_id) 
              VALUES ('$titulo', '$descricao', '$link', '$id_user')";

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
