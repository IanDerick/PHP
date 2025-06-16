<?php
    $arquivo = "dados.csv";

    $novaLinha = ["Teclado Wooting 60he", 999.99];

    $handle = fopen($arquivo,"a");

    if ($handle) {
        fputcsv($handle, $novaLinha);
        fclose($handle);
        echo"Nova Linha adicionada com sucesso ao arquivo $arquivo!";
    } else {
        echo "Erro ao abrir o arquivo";
    }
?>