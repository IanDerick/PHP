<?php

echo "Informe um número: ";
$num = trim(fgets(STDIN));

    if ($num < 0) {
        echo "O número : $num é NEGATIVO.";
    }elseif ($num > 0) {
        echo "O número: $num é POSITIVO.";
    }else{
        echo "O número é 0.";
    }
?>