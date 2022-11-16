<?php

$servername = "000webhost";
$username = "id19648590_serena_store";
$password = "spZxF^%)Rs6kp]rr";

//criar a conexão

$conn = new mysqli ($servername, $username, $password);

//para verificar a conexão

if ($conn->connect_error){
    die("Conexão falha: " . $conn->connect_error);
}
echo "Conectado com sucesso";
?>