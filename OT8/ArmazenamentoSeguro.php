<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nomeArquivo = $_FILES["arquivo"]["name"];
        $nomeUnico = uniqid(). "_" . $nomeArquivo;

        move_uploaded_file($_FILES["arquivo"]["tmp_name"], "uploads/$nomeUnico");
    
        echo "Arquivo salvo com sucesso!";
        echo "aaaaaaaaaaa";
    }
?>
