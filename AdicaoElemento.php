<?php 
   $arrayDeCores = array("Azul", "Roxo", "Preto");

    function adicionaElemento(&$arrayDeCores, $novasCoresParaAdicionar) {
        foreach ($novasCoresParaAdicionar as $cor) {
            array_push($arrayDeCores, $cor);
        }
    }

    echo "Digite a 1° nova cor: ";
    $cor1 = trim(fgets(STDIN));

    echo "Digite a 2° nova cor: ";
    $cor2 = trim(fgets(STDIN));

    echo "Digite a 3° nova cor: ";
    $cor3 = trim(fgets(STDIN));

    
    $novasCoresParaAdicionar = array($cor1, $cor2, $cor3);
    adicionaElemento($arrayDeCores, $novasCoresParaAdicionar);

    print_r($arrayDeCores);
?>