<?php
require __DIR__.'/../vendor/autoload.php';
include __DIR__.'/header.php';
include __DIR__.'/footer.php';

use \App\ordem;
use \App\DataBase;


$obOrdem = new ordem;
$obOrdem -> id = filter_input(INPUT_GET,"id");
$id = intval($obOrdem -> id);
$obOrdem -> deleteQuery($id);
echo '</br>';
echo '</br>';
echo '</br>';
$button =  '<label style = "color: greey">*Deletado com sucesso!&nbsp&nbsp<a href = "painel.php"><button" class = "btn btn-primary m-2">Voltar</button></a></label>';
echo $button;
?>
