<?php
session_start();
$_SESSION['nome'] = "";
$_SESSION['email'] = "";
$pdo = new PDO ('mysql:host=000webhost; dbname=id19648590_serena', 'id19648590_serena_store', 'spZxF^%)Rs6kp]rr');
if(isset($_POST['acao'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?"); //usuado para selecionar o email e a senha
if ($sql->execute(array($email, senha))){
    if($sql->rowCount()>0){
        $info = $sql->fetchALL(PDO::FETCH_ASSOC);
        foreach($info as $key => $values){
            $_SESSION['nome'] = $values['nome'];
            $_SESSION['email'] = $values['email'];
        }
        echo 'O usuário foi encontrado, o cadastro foi realizado com sucesso!';
        header(location:cadastro.php);
    }else{
        echo'Esse usuário não foi encontrado, verifique-se o cadastro foi efetuado.';
    }
}
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="color-default container-fluid">
    <!-- Navbar começa aqui -->
    <nav class="navbar navbar-expand-lg navbar-light color-default d-flex flex-column">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" class="logo-navbar"></a>
        <div class="collapse navbar-collapse flex-column" id="navbarNav">
            <ul class="navbar-nav d-flex">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aneis.html">Anéis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="teste.html">TESTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Brincos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chaveiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Colares</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Porcelanas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pulseiras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Xuxinhas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active href="cadastro.html">Olá! entre ou cadastre-se</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar termina aqui -->
    <form action="" method="POST">
    <label for="nome"> NOME:</label> 
        <input type="text"  name="nome" required >
        <label for="email"> EMAIL:</label> 
        <input type="text"  name="email" required>
        <label for="senha"> SENHA:</label> 
        <input type="password" name="senha" id="senha" requeried > 
        <label for="confirma"> REPETIÇÃO DA SENHA:</label> 
        <input type="password"  name="confirma" id="confirma" requeried onblur="alerta();">  
    </form>
</body>
</html>