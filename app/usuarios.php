<?php

namespace app;

use \App\DataBase;

class usuarios{

  public $id;

  public $nome;

  public $sobrenome;

  public $email;

  public $senha;

  public function cadastrar($email){

    $this->email = $email;

    $obDataBase = new DataBase;

    $obDataBase -> consultarUsuariosInserir($email);

    $obDataBase ->insertUsuario($this->nome,$this->sobrenome,$this->email,$this->senha);
    
  }

  public function logar($email,$senha){
    
    $this->email = $email;
    $this->senha = $senha;

    $obDataBase = new DataBase;

    $obDataBase -> consultarUsuariosLogar($email,$senha);
     
    return  $obDataBase -> consultarUsuariosLogar($email,$senha);
    
  }

}

?>