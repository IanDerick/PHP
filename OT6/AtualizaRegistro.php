<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "meubanco";
    
    // 1. Conecta sem banco (para poder criá-lo)
    $conn = new mysqli($host, $usuario, $senha, $banco, 3307);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }else {
        echo"Conexão estabelecida!";
    }
    
    $id = 1;
    $nova_idade = 22;

    $sql = "UPDATE pessoa SET idade = ? WHERE id = ?";

    $stmt = $conn -> prepare($sql);


    if ($stmt) {
        $stmt -> bind_param("ii", $nova_idade, $id);

        if ($stmt->execute()) {
            echo "Idade atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar: " . $stmt->error;
        }

        $stmt->close();
    }else {
        echo "Erro na preparação: " . $conn->error;
    }
    $conn->close();
?>