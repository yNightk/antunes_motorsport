<?php
session_start();
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $serviceId = $_POST['service'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO appointments (user_id, service_id, appointment_date) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $userId, $serviceId, $date);

    if ($stmt->execute()) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro ao agendar. Tente novamente.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Você precisa estar logado para agendar.";
}
?>
