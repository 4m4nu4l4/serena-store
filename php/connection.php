<?php

$servername = "localhost";
$username = "id19648590_id19648590_serena_store";
$password = "w3lCBK0n1xph2={b";

//criar a conexão
$connect = new mysql($servername, $username, $password);

//para verificar a conexão

if ($connect->connect_error){
    die("Conexão falha: " . $connect->connect_error);
}
echo "Conectado com sucesso";
?>