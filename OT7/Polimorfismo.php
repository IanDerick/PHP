<?php
    interface Veiculo{
        public function mover();
    }

    class Carro implements Veiculo{
        public function mover(){
            return "Carro está se movendo pelas estradas.\n";
        }
    }

    class Aviao implements Veiculo{
        public function mover(){
            return "Avião está se movendo pelo céu.\n";
        }
    }

    function testarMovimento(Veiculo $veiculo){
        echo $veiculo->mover();
    }

    $meuCarro = new Carro();
    $meuAviao = new Aviao();

    testarMovimento($meuCarro);
    testarMovimento($meuAviao);
?>