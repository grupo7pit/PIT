<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'looking_for_ink_database';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     if($conexao->connect_errno)
     {
         echo "Erro";
     }
?>