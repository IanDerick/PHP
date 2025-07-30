<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeArquivo = $_FILES["arquivo"]["name"];
        $caminhoTemporario = $_FILES["arquivo"]["tmp_name"];
    
        move_uploaded_file($caminhoTemporario, "uploads/$nomeArquivo");
    
        echo"Arquivo enviado com sucesso";
    }
?>