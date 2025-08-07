<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Criar Usuário</title>
</head>
<body>
    <h2>Criar Usuário</h2>
    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<p style='color:green'>" . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }
    ?>
    <form method="post" action="processa_cadastro.php">
        <label>Nome:</label><br />
        <input type="text" name="nome" required /><br /><br />
        <label>E-mail:</label><br />
        <input type="email" name="email" required /><br /><br />
        <label>Senha:</label><br />
        <input type="password" name="password" required /><br /><br />
        <label>Confirme a senha:</label><br />
        <input type="password" name="password_confirm" required /><br /><br />
        <input type="submit" value="Cadastrar"/>
    </form>
    <form action="index.php" method="POST">
        <button type="submit">Voltar ao Login</button>
    </form>
</body>
</html>