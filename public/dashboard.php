<?php
include "conexao.php";
defined('CONTROL') or die('Acesso negado!');

// Buscar todos os projetos no banco
$query = "SELECT * FROM projetos ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if (!$result) {
  die("Erro na consulta: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Meus Projetos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="styles/dashboard.css">

</head>

<body>
  <header>
    <h1>Showboard</h1>
    <nav class="navbar">
      <div class="hamburg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">

              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Barra de navegação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <a href="index.php?rota=home"> Início</a>
            <a href="index.php?rota=perfil">Perfil</a>
            <a href="index.php?rota=logout">Sair</a>
          </div>
        </div>
      </div>
      <a class="home" href="index.php?rota=home"> Início</a>
      <a class="perfil" href="index.php?rota=perfil">Perfil</a>
      <a class="sair" href="index.php?rota=logout">Sair</a>
    </nav>
  </header>


  <main class="hero-main">
    <h1>Crie e personalize seus melhores projetos!</h1>
    <p>Transforme suas ideias em experiências incríveis — tudo em um só lugar.</p>
    <button class="btn-add-project" id="btn-add">+ Adicionar Projeto</button>
  </main>

  <!-- Listagem dos projetos -->
  <section id="projects" class="projects-grid">
    <?php while ($projeto = mysqli_fetch_assoc($result)) : ?>
      <div class="card">
        <h3><?= htmlspecialchars($projeto['titulo']) ?></h3>
        <p><?= htmlspecialchars($projeto['descricao']) ?></p>
        <a href="<?= htmlspecialchars($projeto['link']) ?>" target="_blank">Ver Projeto</a>

        <div class="btns-card">
          <input type="hidden" name="id" value="<?= $projeto['id'] ?>">
          <button class="btn-edit" type="button"
            data-id="<?= $projeto['id'] ?>"
            data-titulo="<?= htmlspecialchars($projeto['titulo']) ?>"
            data-desc="<?= htmlspecialchars($projeto['descricao']) ?>"
            data-link="<?= htmlspecialchars($projeto['link']) ?>">
            <i class="fa fa-edit"></i> Editar
          </button>
          <form action="index.php?rota=deletar" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja deletar este projeto?');">
            <input type="hidden" name="id" value="<?= $projeto['id'] ?>">
            <button type="submit"><i class="fa-solid fa-trash"></i> Deletar</button>

          </form>
        </div>
      </div>
    <?php endwhile; ?>
  </section>

  <!-- Modal para adicionar projeto -->
  <div class="overlay" id="overlay" role="dialog" aria-modal="true">
    <form action="index.php?rota=projeto" id="form-create" method="POST" class="form-create">
      <h1 class="title">Criar projeto</h1>
      <label for="titulo">Título do Projeto</label>
      <input type="text" id="titulo" name="titulo" placeholder="Ex: Site Portfólio Pessoal" required>
      <span id="erro-title" class="erro"></span>

      <label for="descricao">Descrição</label>
      <textarea id="descricao" name="descricao" placeholder="Descreva seu projeto..."></textarea>
      <span id="erro-desc" class="erro"></span>

      <label for="link">Link do Projeto</label>
      <input type="url" id="link" name="link" placeholder="https://meuprojeto.com" required>
      <span id="erro-link" class="erro"></span>

      <button type="submit">Salvar Projeto</button>
      <button type="button" id="btnFechar">Fechar</button>
    </form>
  </div>



  <!-- Modal para editar projeto -->
  <div class="overlay" id="overlay-edit" role="dialog" aria-modal="true">
    <form action="index.php?rota=editar" id="form-edit" method="POST" class="form-create">      
      <h1 class="title">Alterar Projeto</h1>
      
      <label for="titulo">Título do Projeto</label>
      <input type="text" id="titulo-edit" name="titulo" placeholder="Ex: Site Portfólio Pessoal" required>

      <label for="descricao-edit">Descrição</label>
      <textarea id="descricao-edit" name="descricao" placeholder="Descreva seu projeto..." required></textarea>

      <label for="link-edit">Link do Projeto</label>
      <input type="url" id="link-edit" name="link" placeholder="https://meuprojeto.com" required>

      <button type="submit">Salvar Alterações</button>
      <button type="button" id="btnFechar-edit">Fechar</button>
    </form>
  </div>

  <div class="toast" id="toast">Projeto criado com sucesso!</div>
  <div class="toastDEL" id="toastDEL">Projeto excluido com sucesso!</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/dashboard.js" defer></script>
</body>



</html>