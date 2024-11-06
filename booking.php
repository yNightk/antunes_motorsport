<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include 'includes/header.php';

include 'includes/config.php';
?>

<main class="booking">
    <h2>Agendar um Serviço</h2>
    <form action="process_booking.php" method="POST">
        <label for="service">Serviço:</label>
        <select name="service" id="service" required>
            <?php
            include 'includes/config.php';
            $result = $conn->query("SELECT id, service_name FROM services");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['service_name']}</option>";
            }
            $result->close();
            ?>
        </select>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Agendar</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
