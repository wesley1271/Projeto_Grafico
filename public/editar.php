<?php
include "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $query = "SELECT * FROM projeto WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $projeto = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Projeto</title>
</head>
<body>
  <h2>Editar Projeto</h2>
  <form action="editar.php" method="POST">
    <input type="hidden" name="id" value="<?= $projeto['id'] ?>">

    <label>Título:</label>
    <input type="text" name="titulo" value="<?= htmlspecialchars($projeto['titulo']) ?>" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao" required><?= htmlspecialchars($projeto['descricao']) ?></textarea><br><br>

    <label>Link:</label>
    <input type="url" name="link" value="<?= htmlspecialchars($projeto['link']) ?>" required><br><br>

    <button type="submit" name="salvar">Salvar Alterações</button>
  </form>

  <a href="dashboard.php">Voltar</a>

  <?php
  if (isset($_POST['salvar'])) {
      $titulo = $_POST['titulo'];
      $descricao = $_POST['descricao'];
      $link = $_POST['link'];

      $update = "UPDATE projeto SET titulo='$titulo', descricao='$descricao', link='$link' WHERE id=$id";
      if (mysqli_query($conn, $update)) {
          header("Location: dashboard.php");
          exit;
      } else {
          echo "Erro ao atualizar: " . mysqli_error($conn);
      }
  }
  ?>
</body>
</html>




























































