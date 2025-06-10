<?php
    $usuarios = [
        ["nome" => "Ian", "idade" => 22, "email" => "ian@email.com"],
        ["nome" => "Bruna", "idade" => 20, "email" => "bruna@email.com"],
        ["nome" => "Caio", "idade" => 22, "email" => "caio@email.com"]
    ];

    foreach ($usuarios as $usuario) {
        foreach ($usuario as $valor) {
            echo" $valor |";
        }
        echo"\n";
    }


?>