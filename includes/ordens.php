<?php
  use \App\DataBase;
  $resultados = '';
  $obDataBase = new DataBase;
  $dados = $obDataBase ->consultarDados();

  for($i = 0; $i < count($dados); $i++){
    if($id == $dados[$i]['usuario_id']){
    $resultados .= '<tr>';
    $resultados .= '<td>'.$dados[$i]['moeda'].'</td>';
    $resultados .= '<td>'.$dados[$i]['quantidade'].'</td>';
    $resultados .= '<td>R$'.$dados[$i]['valor'].'</td>';
    $resultados .= '<td>'.$dados[$i]['data'].'</td>';
    $resultados .= '<td><a href = "confirma.delete.php?id='.$dados[$i]['id'].'"><button class = "btn btn-danger" name = '.$dados[$i]['id'].'>Excluir</button> </a></td>';
    $resultados .= '</tr>';
    }
       
    }

?>


<main>
  <section>
    <a href = "addOrdem.php"><button class = "btn btn-primary" style = "margin: 20px 0px">Cadastrar</button> </a>
  </section>

  <section>
        <table class = "table bg-dark text-light text-center" id = "table">
          <thead>
            <tr>
                <th>Moeda</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
                echo $resultados;
            ?>
          <tbody>
          
        </table>
  </section>
</main>