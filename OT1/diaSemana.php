<?php
    function mensagemDiaSemana($dia){
       $dia = strtolower(trim($dia));
       
        $diaTrabalho = ['segunda', 'terça', 'quarta', 'quinta', 'sexta'];
        $diaDescanso = ['sabado', 'domingo', 'feriado'];

        if (in_array($dia, $diaTrabalho)) {
            return "Hoje é dia de trabalho!.";
        }if (in_array($dia, $diaDescanso)) {
            return "Hoje é dia de descanso!";
        } else {
            return "Dia indefinido!";
        }
    }
    echo "Digite o dia da semana: ";
    $dia = trim(fgets(STDIN));
    echo mensagemDiaSemana($dia);
?>