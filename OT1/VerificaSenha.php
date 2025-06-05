<?php
function verificaSenha($senha){
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
}
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));
    echo verificaSenha($senha);
?>