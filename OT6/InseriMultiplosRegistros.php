<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "meubanco";
    $porta = 3307;

    $conn = new mysqli($host, $usuario, $senha, $banco, $porta);

    if($conn -> connect_error){
        die("Erro na conexão: ". $conn -> connect_error);
    }

    $sql = "INSERT INTO USUARIOS (NOME, EMAIL, SENHA) VALUES ('IAN DERICK SILVA MOTA', 'ian_mota@estudante.sesisenai.org.br', 'Ian4567*'),
    ('BRUNA CAMILLE PROCHNOW', 'cprochnow24@gmail.com', 'Bruna67*'),
    ('CAIO GIOVANI SANTOS MADUREIRA', 'caio_m@estudante.sesisenai.org.br', 'Caio567*'),
    ('PEDRO MAURICIO PACHECO', 'pedro_pacheco@gmail.com', 'Pacheco*')";

    if ($conn->query($sql) === TRUE) {
        echo"Registros inseridos com sucesso!";
    }else{
        echo "ERRO:" .$conn->error;
    }
    $conn->close();
?>