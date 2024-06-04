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
            color: white;
        }

        nav.nav .menus li {
            list-style: none;
            color: white;
            /* Removendo os marcadores de lista */
        }

        nav.nav .menus li a {
            text-decoration: none;
            color: #333333;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
        }

        a.github.nav {
            color: #333333;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
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
    <?php
    session_start();

    // Verifica se o usuário já está logado
    if (isset($_SESSION['user_id'])) {
        header('Location: dashboard.php');
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
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
                margin: auto;
                /* Adicionando esta linha */
                display: flex;
                justify-content: center;
                /* Adicionando esta linha */
                align-items: center;
                /* Adicionando esta linha */
                background-color: #ffffff;
                /* Adicionando esta linha para definir o fundo como branco */
                box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
                /* Adicionando esta linha para a sombra */
                border: 1px solid black;
            }



            .form-image {
                width: 50%;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                background-color: #fff;
                padding: 1rem;
            }

            .form-image img {
                max-width: 100%;
                height: auto;
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
                border-radius: 20px 20px 20px 20px;
                margin-right: 30px;
                height: 90%;
                border: 1px solid black;
            }

            .form-header {
                margin-bottom: 3rem;
                display: flex;
                justify-content: space-between;
            }

            .login-button {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }

            .login-button button {
                border: none;
                background-color: #00ffff;
                padding: 0.4rem 1rem;
                border-radius: 10px;
                cursor: pointer;
                color: white;
            }

            .login-button button:hover {
                background-color: #ffff;
                color: white;
            }

            .login-button button a {
                text-decoration: none;
                font-weight: 500;
                color: black;
                margin-left: auto;
                /* Move o botão para a direita */
                padding: 5px 10px;
                /* Adiciona algum espaço interno para a borda */
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

            .input-box label,
            .gender-title h6 {
                font-size: 0.75rem;
                font-weight: 600;
                color: white;
            }

            .input-box input::placeholder {
                color: #000000be;
            }

            .gender-group {
                display: flex;
                justify-content: space-between;
                margin-top: 0.62rem;
                padding: 0 .5rem;
            }

            .gender-input {
                display: flex;
                align-items: center;
            }

            .gender-input input {
                margin-right: 0.35rem;
            }

            .gender-input label {
                font-size: 0.81rem;
                font-weight: 600;
                color: #000;
            }

            .continue-button button {
                text-decoration: none;
                font-weight: 500;
                color: black;
                margin-left: auto;
                /* Move o botão para a direita */
                border: 1px solid #000;
                /* Adiciona uma borda */
                padding: 5px 10px;
                /* Adiciona algum espaço interno para a borda */
                background-color: #00ffff;
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
                .form-image {
                    display: none;
                }

                .container {
                    width: 50%;
                }

                .form {
                    width: 100%;
                }
            }

            @media screen and (max-width: 1064px) {
                .container {
                    width: 90%;
                    height: auto;
                }

                .input-group {
                    flex-direction: column;
                    z-index: 5;
                    padding-right: 5rem;
                    max-height: 10rem;
                    overflow-y: scroll;
                    flex-wrap: nowrap;
                }

                .gender-inputs {
                    margin-top: 2rem;
                }

                .gender-group {
                    flex-direction: column;
                }

                .gender-title h6 {
                    margin: 0;
                }

                .gender-input {
                    margin-top: 0.5rem;
                }
            }
        </style>
    </head>

    <body>
        <form action="processar_formulario.php" method="POST">
            <div class="container" style="border-radius: 30px;">
                <div class="form-image">
                    <img src="assets/L.png" alt="L">
                </div>
                <div class="form">
                    <div class="form-header">
                        <div class="title">
                            <h2 class="cortexto">Seja muito bem vindo(a)!!</h2>
                            <h1>Cadastre-se</h1>
                        </div>
                        <div class="login-button">
                            <button><a href="login.php"><b>Entrar</b></a></button>
                        </div>
                    </div>


                    <div class="input-group">
                        <div class="input-box">
                            <label for="username">Usuário</label>
                            <input id="username" type="text" name="username" placeholder="Seu usuário" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input id="password" type="text" name="password" placeholder="Digite sua Senha" required>
                        </div>
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Confirmar Senha</label>
                            <input id="password" type="text" name="password" placeholder="Confirme sua Senha" required>
                        </div>






                    </div>



                    <div class="continue-button">
                        <button type="submit"><b>Continuar</b></button>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>

</body>