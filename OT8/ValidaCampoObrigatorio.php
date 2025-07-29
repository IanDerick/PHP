<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if (empty($nome) || empty($email)) {
            echo "Por favor, preencha todos os campos obrigatórios.";
        }else{
            echo "Nome: $nome <br>";
            echo "E-mail: $email";
        }
    }
?>