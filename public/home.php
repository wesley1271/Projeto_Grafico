<?php
defined('CONTROL') or die('Acesso negado!');
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/fonts.css">
  <link rel="stylesheet" href="styles/home.css">
  <title>Showboard | Homepage</title>
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
            <a href="index.php?rota=dashboard"> Meus Projetos</a>
            <a href="index.php?rota=perfil">Perfil</a>
            <a href="index.php?rota=logout">Sair</a>
          </div>
        </div>
      </div>
      <a href="index.php?rota=dashboard" class="projetos" > Meus Projetos</a>
      <a href="index.php?rota=perfil" class="perfil">Perfil</a>
      <a class="sair" href="index.php?rota=logout">Sair</a>
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
            <p>Utilizamos JavaScript, PHP, HTML, Bootstrap, CSS e Design Gráfico para desenvolver projetos modernos, e visualmente atraentes.</p>
          </div>
        </div>


        <div class="carousel-item" data-bs-interval="1000">
          <img src="img/interacao.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Interação com o usuário</h2>
            <p>
              A Showboard oferece interações personalizadas para que o usuário se sinta confortável utilizando a ferramenta</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/acessibilidade.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>Acessibilidade</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus dolores vel enim exercitationem impedit. Modi quibusdam, in maxime dolores facilis impedit, voluptatibus voluptate velit porro molestias nam perferendis tenetur recusandae. lorem</p>
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
  <footer class="footer-hero">
    <div class="footer-container">
      <div class="footer-header">
        <h3 class="footer-title">Showboard</h3>

      </div>
      <div class="contato">
          <h3 class="contato">
        Nosso contato
      </h3>
      
      </div>
      <div class="coluna"></div>
      <div class="footer-content">

    
        <h3>Equipe</h3>

        <div class="member">
          <span>Wesley Carvalho</span>
          <div class="social">
            <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>


    
        <div class="member">
       
          <span>Henry Golçalves</span>
          <div class="social">
            <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>

        <div class="member">
          <span>Israel dos Santos </span>
          <div class="social">
            <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>