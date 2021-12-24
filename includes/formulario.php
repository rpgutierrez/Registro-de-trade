
<main>
  <section>
  <a href = "painel.php"><button class = "btn btn-primary" style = "margin-top: 50px">Voltar</button> </a>
  </section>
</main>

<div class = container style = "padding-bottom: 10px; background-color: white; margin-top: 30px">

    <form method="post" action = "painel.php">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label >Moeda</label>
          <input type="text" class="form-control" name = "moeda" placeholder = "Exemplo: Bitcoin" required>
        </div>
        <div class="form-group col-md-2">
          <label>Quantidade</label>
          <input type="number" step=0.01 class="form-control" name = "quantidade" placeholder = "Exemplo: 0,04" required>
        </div>
        <div class="form-group col-md-4">
          <label >Valor em reais (R$)</label>
          <input type="number" step=0.01 class="form-control" name = "valorMoeda" id = "money" placeholder = "Exemplo: 15,70" required>
        </div>
              
        <div id = "buttonSalvar"><button type="submit" class="btn btn-success" name = "acao">Salvar</button></div>
        

    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script> type="text/javascript" src="../js/jquery.mask.js" </script>
    <script>
      $(document).ready(function(){
        $('#money').mask('#.##0,00', {reverse: true});
      });
    </script>

    
  

