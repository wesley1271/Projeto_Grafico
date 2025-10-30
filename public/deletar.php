<?php
defined('CONTROL') or die('Acesso negado!');
include "conexao.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM projeto WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php?rota=dashboard");
        exit;
    } else {
        echo "Erro ao deletar: " . mysqli_error($conn);
    }
}
?>
