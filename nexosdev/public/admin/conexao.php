<?php

$host = 'localhost'; // endereço server local ou remoto
$dbname = 'db_nexosdev'; // Nome banco de dados
$username = 'root'; // Nome Usuario do banco de dados
$password = ''; // Senha Usuario do banco de dados

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Erro de conexão:' . $e->getMessage();
}

?>