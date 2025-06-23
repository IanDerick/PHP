<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $baco = "meubanco";
    $porta = "3307";

    $conn = new mysqli($host, $usuario, $senha, $baco, $porta);

    if ($conn->connect_error) {
        die("Erro de conexão". $conn->connect_error);
    }else {
        echo "Conexão estabelecida\n";
    }
    $idade_deletar = 21;

    $sql = "DELETE FROM pessoa where idade = ?";

    $stmt = $conn -> prepare($sql);

    if ($stmt) {
        $stmt -> bind_param("i", $idade_deletar);
        if ($stmt -> execute()) {
            echo "Registros excluidos.";
        }else {
            echo "Erro: " .$stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro: " .$conn->error;
    }
    $conn->close();

    //http://localhost:8080/php/OT6/ExcluiRegistro.php
?>