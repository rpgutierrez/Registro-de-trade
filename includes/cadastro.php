<?php

require __DIR__.'/../vendor/autoload.php';
include __DIR__.'/headerCadastro.php';
use \App\usuarios;

if(isset($_POST['login'])){

  $obUsuarios = new usuarios;
  $obUsuarios -> nome = $_POST['nome'];
  $obUsuarios -> sobrenome = $_POST['sobrenome'];
  $obUsuarios -> email = $_POST['email'];
  $obUsuarios -> senha = $_POST['senha'];
  $obUsuarios -> cadastrar($obUsuarios -> email);
  
}
echo '</br>';
echo '</br>';


?>

    <div class="container">
    <form method="post" class="needs-validation">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Primeiro nome</label>
      <input type="text" class="form-control" id="validationTooltip01" name = "nome" placeholder="Exemplo: Mario" required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Sobrenome</label>
      <input type="text" class="form-control" id="validationTooltip02" name = "sobrenome" placeholder="Exemplo: Freitas"  required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Email</label>
      <input type="email" class="form-control" id="validationTooltip01" name = "email" placeholder="Exemplo: mario@gmail.com" required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Senha</label>
      <input type="text" class="form-control" id="validationTooltip02" name = "senha" placeholder="Exemplo: Mario123"  required>
      <div class="valid-tooltip">
        Tudo certo!
      </div>
    </div>
  </div>
  <div class = "form-row">
      <div class="col-4  ">
      <a href="../index.php"><button  class="btn btn-primary" type="button">Voltar</button></a>
      </div>
      <div class="col-4 offset-4  text-right">
      <a href="../index.php"><button class="btn btn-primary" type="submit" name = "login">Cadastrar</button></a>
      </div>
  </div>
</form>
    </div>

    <!--Conteiner-->

<?php

include __DIR__.'/footer.php';

?>