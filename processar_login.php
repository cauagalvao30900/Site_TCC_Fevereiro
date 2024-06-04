<?php
session_start();

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'tcc24');




if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id, username, senha FROM usuarios WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['senha'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Senha incorreta";
        
    }
} else {
    echo "Usuário não encontrado";
}

mysqli_close($conn);


/* CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255),
    email VARCHAR(255),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); 
*/


?>



