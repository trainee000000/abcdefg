<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassaword = '';
    $dbName = 'Livros';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassaword, $dbName);

    /*if($conexao-> connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuado com sucesso";
    }*/

?>
