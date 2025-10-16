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
  <title>Meu Portfólio</title>
</head>
<body>

  <header>
    <h1>Meu Portfólio</h1>
    <nav>
      <a href="index.php?rota=dashboard"> Meus Projetos</a>
      <a href="index.php?rota=logout">Sair</a>
    </nav>
  </header>

  <section class="hero">
    <h2>Faça seu futuro e mostre sua evolução</h2>
    <p>Gestão de projetos e portfólios na palma da mão</p>
    <button onclick="document.getElementById('projetos-recentes').scrollIntoView({ behavior: 'smooth' });">
  Ver Meus Projetos
</button>


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
