<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=3307;dbname=meubanco", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $senha_criptografada = password_hash("Bruna67*", PASSWORD_DEFAULT);
    $email = "cprochnow24@gmail.com";

    $stmt = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
    $stmt->execute([$senha_criptografada, $email]);

    echo "✅ Senha atualizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}