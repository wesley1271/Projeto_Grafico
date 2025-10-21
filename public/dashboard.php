<?php
defined('CONTROL') or die('Acesso negado!');
?>
<!DOCTYPE html>
<html lang="en">

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
      <a href="#"> Perfil</a>
      <a href="#">Projetos</a>
      <a href="index.php?rota=logout">Sair</a>

    </nav>
  </header>

  <main class="hero-main">
    <h1>Crie e personalize seus melhores projetos!</h1>
    <p>Transforme suas ideias em experiências incríveis — tudo em um só lugar.</p>
    <button class="btn-add-project" id="btn-add">+ Adicionar Projeto</button>
  </main>

  <div id="projects" class="projects-grid">
  </div>


  <div class="overlay" id="overlay" role="dialog" aria-modal="true">
    <form class="form-create" id="form-create">
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