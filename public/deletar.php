<?php
include "conexao.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM projeto WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Erro ao deletar: " . mysqli_error($conn);
    }
}
?>
