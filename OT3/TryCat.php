<?php
    function dividir($dividendo, $divisor) {
        try {
            if ($divisor == 0) {
                throw new Exception("Divisão por zero não é permitida.");
            }
            $resultado = $dividendo / $divisor;
            echo "Resultado: ". $resultado;
        } catch (Exception $e) {
            echo "Execução capturada: ". $e->getMessage() ;
        }
    }

    echo "Informe o dividendo: ";
    $dividendo = trim(fgets(STDIN));

    echo "Informe o divisor: ";
    $divisor = trim(fgets(STDIN));

    dividir($dividendo, $divisor);
?>
