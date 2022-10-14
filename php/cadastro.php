<?php
    $login = $_POST ['login'];
    $senha = MD5 ($_POST['senha']);
    $connect = mysql_connect('000webhost', 'id19648590_serena_store', 'spZxF^%)Rs6kp]rr')
    $db = mysql_select_db ('id19648590_serena');
    $query_select = "SELECT nome FROM cliente  WHERE cliente = '$id_cliente' ";
    $select = mysql_query($query_select, $connect);
    $array = mysql_fetch_array($select);
    $logarray = $array['login'];

    if ($login == "" || $login == null ){
        echo "<script language='javascript' type='text/javascript'> alert('Esse campo deve ser preenchido!!'); window.location.href='cadastro.html'; </script>";
    

    }else{
        if($logarray == $login){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse login já existe'); window.location.href='cadastro.html'; </script>"
        die();
        }
    }
?>