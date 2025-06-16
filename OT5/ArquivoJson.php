<?php
    $produto = [
        "nome"=> "Mouse GPRO",
        "preco"=> 899.99,
        "estoque"=> "25",
        "categoria"=> "periféricos",
    ];

    $json = json_encode($produto, JSON_PRETTY_PRINT);
    file_put_contents("produto.json", $json);

    echo "Arquivo produto.json criado com sucesso!";