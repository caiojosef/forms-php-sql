<?php

$dbHOST = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'usbw';
$dbName = 'forms-caio';

$conexao = new mysqli($dbHOST, $dbUsername, $dbPassword, $dbName);

if($conexao->connect_errno)
{
    echo "Erro ao conectar ao banco de dados: " . $conexao->connect_error;
}
else{
    echo "Conectado ao banco de dados com sucesso!";
}

?>