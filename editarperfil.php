<?php
session_start();

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados MySQL (substitua os valores pelos seus próprios)
    $servername = "localhost";
    $username = "seu_usuario";
    $password = "sua_senha";
    $dbname = "seu_banco_de_dados";

    // Cria conexão
    $conn = new mysqli('127.0.0.1', 'root', '', 'tcc24');

    // Verifica conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Verifica qual formulário foi enviado e executa a consulta SQL correspondente
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
        $email = $_SESSION["email"]; // Supondo que você tenha armazenado o email do usuário em uma sessão
        $sql = "UPDATE usuarios SET nome='$nome' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Nome atualizado com sucesso!');</script>";
        } else {
            echo "Erro ao atualizar o nome: " . $conn->error;
        }
    } elseif (isset($_POST["email"])) {
        $email = $_POST["email"];
        $senha = $_SESSION["senha"]; // Supondo que você tenha armazenado a senha do usuário em uma sessão
        // Execute a verificação de senha aqui, se necessário

        $sql = "UPDATE usuarios SET email='$email' WHERE senha='$senha'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Email atualizado com sucesso!');</script>";
        } else {
            echo "Erro ao atualizar o email: " . $conn->error;
        }
    } elseif (isset($_POST["senha"])) {
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da nova senha
        $email = $_SESSION["email"]; // Supondo que você tenha armazenado o email do usuário em uma sessão

        $sql = "UPDATE usuarios SET senha='$senha' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Senha atualizada com sucesso!');</script>";
        } else {
            echo "Erro ao atualizar a senha: " . $conn->error;
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');

        /* Estilo do título da página */
        body {
            text-align: center;
        }

        .titulo-pagina {
            text-align: center;
            font-size: 2rem;
            margin-top: 20px;
            display: inline; /* Alteração para exibição em linha */
            border-bottom: 2px solid #00ffff; /* Adicionando a borda inferior sublinhada */
            padding-bottom: 5px; /* Adicionando um espaço entre o texto e a borda */
        }

        .container {
            width: 80%;
            height: auto;
            margin: 50px auto; /* Alterado o valor superior para 50px e adicionado auto para os lados para centralizar horizontalmente */
            display: flex;
            flex-direction: column; /* Adicionado para alinhar os itens verticalmente */
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
            border: 1px solid black;
        }

        /* Estilo dos formulários */
        .container form {
            margin-bottom: 20px; /* Adiciona espaço entre os formulários */
        }

        .container form label {
            font-weight: bold;
        }

        .container form input[type="text"],
        .container form input[type="email"],
        .container form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Garante que o padding não afete a largura total */
        }

        .container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00ffff;
            color: #333333;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
        }

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
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1 class="titulo-pagina">Editar Perfil</h1>

    <div class="container">
        <h1 class="titulo-pagina">Dados do Perfil</h1>
        <br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nome">Novo Nome:</label><br>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="email">Novo Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="senha">Nova Senha:</label><br>
            <input type="password" id="senha" name="senha"><br><br>
            <input type="submit" value="Atualizar">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
        // Adicione seu JavaScript personalizado aqui
    </script>
</body>

</html>
