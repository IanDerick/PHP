<?php
    function invertePalavra($frase){
        $palavra = explode(' ', $frase);

        $palavraInvertida = array_reverse($palavra);

        $fraseInvertida = implode(' ', $palavraInvertida);

        return $fraseInvertida;
    }

    echo "Escreva um texto: "; 
    $frase = trim(fgets((STDIN)));
    
    $resultado = invertePalavra($frase);
    echo "Texto invertido: $resultado";
?>