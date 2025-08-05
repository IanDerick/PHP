<?php

    $php_minimo = "8.0.0";

    $versao_atual = phpversion();

    if (version_compare($versao_atual, $php_minimo,"<")) {
        echo "Aviso: Sua versão do PHP está desatualizada. Por favor, atualize para a versão $versao_minima ou superior para garantir a segurança e estabilidade do sistema.";
    } else {
        echo "Versão atualizada<br> Versão: $versao_atual";
    }
    
?>