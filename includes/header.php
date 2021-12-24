<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1"
      name="viewport"
    />
    <title>Painel</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <script src = "../js/bootstrap.js"></script>
    
  </head>

  <boby class = "bg-secondary" >
    <div class="container-fluid">
      <div class = "d-flex justify-content-between bg-dark">
        <div class="text-light p-2">Painel de controle</div>
        <div class="p-2">
          <div class="btn-group">
            <button type="button" class="btn btn-dark" id = "botaodesloga"></button>
            <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Dropdown</span>
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="../index.php">Deslogar</a>
          </div>
        </div><!--p-2-->
      </div>
    </div>


