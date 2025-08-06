<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($_SESSION["error"])) {
        echo "<p style = 'color:red'>". $_SESSION["error"] ."</p>";
        unset($_SESSION["error"]);
    }
    ?>
    <form method="post" action="login.php">
        <label>Usuário</label>
        <input type="email" name="email" require><br><br>
        <label>Senha</label>
        <input type="password" name="password" require><br><br>
        <input type="submit" value="Entrar">
        <a href="cria_usuario.php">Criar Usuário</a>
    </form>
    
</body>
</html>