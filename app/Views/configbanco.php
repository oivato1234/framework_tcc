
<?php
    /*Configuração*/
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    /*para ter ceretza que vai funcionar
    
    if($conexao->connect_errno)
    {
       echo "Erro"; 
    }
    else
    {
        echo "Conexao efetuada com sucesso";
    }*/
?>