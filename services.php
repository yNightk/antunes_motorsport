<?php
include 'includes/config.php';
include 'includes/header.php';
?>

<main class="services">
    <h2>Nossos Serviços</h2>
    <div class="services-list">
        <?php
        // Consulta para buscar todos os serviços
        $sql = "SELECT service_name, description, price FROM services";
        $result = $conn->query($sql);

        // Verifica se há serviços no banco de dados
        if ($result->num_rows > 0) {
            // Exibe cada serviço
            while ($row = $result->fetch_assoc()) {
                echo "<div class='service-item'>";
                echo "<h3>" . $row['service_name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p class='price'>Preço: R$" . number_format($row['price'], 2, ',', '.') . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum serviço encontrado.</p>";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
