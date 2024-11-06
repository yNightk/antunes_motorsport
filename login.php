<?php include 'includes/header.php'; ?>
<?php include 'includes/config.php'; ?>


<main class="login">
    <h2>Login</h2>
    <form action="process_login.php" method="POST">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Entrar</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
