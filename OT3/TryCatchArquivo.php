<?php
    try {
        $arquivo = @fopen("C:\Users\ian_mota\Documents\Comandos_git.txt", "r");

        if (!$arquivo) {
            throw new Exception("Falha ao abrir o arquivo.");   
        }
        echo "Arquivo aberto com sucesso.";
    }catch (Exception $e) {
        echo"Exceção capturada: ". $e->getMessage() ."";
    }
    fclose($arquivo);
?>