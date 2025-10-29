<?php
session_start();
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
                $_SESSION['usuario'] = $user['nome'];
                header("Location: dashboard.php");
                exit;
            } else {
                $erro = "Senha incorreta!";
            }
        } else {
            $erro = "Usuário não encontrado!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/login.css">
  <title>Login - Showboard</title>
</head>

<body>
  <main class="login-container">
    <section class="login-box">
      <div class="login-title">
        <h1>Showboard</h1>
        <h3>Acesse sua conta!</h3>
      </div>
      <p>Entre para gerenciar seus projetos e acompanhar sua evolução.</p>

      <form action="login.php" method="POST" class="login-form">
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
        Não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
      </p>

      <?php if (!empty($erro)) : ?>
        <p style="color: red"><?= $erro ?></p>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>
