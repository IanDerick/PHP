<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipoArquivo = $_FILES["arquivo"]["type"];
        $tamanhoArquivo = $_FILES["arquivo"]["size"];
        $tiposPermitidos = ["image/jpeg", "image/png"];
        $tamanhoMaximo = 5 * 1024 * 1024;

        if (in_array($tipoArquivo, $tiposPermitidos) && $tamanhoArquivo <= $tamanhoMaximo) {
           echo"Arquivo válido!";
        }else{
            echo "Arquivo inválido. Certifique-se de enviar uma imagem com no máximo 5MB";
        }
    }
?>