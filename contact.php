<?php include 'includes/header.php'; ?>

<main class="contact">
    <h2>Entre em Contato Conosco</h2>
    <p>Preencha o formulário abaixo e entraremos em contato o mais breve possível.</p>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        // Validação básica
        if (!empty($name) && !empty($email) && !empty($message)) {
            $to = "mecanicaeautopecas3111@gmail.com";  // E-mail da oficina
            $subject = "Nova mensagem de contato";
            $body = "Nome: $name\nE-mail: $email\nTelefone: $phone\n\nMensagem:\n$message";

            // Cabeçalhos do e-mail
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";

            if (mail($to, $subject, $body, $headers)) {
                echo "<p class='success'>Obrigado pela sua mensagem, $name! Entraremos em contato em breve.</p>";
            } else {
                echo "<p class='error'>Ocorreu um erro ao enviar a mensagem. Tente novamente.</p>";
            }
        } else {
            echo "<p class='error'>Por favor, preencha todos os campos obrigatórios.</p>";
        }
    }
    ?>

    <form action="contact.php" method="POST">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="phone">

        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
