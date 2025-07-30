<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if (empty($nome) && empty($email)) {
            echo "Por favor, preencha todos os campos obrigatórios.";
        }else if (empty($nome)) {
            echo "Por favor, preencha o campo do NOME.";
        }else if (empty($email)) {
            echo "Por favor, preencha o campo do E-MAIL.";
        }else {
            echo "Formulário enviado com sucesso!";
        }
    }
?>