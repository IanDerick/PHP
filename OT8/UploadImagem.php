<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeArquivo = $_FILES["arquivo"]["name"];
        $tiposPermitidos = ["image/jpeg", "image/png"];

       if (in_array($nomeArquivo, $tiposPermitidos)) {
        echo "Arquivo salvo com sucesso!";
       }else{
        echo "Arquivo com tipo não permitido. Salvar em JPEG ou PNG";
       }
    }
?>