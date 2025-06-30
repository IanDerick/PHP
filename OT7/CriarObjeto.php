<?php
    class detalheProduto{
        public $nomeProduto;
        public $precoProduto;

        public function descricaoProduto(){
            return "Nome: ".$this->nomeProduto. "\nPreco: ".$this-> precoProduto;
        }
    }
    $produto = new detalheProduto();
    $produto->nomeProduto = "Teclado";
    $produto->precoProduto = 199.90;

    echo $produto->descricaoProduto();
?>