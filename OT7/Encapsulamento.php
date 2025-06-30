<?php
    class contaBancaria{
        private $saldo = 0;

        public function depositar($valor){
            $this->saldo += $valor;
            echo "Depósito de R$$valor realizado com sucesso!";
        }

        public function sacar($valor){
            if ($this->saldo > $valor) {
                $this->saldo -= $valor;
                echo "\nSaque de R$$valor realizado com sucesso!\nSaldo atual: R$" .$this->saldo;
            }else{
                echo "\nSaldo insuficiente!\nSeu saldo é de: R$ ".$this->saldo;
            }
        }

        public function saldo(){
            echo "\nSeu saldo é de: R$".$this->saldo;
        }
    }

    $conta = new contaBancaria();
    $conta -> depositar(100);//Depósito de R$100 realizado com sucesso!
    $conta -> sacar(10);//Saque de R$10 realizado com sucesso!Saldo atual: R$90
    echo $conta -> saldo();//Seu saldo é de: R$90
?>