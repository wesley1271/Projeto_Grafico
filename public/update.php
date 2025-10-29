<?php 

include "conexao.php";

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$link = $_POST['link'];

$sql_update = "UPDATE projeto SET titulo='$titulo', link='$link' WHERE id = $id";

if (mysqli_query($conn, $sql_update)) {
    print_r("Registro atualizado com sucesso!    <a href='index.php'>Voltar</a>
");
}else {
    echo "Erro ao atualizar um registro!". mysqli_error($conn);
}



?>