<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'tcc24');



if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha
$email = $_POST['email'];

// Verifica se o usuário já existe
$sql = "SELECT id FROM usuarios WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Este nome de usuário já está em uso.";
} else {
    $sql_insert = "INSERT INTO usuarios (username, senha, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $sql_insert)) {
        header('Location: login.php');
    } else {
        echo "Erro ao cadastrar o usuário: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>