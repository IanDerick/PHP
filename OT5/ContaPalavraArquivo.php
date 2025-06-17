<?php
    $arquivo = "paragrafo.txt";
    
    if ($arquivo) {
        $conteudo = file_get_contents($arquivo);

        $contador = str_word_count($conteudo);

        echo "O arquivo '$arquivo' contém $contador palavras(s).";
    } else {
        echo"Arquivo não encontrado!";
    }
?>