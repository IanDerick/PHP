<?php
    try {
        $pdo = new PDO("mysql:host=localhost;port=3307;dbname=meubanco", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao se conectar ao banco: ". $e->getMessage();
        exit();
    }
    $ID = 10;

    $stmt = $pdo->prepare("SELECT * FROM USUARIOS WHERE ID = ?");
    $stmt->execute([$ID]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . "\n";
        echo "Nome: " . $row['nome'] . "\n";
        echo "E-mail: ". $row['email'] . "\n";
    }
?>