
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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin: 150px auto; /* Adicionando um margin-top de 100px para descer o card */
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 20px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Política de Privacidade</h2>
        <p>Nós nos preocupamos com a sua privacidade e queremos que você se sinta seguro ao usar nossos
            serviços. Esta política de privacidade descreve como coletamos, usamos e protegemos as
            informações que você nos fornece quando utiliza nossos serviços. Por favor, leia com atenção
            para entender nossas práticas de privacidade.</p>
        <p>Para mais detalhes, leia nossa política de privacidade completa <a href="#">aqui</a>.</p>
        <p><small>Reservamo-nos o direito de atualizar ou modificar esta política de privacidade a qualquer
                momento, por isso, recomendamos que você a revise periodicamente.</small></p>
        <!-- Adicionando um ID ao botão para identificá-lo -->
        <a href="#" id="accept-button" class="button">Aceitar</a>
    </div>

    <script>
        // Adiciona um evento de clique ao botão de aceitar
        document.getElementById("accept-button").addEventListener("click", function () {
            // Define o status de aceitação da política de privacidade no armazenamento local
            localStorage.setItem("privacyAccepted", true);
            // Redireciona o usuário para a página de confirmação
            window.location.href = "politica-aceita.php";
        });
    </script>
</body>
</html>
