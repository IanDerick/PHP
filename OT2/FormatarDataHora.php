<?php 
    function formataDataHora($timestamp){
        return date("d/m/Y H:i:s", $timestamp);
    }

    echo "Informe um timestemp Unix: "; #1045413720
    $timestamp = trim(fgets((STDIN)));

    $dataFormatada = formataDataHora($timestamp);
    echo "\nData e hora formatada: "  .$dataFormatada;
?>