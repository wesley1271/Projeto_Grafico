<?php

include "conexao.php";

$erro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'] ?? null;
  $senha = $_POST['senha'] ?? null;

  if (empty($usuario) || empty($senha)) {
    $erro = "E-mail e senha são obrigatórios!";
  } else {
    $query = "SELECT * FROM usuarios WHERE email = '$usuario'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      $user = mysqli_fetch_assoc($result);

      if (password_verify($senha, $user['senha'])) {
        $_SESSION['usuario_id']   = $user['id'];  
        $_SESSION['usuario_nome'] = $user['nome'];
        header("Location: index.php?rota=home");
        exit;
      } else {
        $erro = "Senha e/ou usuário incorreto!";
      }
    } else {
      $erro = "Senha e/ou usuário incorreto!";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="styles/login.css">
  <title>Login - Showboard</title>
</head>

<body>
  <main class="login-container">
    <section class="login-box">
      <div class="login-title">
        <img src="img/logo.png" alt="logo showboard">
        <h3>Acesse sua conta!</h3>
      </div>
      <p>Entre para gerenciar seus projetos e acompanhar sua evolução.</p>

      <form action="index.php?rota=login" method="POST" class="login-form">
        <div class="form-group">
          <label for="usuario">E-mail</label>
          <input type="email" id="usuario" name="usuario" placeholder="Digite seu e-mail" required>
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>

        <button type="submit">Entrar</button>
      </form>

      <p class="register-text">
        Não tem uma conta? <a href="index.php?rota=cadastro">Cadastre-se</a>
      </p>

      <?php if (!empty($erro)) : ?>
        <p style="color: red"><?= $erro ?></p>
      <?php endif; ?>
    </section>
    <div class="toast" id="toast">Cadastro realizado com sucesso!</div>
  </main>
  <script src="scripts/login.js"></script>
</body>

</html>