<?php
date_default_timezone_set('America/Sao_Paulo');
require __DIR__.'/../vendor/autoload.php';

use \App\ordem;
use \App\usuarios;
use \App\DataBase;

session_start();
$id = $_SESSION['id'];

if(isset($_POST['acao'])){

  $obOrdem = new ordem;
  $obOrdem -> moeda = $_POST['moeda'];
  $obOrdem -> usuario_id = $id;
  $obOrdem -> quantidade = $_POST['quantidade'];
  $obOrdem -> valorMoeda = $_POST['valorMoeda'];
  $obOrdem -> data = date('d-m-Y H:i:s');
  $obOrdem -> cadastrar();
  
  
}



?>