<?php

    /*$arquivo = fopen("exemplo.txt","r");
    $conteudo = fread($arquivo, filesize("exemplo.txt"));
    fclose($arquivo);
    echo $conteudo;

    $arquivoEscrita = fopen("novo_arquivo.txt","w");
    fwrite($arquivoEscrita,"Conteudo a ser escrito.");
    fclose($arquivoEscrita);

    $arquivo = fopen("novo_arquivo.txt","r");
    $conteudo = fread($arquivo, filesize("novo_arquivo.txt"));
    fclose($arquivo);
    echo $conteudo;

    $arquivoCSV = fopen("dados.csv","r");
    if ($arquivoCSV) {
        echo"<table border = '1'>";
        while (($linha = fgetcsv($arquivoCSV)) !== false) {
            echo "<tr>";
             foreach ($linha as $valor) {
                echo "<td> $valor </td>";
            }                
            echo "</tr>";
        }
        echo"</table>";
        fclose($arquivoCSV);
    } else {
        echo "Falha ao abrir o arquivo CSV.";
    }
    */
?>