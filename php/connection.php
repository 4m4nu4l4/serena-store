<?php

$hostname = "localhost";
$username = "id19648590_id19648590_serena_store";
$bdname= "id19928660_id19648590_serena";

//criar a conexão
$connect = new mysqli ($hostname, $username, $bdname);

//para verificar a conexão

if ($connect->connect_error){
    die("Conexão falha: " . $connect->connect_error);
}
echo "Conectado com sucesso";
?>