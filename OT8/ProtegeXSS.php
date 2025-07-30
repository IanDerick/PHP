<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if (empty($nome) && empty($email)) {
            echo "Por favor, preencha todos os campos obrigatórios.";
        }elseif (empty($email)) {
            echo "Por favor, preencha o campo do E-MAIL.";
        }elseif (empty($nome)) {
            echo "Por favor, preencha o campo do NOME.";
        }else {
            $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES,"UTF-8");
            $emailSeguro = htmlspecialchars($email, ENT_QUOTES,"UTF-8");
        }

        echo "Nome: $nomeSeguro <br>";
        echo "E-mail: $emailSeguro";
    }
?>