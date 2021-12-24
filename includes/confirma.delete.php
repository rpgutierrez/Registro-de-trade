<?php
require __DIR__.'/../vendor/autoload.php';
include __DIR__.'/header.php';
include __DIR__.'/footer.php';

use \App\ordem;
use \App\DataBase;


$obOrdem = new database;
$obOrdem -> id = filter_input(INPUT_GET,"id");
$id = intval($obOrdem -> id);

//$obOrdem -> deleteQuery($id);
echo '</br>';
echo '</br>';
echo '</br>';
$button =  '<label style = "color: red">*Tem certeza que deseja excluir a ordem selecionada?<a href = "deletar.php?id='.$id.'"><button class = "btn btn-success m-2">Confirmar</button></a></label>';
echo $button;
?>

