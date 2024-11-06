<?php
include 'includes/config.php';
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso! <a href='login.php'>Faça login</a>";
    } else {
        echo "Erro ao cadastrar. Tente novamente.";
    }

    $stmt->close();
    $conn->close();
}
?>
