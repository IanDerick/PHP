<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "mercado";
    $porta = 3307;

    $conn = new mysqli($host, $usuario, $senha, $banco, $porta);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $descricao = "ESCOVA DENTAL";

    $sql = "SELECT 
                VENDAS.IDVENDA,
                UPPER(PRODUTO.DESCRICAO) AS DESCRICAO,
                PRODUTO.PRECO,
                VENDAS_HAS_PRODUTO.QUANTIDADE,
                SUM(PRODUTO.PRECO * VENDAS_HAS_PRODUTO.QUANTIDADE) AS VALOR
            FROM 
                VENDAS_HAS_PRODUTO
            INNER JOIN PRODUTO ON PRODUTO.IDPRODUTO = VENDAS_HAS_PRODUTO.IDPRODUTO
            INNER JOIN VENDAS ON VENDAS.IDVENDA = VENDAS_HAS_PRODUTO.IDVENDA
            WHERE PRODUTO.DESCRICAO = ?
            GROUP BY 
                VENDAS.IDVENDA,
                PRODUTO.DESCRICAO,
                PRODUTO.PRECO,
                VENDAS_HAS_PRODUTO.QUANTIDADE";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $descricao);
        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            while ($linha = $resultado->fetch_assoc()) {
                echo "ID Venda: " . $linha["IDVENDA"] . "<br>";
                echo "Descrição: " . $linha["DESCRICAO"] . "<br>";
                echo "Preço: " . $linha["PRECO"] . "<br>";
                echo "Quantidade: " . $linha["QUANTIDADE"] . "<br>";
                echo "Valor Total: " . $linha["VALOR"] . "<br><hr>";
                echo "\n";
            }
        } else {
            echo "ERRO na execução: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "ERRO no prepare: " . $conn->error;
    }

    $conn->close();
?>
 