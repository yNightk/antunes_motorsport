<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";       // Usuário padrão do MySQL no XAMPP/MAMP/WAMP
$password = "";           // Senha padrão vazia no XAMPP/MAMP/WAMP
$dbname = "antunes_motorsport";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
