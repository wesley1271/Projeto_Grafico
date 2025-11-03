<?php
defined('CONTROL') or die('Acesso negado!');
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

  <section id="project-about" class="container my-5">
    <h1>Sobre nosso projeto</h1>


    <div id="carousel-about" class="carousel carousel-dark slide" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel-about" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel-about" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel-about" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">


        <div class="carousel-item active" data-bs-interval="1000">
          <img src="img/portfolio.jpg" class="d-block w-100" alt="codigo e ferramentas">
          <div class="carousel-caption d-none d-md-block">
            <h2>Linguagens e ferramentas</h2>
            <p>Utilizamos JavaScript,  PHP, HTML, Bootstrap, CSS e Design Gráfico para desenvolver projetos modernos, e visualmente atraentes.</p>
          </div>
        </div>


        <div class="carousel-item" data-bs-interval="1000">
          <img src="img/interacao.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>interação com o usuário</h2>
            <p>
              A Showboard oferece interações personalizadas para que o usuário se sinta confortável utilizando a ferramenta</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/acessibilidade.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Acessibilidade</h2>
            <p>A Showboard oferece interações personalizadas para que o usuário se sinta confortável utilizando a ferramenta</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-about" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel-about" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>