<?php

require __DIR__.'/vendor/autoload.php';
use \App\usuarios;
$id = 'a';

if(isset($_POST['login'])){

  $obUsuarios = new usuarios;

  $obUsuarios -> email = $_POST['email'];
  $obUsuarios -> senha = $_POST['senha'];
  $obUsuarios -> logar($obUsuarios -> email, $obUsuarios -> senha);
  session_start();
  $id =  $obUsuarios -> logar($obUsuarios -> email, $obUsuarios -> senha);
  $_SESSION['id'] = $id;

  header('Location: includes/painel.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1"
      name="viewport"
    />
    <title>Acompanhamento de trade - login</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body
    style="
      background-image: linear-gradient(white, aquamarine);overflow: hidden;
    "
  >
    <div  class="container-fluid m-2">
      <div class = "row">
        <div class= "col-12 text-center p-4">
            <h1 style = "color: aquamarine; text-shadow: black 0.1em 0.1em 0.2em">ACOMPANHAMENTO DE TRADE</h1>
        <div>
      </div>
      <div class = "container ">
      <div class = "row pt-5 ">
        <div style = "margin-top : 100px" class= "col-12 col-md-4 text-left ">
        <form method="post">
              <h3>Faça o login</h3>
              <div class="form-group">
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
              </div>
              <div class="form-group">
                <input type="password"  name = "senha" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
              </div>
              <div class="form-group">
                  <button name = "login" type="submit" class="btn btn-success">Logar</button>
                  <a class = "text-success" style = "margin-left:40%; font-size:20px; margin-top:20px"href = "includes/cadastro.php">Cadastrar</a>
              </div>
          </form>
        </div>

        <div class= "col-10 col-md-6" id = "imgg" style = "margin-top : 20px" ></div>

        
        </div><!--row-->
 
        </div><!--container-->
  </body>
  <footer></footer>
</html>


