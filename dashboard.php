<?php
session_start();
include '../includes/config.php';

// Verifique se o usuário é administrador (para simplificação, vamos considerar que o ID 1 é do admin)
if ($_SESSION['user_id'] !== 1) {
    header("Location: ../login.php");
    exit();
}

include '../includes/header.php';
?>

<main class="admin-dashboard">
    <h2>Painel Administrativo</h2>
    <h3>Agendamentos</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Serviço</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php
        $result = $conn->query("SELECT appointments.id, users.username, services.service_name, appointments.appointment_date, appointments.status
                                FROM appointments
                                JOIN users ON appointments.user_id = users.id
                                JOIN services ON appointments.service_id = services.id");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['service_name']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['status']}</td>
                    <td><a href='update_status.php?id={$row['id']}'>Atualizar</a></td>
                  </tr>";
        }
        $result->close();
        ?>
    </table>
</main>

<?php include '../includes/footer.php'; ?>
