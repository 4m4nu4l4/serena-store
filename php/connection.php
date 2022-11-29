<?php

$hostname = "localhost";
$username = "serena-store";
$bdname= "id19928660_id19648590_serena";
$senha= "}}Hxe#_wJvn[f/3z";

//criar a conexão
$connect = new mysqli ($hostname, $username, $bdname, $senha);

//para verificar a conexão

if ($connect->connect_error){
    die("Conexão falha: " . $connect->connect_error);
}
echo "Conectado com sucesso";
?>