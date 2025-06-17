<?php
    $arquivoOriginal = "sensivel.txt";
    $arquivoCriptografado = "sensivel_criptografado.txt";

    if (file_exists($arquivoOriginal)) {
        $conteudo = file_get_contents($arquivoOriginal);

        $conteudoCriptografado = base64_decode($conteudo);

        file_put_contents($arquivoCriptografado, $conteudoCriptografado);
        
        echo"Arquivo criptogradado salvo como $arquivoCriptografado.";
    } else {
        echo "Arquivo '$arquivoCriptografado' não encontrado!";
    }
?>