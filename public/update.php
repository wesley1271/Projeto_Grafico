<?php
defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

// Captura os dados do formulário
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conn, $_POST['titulo']) : '';
$descricao = isset($_POST['descricao']) ? mysqli_real_escape_string($conn, $_POST['descricao']) : '';
$link = isset($_POST['link']) ? mysqli_real_escape_string($conn, $_POST['link']) : '';

if ($id > 0 && $titulo && $link) {
    // Query de update
    $sql_update = "UPDATE projetos SET titulo='$titulo', descricao='$descricao', link='$link' WHERE id=$id";

    if (mysqli_query($conn, $sql_update)) {
        // Redireciona de volta para a dashboard com flag de sucesso
        header("Location: index.php?rota=dashboard&status=editado");
        exit;
    } else {
        die("Erro ao atualizar o projeto: " . mysqli_error($conn));
    }
} else {
    die("Dados inválidos para atualização.");
}
?>
