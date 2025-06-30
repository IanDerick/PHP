<?php
    class Cliente{
        private $senha;

        public function definirSenha($novaSenha){
            if ($this->validarSenha($novaSenha)) {
                $this->senha = $novaSenha;
                echo "Senha alterada com sucesso!\n";
            }else{
                echo "Senha inválida. Deve conter pelo menos 6 caracteres\n";
            }
        }
        public function obterSenha(){
            return str_repeat("*", strlen($this->senha));
        }
        private function validarSenha($senha){
            return strlen($senha)>= 6;
        }
    }
    $cliente = new Cliente();
    $cliente -> definirSenha("teste");//Senha inválida. Deve conter pelo menos 6 caracteres
    $cliente -> definirSenha("teste6");//Senha alterada com sucesso!
    echo"Senha do cliente: " .$cliente->obterSenha();//Senha do cliente: ******
?>