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
        <span class="titulo">Comunidade</span>
        <ul class="menus">
            <li><a href="index.php" class="nav">Home</a></li>
            <li><a href="comunidade.php" class="nav">Comunidade</a></li>
            <li><a href="sobre.php" class="nav">Sobre Nós</a></li>
            <li><a href="politica.php" class="nav">Política de Privacidade</a></li>
            <li><a href="logout.php" class="nav">Logout</a></li>
        </ul>
        <img src="assets/L.png" style="width: 2.5%;">
    </nav>
    <?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'tcc24');

    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    function exibirMensagens($conn)
    {
        $sql = "SELECT u.username, m.mensagem, m.timestamp FROM mensagens m 
            INNER JOIN usuarios u ON m.user_id = u.id ORDER BY m.timestamp DESC";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Erro na consulta: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='post'>";
                echo "<h2>" . $row['username'] . "</h2>";
                echo "<p>" . $row['mensagem'] . "</p>";
                echo "<p><small>Enviado em: " . $row['timestamp'] . "</small></p>";
                echo "</div>";
            }
        } else {
            echo "<p>Ainda não há mensagens no chat.</p>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["mensagem"])) {
            $user_id = $_SESSION['user_id'];
            $mensagem = $_POST["mensagem"];

            $sql = "INSERT INTO mensagens (user_id, mensagem) VALUES ('$user_id', '$mensagem')";
            if (mysqli_query($conn, $sql)) {
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "Erro ao enviar mensagem: " . mysqli_error($conn);
            }
        } else {
            echo "Por favor, insira uma mensagem.";
        }
    }

    $user_id = $_SESSION['user_id'];
    $sql_username = "SELECT username FROM usuarios WHERE id = $user_id";
    $result_username = mysqli_query($conn, $sql_username);
    if (mysqli_num_rows($result_username) > 0) {
        $row_username = mysqli_fetch_assoc($result_username);
        $user_username = $row_username['username'];
    } else {
        $user_username = "Usuário";
    }
    ?>



    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fórum de Programação</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
            }

            header {
                background-color: #333;
                color: #fff;
                padding: 20px;
                text-align: center;
            }

            nav {
                background-color: #f4f4f4;
                padding: 10px;
                text-align: center;
            }

            nav a {
                color: #333;
                text-decoration: none;
                padding: 10px 20px;
            }

            .container {
                width: 80%;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .post {
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .post h2 {
                margin-top: 0;
                margin-bottom: 5px;
            }

            .post p {
                margin: 0;
                color: #555;
            }

            form {
                margin-bottom: 20px;
            }

            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                resize: none;
            }

            input[type="submit"] {
                background-color: #333;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
            }

            input[type="submit"]:hover {
                background-color: #555;
            }
        </style>
    </head>

    <body>


        <header>
            <h1></h1>
            <h1>aa</h1>
            <h1>Bem Vindo!</h1>
            <p> <?php echo $user_username; ?>!</p>
        </header>

        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <textarea name="mensagem" rows="4" placeholder="Digite sua mensagem aqui..."></textarea><br>
                <input type="submit" value="Enviar">
            </form>

            <?php exibirMensagens($conn); ?>
        </div>
    </body>

    </html>

</body>

</html>