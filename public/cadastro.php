<?php
include "conexao.php";

$nome = $senha = $email = "";
$nomeErr = $senhaErr = $emailErr = $msgSucess = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nome'])) {
        $nomeErr = "O nome é obrigatório.";
    } elseif (strlen(trim($_POST['nome'])) < 3) {
        $nomeErr = "O nome deve ter ao menos 3 caracteres.";
    } else {
        $nome = trim($_POST['nome']);
    }

    if (empty($_POST['senha'])) {
        $senhaErr = "A senha é obrigatória.";
    } elseif (strlen(trim($_POST['senha'])) < 6) {
        $senhaErr = "A senha deve ter ao menos 6 caracteres.";
    } else {
        $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);
    }

    if (empty($_POST['email'])) {
        $emailErr = "O email é obrigatório.";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "E-mail inválido.";
    } else {
        $email = trim($_POST['email']);
    }

    if (empty($nomeErr) && empty($senhaErr) && empty($emailErr)) {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit;
        } else {
            $msgSucess = "Erro ao cadastrar: " . mysqli_error($conn);
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
    <link rel="stylesheet" href="styles/cadastro.css">
    <title>Cadastro - Showboard</title>
</head>

<body>
    <main class="cadaster-container">
        <section class="cadaster-box">
            <div class="cadaster-title">
                <h1>Showboard</h1>
                <h3>Crie uma conta!</h3>
            </div>

            <p>Uma nova experiência na interatividade profissional!</p>

            <?php if (!empty($msgSucess)) : ?>
                <p style="color: green"><?= $msgSucess ?></p>
            <?php endif; ?>

            <form action="cadastro.php" method="POST" class="cadaster-form">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" value="<?= htmlspecialchars($nome) ?>">
                    <span class="error-message"><?= $nomeErr ?></span>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" value="<?= htmlspecialchars($email) ?>">
                    <span class="error-message"><?= $emailErr ?></span>
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                    <span class="error-message"><?= $senhaErr ?></span>
                </div>

                <button type="submit">Registrar</button>

                <p class="back-text">
                    Já tem uma conta? <a href="login.php">Login</a>
                </p>
            </form>
        </section>
    </main>
</body>
</html>
