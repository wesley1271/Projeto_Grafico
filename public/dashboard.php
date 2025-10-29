<?php
include "conexao.php";

// Buscar todos os projetos no banco
$query = "SELECT * FROM projeto ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Meus Projetos</title>
  <link rel="stylesheet" href="styles/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Showboard</h1>
    <nav>
      <a href="index.php?rota=home">Início</a>
      <a href="#">Perfil</a>
      <a href="#">Projetos</a>
      <a href="index.php?rota=logout">Sair</a>
    </nav>
  </header>

  <main class="hero-main">
    <h1>Crie e personalize seus melhores projetos!</h1>
    <p>Transforme suas ideias em experiências incríveis — tudo em um só lugar.</p>
    <button class="btn-add-project" id="btn-add">+ Adicionar Projeto</button>
  </main>

  <!-- Listagem dos projetos -->
  <section class="projects-grid">
    <?php while ($projeto = mysqli_fetch_assoc($result)) : ?>
      <div class="card">
        <h3><?= htmlspecialchars($projeto['titulo']) ?></h3>
        <p><?= htmlspecialchars($projeto['descricao']) ?></p>
        <a href="<?= htmlspecialchars($projeto['link']) ?>" target="_blank">Ver Projeto</a>

        <div class="btns-card">
          <form action="editar.php" method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?= $projeto['id'] ?>">
            <button type="submit"><i class="fa fa-edit"></i> Editar</button>
          </form>

          <form action="deletar.php" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja deletar este projeto?');">
            <input type="hidden" name="id" value="<?= $projeto['id'] ?>">
            <button type="submit"><i class="fa fa-trash"></i> Deletar</button>
          </form>
        </div>
      </div>
    <?php endwhile; ?>
  </section>

  <!-- Modal para adicionar projeto -->
  <div class="overlay" id="overlay" role="dialog" aria-modal="true">
    <form action="created.php" method="POST" class="form-create">
      <label for="titulo">Título do Projeto</label>
      <input type="text" id="titulo" name="titulo" placeholder="Ex: Site Portfólio Pessoal" required>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" placeholder="Descreva seu projeto..." required></textarea>

      <label for="link">Link do Projeto</label>
      <input type="url" id="link" name="link" placeholder="https://meuprojeto.com" required>

      <button type="submit">Salvar Projeto</button>
      <button type="button" id="btnFechar">Fechar</button>
    </form>
  </div>

  <div class="toast" id="toast">Projeto criado com sucesso!</div>
  <script src="scripts/dashboard.js" defer></script>
</body>

</html>
