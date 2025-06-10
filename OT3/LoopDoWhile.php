<?php
    do {
        echo "Digite uma senha: ";    
        $senha = trim(fgets(STDIN));

        $validaComprimento = strlen($senha) >= 8;
        $validaLetraMaiusc = preg_match('/[A-Z]/', $senha);
        $validaNumero = preg_match('/[0-9]/', $senha); 

        if (!$validaComprimento || !$validaLetraMaiusc || !$validaNumero) {
            echo "Senha inválida! A senha deve ter pelo menos 8 caracteres, uma letra maiuscula e um números.\n";
        }
    } while (!$validaComprimento || !$validaLetraMaiusc || !$validaNumero);

    echo "\nSenha forte!\n";
?>