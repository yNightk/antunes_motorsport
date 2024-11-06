<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; ?>

<main class="register">
    <h2>Registrar-se</h2>
    <form action="process_register.php" method="POST">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Registrar</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
