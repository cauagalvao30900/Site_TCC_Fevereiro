<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política Aceita</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Se houver um arquivo de estilo CSS -->
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

        .container {
            margin-top: 100px; /* Ajuste conforme necessário para evitar sobreposição com a navbar */
            text-align: center;
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

<div class="container">
    <h1>Política Aceita</h1>
    <p>Obrigado por aceitar nossa política de privacidade. Agora você pode aproveitar todos os recursos do nosso aplicativo!</p>
    <!-- Adicione aqui qualquer conteúdo adicional que desejar -->
</div>
</body>
</html>
