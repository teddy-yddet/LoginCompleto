<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'loginauth';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    
    IF($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso!";
    }
    
?>