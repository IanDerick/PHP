<?php
    $conexcaoMySQL = mysqli_connect("localhos","root","root","mercado");

    if(!$conexcaoMySQL){
        die("Falha na conexão: ". mysqli_connect_error());
    }
    echo "Conexão bem sucedida com MySQL!";

    mysqli_closet($conexcaoMySQL);
?>