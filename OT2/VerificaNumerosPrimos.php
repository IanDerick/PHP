<?php
    function verificaPrimos($num) {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    echo "Digite um número: ";
    $num =  trim((fgets(STDIN)));

    if (verificaPrimos($num)) {
        echo "O número $num é primo!";
    } else {
        echo "o número $num não é primo";
    }
    
?>