<?php

    $contador =0;
    while (true) {
        $entrada = readline("Digite a palavra PHP ou qualquer outra coisa pra sair: ");

        if (strcasecmp($entrada,"PHP") == 0) {
            $contador++;
        }else {
            break;
        }
    }
    echo"Você digitou PHP $contador vezes";
?>