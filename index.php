<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    nav.nav {
      width: 100%;
      max-width: 100%;
      padding: 1.5rem 2rem;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: #363636;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
      color: white;
      /* Garante que a largura inclua padding e borda */
    }

    nav.nav .titulo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav.nav .menus {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
      margin: 0;
      /* Removendo a margem padrão */
      padding: 0;
      /* Removendo o preenchimento padrão */
    }

    nav.nav .menus li {
      list-style: none;
      /* Removendo os marcadores de lista */
    }

    nav.nav .menus li a {
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
      font-weight: bold;
    }

    a.github.nav {
      color: #333333;
      font-size: 1.2rem;
      font-weight: bold;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <nav class="nav">
    <span class="titulo">TechLearn</span>
    <ul class="menus">
      <li><a href="index.php" class="nav">Home</a></li>
      <li><a href="comunidade.php" class="nav">Comunidade</a></li>
      <li><a href="sobre.php" class="nav">Sobre Nós</a></li>
      <li><a href="editarperfil.php" class="nav">Editar Perfil</a></li>
      <li><a href="politica.php" class="nav">Política de Privacidade</a></li>
    </ul>
    <img src="assets/L.png" style="width: 2.5%;">
  </nav>
  <style>
    swiper-container {
      width: 200px;
      height: 200px;
      position: left;
      left: 50%;
      top: 50%;
      margin-left: -180px;
      margin-top: -200px;
    }

    swiper-slide {
      background-position: center;
      background-size: cover;
    }

    swiper-slide img {
      display: block;
      width: 125%;
      float: right;
    }

    .titulo{


  
    }
  </style>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <?php include_once 'cabeçalho.php'; ?>
    <!-- Adicionando o script do Dialogflow -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
  </head>

  <body>

    <main style="margin-top: 100px">
      <div class="principal" style="background-color: #F6F9FF;">
        <section class="hero" style="background-color: #F6F9FF;  margin-left: 100px;">
          <header class="hero-conteudo">
          <header class="linguagens-cabechalho">
        <span class="destaque preto">Seu novo app para estudo!</span>
        <h2 class="linguagens-titulo"><strong>Explore algumas de suas linguagens de progrmação favoritas</strong></h2>
      </header>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body"> 
              <img src="assets/logo_php.png" style="width: 25%;">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/logo_sql.png" style="width: 25%;">
            </div>
          </div>
        </div>
      </div>

      <br>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
      <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <img src="assets/logo_react.png" style="width: 25%;">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <img src="assets/logo_htmlcss.png" style="width: 25%;">
            </div>
          </div>
        </div>
          </header>
          <div class="hero-img">
            <swiper-container class="mySwiper" pagination="false" effect="cube" grab-cursor="true"
              cube-effect-shadow="false" cube-effect-slide-shadows="false" cube-effect-shadow-offset="20"
              cube-effect-shadow-scale="0.104">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <swiper-slide>
                <img src="assets/part1.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="assets/part2.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="assets/part3.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="assets/part4.jpg" />
              </swiper-slide>
              <swiper-slide>
                <img src="assets/part5.jpg" />
              </swiper-slide>
              <swiper-slide>
              <img src="assets/qrcode.png">
              </swiper-slide>
            </swiper-container>
          </div>
        </section>
      </div>
    </main>


    
      <?php include_once 'index2.php'; ?>
      <?php include_once 'footer.php'; ?>
    </section>
    </main>

    <!-- Adicionando o código do agente do Dialogflow -->
    <df-messenger chat-title="TechBot" agent-id="bb7d93d2-3b63-47e7-9be9-b79e123b6804"
      language-code="pt-br"></df-messenger>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        loop: true // Adicionando o looping infinito
      });
    </script>
  </body>