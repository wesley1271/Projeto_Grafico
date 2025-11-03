<?php
defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM projetos WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        

        header("Location: index.php?rota=dashboard&success=2");
        exit;
    } else {
        echo "Erro ao deletar: " . mysqli_error($conn);
    }
}
?>
