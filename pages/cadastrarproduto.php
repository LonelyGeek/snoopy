<?php
   include '../pages/topo.php';
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-body">
 


 <form class="form form-horizontal" action="cadastrandoproduto.php" method="POST">
  <div class="section">
    
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Produto</label>
        <div class="col-md-9">
          <input name="produto" type="text" class="form-control" placeholder="">
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-3 control-label">Quantidade</label>
        <div class="col-md-9">
          <input name="quantidade" type="text" class="form-control" placeholder="">
        </div>
      </div>



      <div class="form-group">
        <label class="col-md-3 control-label">Valor inicial</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input name="valorinicial" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>


            <div class="form-group">
        <label class="col-md-3 control-label">Valor final</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input name="valorfinal" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="controledeestoque.php?id=Controle de Estoque"><button type="button" class="btn btn-default">Cancel</button></a>
      </div>
    </div>
  </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>