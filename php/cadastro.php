<?php
/* começo do php para o cadastro*/
        include 'connection.php'; //incluir o cadastro na conexão
        $_SESSION['senha'] = "";
        $_SESSION['email'] = "";
    $email = 'email';
    $senha = 'senha';
    $connect = mysql_connect('localhost', 'id19648590_id19648590_serena_store', 'w3lCBK0n1xph2={b');
    $db = mysql_select_db ('id19648590_id19648590_serena') ;
    $query_select = "SELECT nome FROM cliente  WHERE cliente = '$id_cliente' ";
    $select = mysql_query($query_select, $connect);
    $array = mysql_fetch_array($select);
    $logarray = $array['login'];

    if ($login == "" || $login == null ){
        echo "<script language='javascript' type='text/javascript'> alert('Esse campo deve ser preenchido!!'); window.location.href='cadastro.html'; </script>";
    
     }else{
        if($logarray == $login){
            echo "<script language='javascript' type='text/javascript'>
            alert('Esse login já existe'); window.location.href='cadastro.html'; </script>";
        die();
        }else{
            $query = "INSERT INTO cliente (nome,email) VALUES ('$nome', '$email')";
            $insert = mysql_query($query, $connect);

            if($insert){
                echo"<script language='javascript' type='text/javascript'> alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
            }else{
                echo"<script language='javascript' type='text/javascript'>
                alert('Não foi possível cadastrar esse usuário');window.location
                .href='cadastro.html'</script>";
            }
        }
    }
?>
<html>
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/testeDoCadastro.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
      <body class="color-default container-fluid">
        <!-- Navbar começa aqui -->
        <nav class="navbar navbar-expand-lg navbar-light color-default d-flex flex-column">
            <a class="navbar-brand" href="./index.html">
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
                        <a class="nav-link" href="brincos.html">Brincos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chaveiros.html">Chaveiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="colares.html">Colares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portatreco.html">Porcelanas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pulseiras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Xuxinhas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.html">Olá! entre ou cadastre-se</a>
                    </li>
                </ul>
            </div>
        </nav>
    <br>
<div class="slw">
  <div class="form-structor">
    <div class="signup">
      <h2 class="form-title" id="signup"><span>ou</span>cadastre-se</h2>
      <div class="form-holder">
        <input type="text" class="input" placeholder="Nome" />
        <input type="email" class="input" placeholder="Email" />
        <input type="password" class="input" placeholder="Senha" />
      </div>
      <button class="submit-btn">cadastrar</button>
    </div>
    <div class="login slide-up">
      <div class="center">
        <h2 class="form-title" id="login"><span>ou</span>login</h2>
        <div class="form-holder">
          <input type="email" class="input" placeholder="Email" />
          <input type="password" class="input" placeholder="Password" />
        </div>
        <button class="submit-btn">login</button>
      </div>
    </div>
  </div>
  <script>
    console.clear();
  const loginBtn = document.getElementById('login');
  const signupBtn = document.getElementById('signup');
  loginBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode.parentNode;
    Array.from(e.target.parentNode.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        signupBtn.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  signupBtn.addEventListener('click', (e) => {
    let parent = e.target.parentNode;
    Array.from(e.target.parentNode.classList).find((element) => {
      if(element !== "slide-up") {
        parent.classList.add('slide-up')
      }else{
        loginBtn.parentNode.parentNode.classList.add('slide-up')
        parent.classList.remove('slide-up')
      }
    });
  });
  </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
  </body>
  </html>