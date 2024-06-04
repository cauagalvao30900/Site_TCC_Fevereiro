<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Redireciona para a página de login se o usuário não estiver logado
    header('Location: login.php');
    exit();
}

// Conexão com o banco de dados
$conn = mysqli_connect('127.0.0.1', 'root', '', 'tcc24');

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$user_id = $_SESSION['user_id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha']; // Adicionado campo para a nova senha

// Verifica se a nova senha foi fornecida e atualiza o campo no SQL se necessário
if (!empty($senha)) {
    $senha = password_hash($senha, PASSWORD_DEFAULT); // Hash da nova senha
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$user_id";
} else {
    $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$user_id";
}

if (mysqli_query($conn, $sql)) {
    // Redireciona de volta para a tela "Comunidade" após salvar as alterações
    header('Location: comunidade.php');
    exit();
} else {
    echo "Erro ao atualizar perfil: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
