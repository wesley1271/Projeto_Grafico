<?php
defined('CONTROL') or die('Acesso negado!');
?>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Meus Projetos</title>
  <link rel="stylesheet" href="styles/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">



  <header>
    <h1>Showboard</h1>
    <nav>
      <a href="index.php?rota=home">Início</a>
      <a href="index.php?rota=dashboard"> Perfil</a>
      <a href="index.php?rota=logout">Sair</a>
    </nav>
  </header>

<body>
  <main>
    <section class="hero-banner">


      <div class="hero-content">
        <h1>Crie e personalize seus melhores projetos!</h1>
        <p>Transforme suas ideias em experiências incríveis — tudo em um só lugar.</p>
      </div>
    </section>

    <div class="dashboard-header">
      <h2> Adicionar projeto
        <button class="btn-add" id="btn-add">+</button>
      </h2>
    </div>
    <div id="projects" class="projects"></div>
    <div class="overlay" id="overlay">
      <form class="form-create form-group" id="form-create" method="post" action="index.php?rota=criar">


        <div class="form-title form-append">
          <label for="titulo">Título do Projeto</label>
          <input type="text" class="input-append" id="titulo" name="titulo" placeholder="Ex: Site Portfólio Pessoal">
        </div>


        <div class="form-description form-append">
          <label for="descricao">Descrição</label>
          <textarea id="descricao" class="input-append" name="descricao" placeholder="Descreva seu projeto..."></textarea>
        </div>

        <div class="form-link form-append">
          <label for="link">Link do Projeto</label>
          <input type="url" id="link" class="input-append" name="link" placeholder="https://meuprojeto.com">

        </div>

        <button type="submit">Salvar Projeto</button>
        <button type="button" id="btnFechar">Fechar</button>
      </form>
    </div>
  </main>


  <section id="projetos-recentes" class="section">
    <h3>Projetos Recentes</h3>
    <div class="card">
      <h4>Landing Page Criativa</h4>
      <p>Projeto de site moderno com foco em UI/UX.</p>
      <button class="btn-editar"><i class="fa-solid fa-pen-to-square"></i></button>
      <button class="btn-apagar"><i class="fa-solid fa-trash"></i></button>

    </div>
    <div class="card">
      <h4>Aplicativo Web</h4>
      <p>App responsivo para gestão de tarefas, feito em React.</p>
      <button class="btn-editar"><i class="fa-solid fa-pen-to-square"></i></button>
      <button class="btn-apagar"><i class="fa-solid fa-trash"></i></button>
    </div>
  </section>
  <script src="scripts/dashboard.js"></script>
</body>