<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'lead';


    $conexao= new mysqli(hostname: $dbHost, username: $dbUsername, password: $dbPassword, database: $dbName);

    /* TESTA CONEXAO
    if ($conexao->connect_error) {
    echo "teste";
    }
    else {
        echo"Conexão establecida com o banco de dados:" .$dbName;

    }
    */


?>