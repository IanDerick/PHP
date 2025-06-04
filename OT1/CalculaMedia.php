<?php
    echo "Digite a 1° nota: ";
    $nota1 = trim(fgets(STDIN));
    echo "Digite a 2° nota: ";
    $nota2 = trim(fgets(STDIN));
    echo "Digite a 3° nota: ";
    $nota3 = trim(fgets(STDIN));

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Média: ". number_format($media, 2) . PHP_EOL;
    
    if ($media < 7) {
        echo "REPROVADO! ". PHP_EOL; 
    }else {
        echo "APROVADO!". PHP_EOL;
    }
    
?>