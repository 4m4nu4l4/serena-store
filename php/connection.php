<?php

$servername = "localhost";
$username = "id19648590_id19648590_serena_store";
$password = "Serena@store123";

//criar a conexão
$connect = new mysqli ($servername, $username, $password);

//para verificar a conexão

if ($connect->connect_error){
    die("Conexão falha: " . $connect->connect_error);
}
echo "Conectado com sucesso";
?>