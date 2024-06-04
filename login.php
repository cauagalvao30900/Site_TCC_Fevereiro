<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Estilo CSS atualizado */
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
            /* Garante que a largura inclua padding e borda */
        }

        nav.nav .titulo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
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
            color: white;
        }

        nav.nav .menus li a {
            text-decoration: none;
            color: white ;
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
            <li><a href="politica.php" class="nav">Política de Privacidade</a></li>
        </ul>
        <img src="assets/L.png" style="width: 2.5%;">
    </nav>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de Login</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Inter', sans-serif;
            }

            body {
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #F6F9FF;
            }

            .container {
                width: 80%;
                height: 65vh;
                margin: 0%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #363636;
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
            }

            .form {
                width: 50%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #363636;
                padding: 3rem;
                color: white;
            }

            .form-header {
                margin-bottom: 3rem;
                display: flex;
                justify-content: space-between;

            }

            .login-button {
                display: flex;
                align-items: center;
                border: 1px;
            }

            .login-button button {
                border: 1px solid #00ffff;
                /* Adicionando borda */
                background-color: #ffff;
                padding: 0.4rem 1rem;
                border-radius: 10px;
                cursor: pointer;
            }

            .login-button button:hover {
                background-color: #00ffff;
                /* Mudando a cor de fundo ao passar o mouse */
            }

            .login-button button a {
                text-decoration: none;
                font-weight: 500;
                color: #000;
            }

            .form-header h1::after {
                content: '';
                display: block;
                width: 5rem;
                height: 0.3rem;
                background-color: #00ffff;
                margin: 0 auto;
                position: absolute;
                border-radius: 10px;
            }

            .input-group {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 1rem 0;
                
            }

            .input-box {
                display: flex;
                flex-direction: column;
                margin-bottom: 1.1rem;
                
            }

            .input-box input {
                margin: 0.6rem 0;
                padding: 0.8rem 1.2rem;
                border: none;
                border-radius: 10px;
                box-shadow: 1px 1px 6px #0000001c;
                font-size: 0.8rem;
            }

            .input-box input:hover {
                background-color: #eeeeee75;
            }

            .input-box input:focus-visible {
                outline: 1px solid #ffff;
            }

            .input-box label {
                font-size: 0.75rem;
                font-weight: 600;
                color: white;
            }

            .input-box input::placeholder {
                color: #000000be;
            }

            .continue-button button {
                width: 100%;
                margin-top: 2.5rem;
                border: 1px;
                background-color: #00ffff;
                padding: 0.4rem 1rem;
                border-radius: 10px;
                cursor: pointer;
                border: 1px #000000;
            }

            .continue-button button:hover {
                background-color: #fff;
            }

            .continue-button button a {
                text-decoration: none;
                font-size: 0.93rem;
                font-weight: 500;
                color: #000;
            }
            .cortexto{color: #00ffff;}


            @media screen and (max-width: 1330px) {
                .container {
                    width: 50%;
                }

                .form {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <form action="processar_login.php" method="POST">
            <div class="container" style="border-radius: 30px;">
                <div class="form">
                    <h5 class="cortexto">Bem-Vindo de Volta!</h5>
                    <div class="form-header">
                        <div class="title">
                            <h1>Entrar</h1>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="username">Usuário</label>
                            <input type="text" id="username" name="username" placeholder="Digite seu Usuário" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input id="password" type="password" name="password" placeholder="Digite sua senha"
                                required>
                        </div>
                    </div>

                    <div class="continue-button">
                        <button type="submit"><b>Entrar</b></button>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>

</body>

</html>