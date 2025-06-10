<?php
    $numeros = [1, 2, 3, 4, 5];

    for ($i=0; $i < count($numeros); $i++) { 
        $numero = $numeros[ $i ];
        $quadrado  = $numero * $numero;
        echo "O quadrado de $numero é $quadrado\n";
    }
?>