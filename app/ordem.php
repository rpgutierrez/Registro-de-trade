<?php

namespace app;

use \App\DataBase;

class ordem{

  public $id;

  public $usuario_id;

  public $moeda;

  public $quantidade;

  public $valorMoeda;

  public $data;

  public function cadastrar(){

    $obDataBase = new DataBase;
    $obDataBase ->insertDados($this->moeda,$this->quantidade,$this->valorMoeda,$this->data,$this->usuario_id);
    $obDataBase ->consultarDados();
    
  }
  public function deleteQuery($id){
    $obDataBase = new DataBase;
    $this -> id = $id;
    $obDataBase -> deletarDados($this-> id);
  }

}

?>