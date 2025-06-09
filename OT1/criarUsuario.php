<?php
    function criaSenha($senha){
        if (strlen($senha)< 8) {
            return "Senha com menos de 8 caracteres";
        }
        if (!preg_match('/[A-Z]/', $senha)) {
            return "A senha deve conter pelo menos uma letra maiúscula.";
        }
        if (!preg_match('/[a-z]/', $senha)) {
            Return "A senha deve conter pelo menos uma letra minúscula.";
        }
        if (!preg_match('/[0-9]/', $senha)) {
            Return "A senha deve conter pelo menos um número.";
        }
        if (!preg_match('/[\W-]/', $senha)) {
            Return "A senha deve conter pelo menos um caractere especial.";
        }
    
        return "Senha Forte!";
    };

    function criaUsuario($usuario){
        if (!preg_match('/^[a-zA-Z]+\.{1}[a-zA-Z]+$/', $usuario)) {
            return "Usuário inválido!.\n";
        }

        return "Usuário criado";
    }

    echo "Digite o usuário (Ex: nome.sobrneome): ";
    $usuario = trim(fgets(STDIN));

    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    $resultadoSenha = criaSenha($senha);
    $resultadoUsuario = criaUsuario($usuario);

    if ($resultadoSenha == "Senha Forte!" && $resultadoUsuario == "Usuário criado") {
        echo "Bem vindo!";
    } else {
        if ($resultadoUsuario != "Usuário criado") {
            echo $resultadoUsuario . "\n";
        }
        if ($resultadoSenha != "Senha Forte!") {
            echo $resultadoSenha . "\n";
        }
    }
?>