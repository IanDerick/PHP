<?php
    $arquivo = fopen("dados.csv","r");

    if ($arquivo) {
        $total = 0;
        $quantidade = 0;

        fgetcsv($arquivo);

       
        while (($linha = fgetcsv($arquivo)) !== false) {
            
            if (isset($linha[1]) && is_numeric($linha[1])) {
                $total += floatval($linha[1]);
                $quantidade++;
            }
        }

        fclose($arquivo);

        if ($quantidade > 0) {
            $media = $total / $quantidade;
            echo "Média de vendas: R$ " . number_format($media, 2, ',', '.');
        } else {
            echo "Nenhum valor válido encontrado no arquivo.";
        }
    } else {
        echo "Não foi possível abrir o arquivo dados.csv.";
    }  
?>