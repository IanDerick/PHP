<?php
    class Forma{
        public function calcularArea(){
            return 0;
        }
    }
    class Quadrado extends Forma{
        public $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }
        
        public function calcularArea(){
            return $this->lado * $this->lado;
        }
    }

    class Circulo extends Forma{
        public $raio;

        public function __construct($raio){
            $this->raio = $raio;
        }

        public function calcularArea(){
            return $this->raio * 3.14;
        }
    }

    $quadrado = new Quadrado(4);
    $circulo = new Circulo(3);

    echo "Área do quadrado: " .$quadrado->calcularArea();
    echo "\nRaio do circulo: ". $circulo->calcularArea();
?>