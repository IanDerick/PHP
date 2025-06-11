<?php
    $alfabeto = ["a", "b", "c", "a", "d", "e", "a", "f", "g", "a"];


    $quantidadeDeA = count(array_filter($alfabeto, function ($letra) {
        return $letra === "a";
    }));

    echo"A letra 'A' aparece ". $quantidadeDeA ." vezes";
?>