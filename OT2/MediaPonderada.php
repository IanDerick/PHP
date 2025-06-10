<?php
    function calculaMedia($nota1, $nota2, $nota3){
        $peso1 = 2;
        $peso2 = 3;
        $peso3 = 5;

        $somaPeso = $peso1 + $peso2 + $peso3;
        
        $somaPonderada = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3);

        $media = $somaPonderada/ $somaPeso;
    
        return $media;
    }

    echo "Digite a 1° nota: ";
    $nota1 = trim((fgets(STDIN)));
    
    echo "Digite a 1° nota: ";
    $nota2 = trim((fgets(STDIN)));
    
    echo "Digite a 1° nota: ";
    $nota3 = trim((fgets(STDIN)));
    
    $resultado = calculaMedia($nota1, $nota2, $nota3);

    if ($resultado < 7) {
        echo "\nREPROVADO!";
    }else {
        echo "\nAPROVADO! Nota: $resultado";
    }
?>