<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO("mysql:host=localhost;port=3307;dbname=meubanco", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro ao se conectar ao banco: " . $e->getMessage());
    }

    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['password'] ?? '';
    $senha_confirm = $_POST['password_confirm'] ?? '';

    if (!$nome || !$email || !$senha || !$senha_confirm) {
        $_SESSION['error'] = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "E-mail inválido.";
    } elseif ($senha !== $senha_confirm) {
        $_SESSION['error'] = "As senhas não conferem.";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->fetch()) {
            $_SESSION['error'] = "E-mail já cadastrado.";
        } else {
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->execute([$nome, $email, $senha_hash]);

            $_SESSION['success'] = "Usuário criado com sucesso! Faça login.";
            header("Location: dashboard.php");
            exit();
        }
    }
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}