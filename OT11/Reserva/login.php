<?php
    session_start();

    try {
        $pdo = new PDO("mysql:host=localhost;port=3307;dbname=meubanco", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOexception $e) {
        die("Erro ao se conectar ao banco: ". $e->getMessage());
    }
    $email = $_POST["email"];
    $password = $_POST["password"]?? '';

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt-> execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($password, $usuario['senha'])) {
        session_regenerate_id(true);
        $_SESSION['usuario'] = $usuario['nome'];
        header("Location: formularioReserva.php");
        exit();
    }else {
        $_SESSION['error'] = "Usuário ou senha inválido!";
        header("Location: index.php");
        exit();
    }
?>