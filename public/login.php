<?php 

defined('CONTROL') or die('Acesso negado');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if (empty($usuario) || empty($senha)) {
        $erro = "Usuário e senha são obrigatórios!";
    }

    if (empty($erro)) {

        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';
        foreach ($usuarios as $user) {
            if ($user['usuario'] == $usuario && password_verify($senha, $user['senha'])) {

                  $_SESSION['usuario'] = $usuario;

                  header('location: index.php?rota=home');
            }
        }
        $erro = "Usuário e/ou senha inválidos";
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
  

  <title>Login - Meu Portfólio</title>
</head>
<body>

  <main class="login-container">
    <section class="login-box">
      <h2>Acesse sua conta</h2>
      <p>Entre para gerenciar seus projetos e acompanhar sua evolução.</p>

      <form action="index.php?rota=login" method="POST" class="login-form">
        <div class="form-group">
          <label for="usuario">E-mail</label>
          <input type="email" id="usuario" name="usuario" placeholder="Digite seu e-mail">
        </div>

        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
        </div>

        <button type="submit">Entrar</button>
      </form>

      <p class="register-text">
        Não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
      </p>

      <?php
    if (!empty($erro)) : ?>
        <p style="color: red"><?= $erro ?> </p>
    <?php endif; ?>
    </section>
  </main>


</body>
</html>
