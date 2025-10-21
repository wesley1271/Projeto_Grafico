<?php
defined('CONTROL') or die('Acesso negado!');
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/home.css">
  <title>Showboard | Homepage</title>
</head>

<body>

  <header>
    <h1>Showboard</h1>
    <nav>
      <a href="index.php?rota=dashboard"> Meus Projetos</a>
      <a href="index.php?rota=logout">Sair</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Mostre e divulgue seus melhores projetos!</h2>
    <p>Gestão de projetos, crie, personalize e compartilhe porfólios interativos com facilidade! </p>
    <a href="index.php?rota=dashboard" class="hero-btn">
      Criar projeto
    </a>
  </section>
<section class="benefits">
  <h2>Por que usar a Showboard?</h2>
  <div class="card-container">
    <div class="card-benefit">
      <article class="card-article">
        <div class="card-img">
          <img src="#" alt="" class="cardi-img">
        </div>
      </article>
    </div>
  </div>
</section>
  <section id="projetos-recentes" class="section">
    <h3>Projetos Recentes</h3>
    <div class="card">
      <h4>Landing Page Criativa</h4>
      <p>Projeto de site moderno com foco em UI/UX.</p>
    </div>
    <div class="card">
      <h4>Aplicativo Web</h4>
      <p>App responsivo para gestão de tarefas, feito em React.</p>
    </div>
  </section>

</body>

</html>