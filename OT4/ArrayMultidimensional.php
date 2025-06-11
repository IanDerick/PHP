<?php
    $tabela = [];

    for ($i=0; $i < 5; $i++) { 
        for ($j= 0; $j < 5; $j++) {
            $tabela[$i][$j] = $i * $j;
        }
    }

    echo "Resultado da multiplicação 3 x 4 é: " .$tabela[3][4];
?>