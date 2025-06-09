<?php
    function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }

    echo "Informe o 1° número: ";
    $num1 = trim(fgets(STDIN));
    echo "Informe o 2° número: ";
    $num2 = trim(fgets(STDIN));

    $resultado = multiplicacao($num1, $num2);

    echo "\nO resultado da multiplicação de $num1 * $num2 é: $resultado.\n"
?>