<?php
   include '../pages/topo.php';
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-body">
 


 <form class="form form-horizontal" action="cadastrandocliente.php" method="POST">
  <div class="section">
    
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nome</label>
        <div class="col-md-9">
          <input name="nome" type="text" class="form-control" placeholder="">
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-3 control-label">CPF</label>
        <div class="col-md-9">
          <input name="cpf" type="text" class="form-control" placeholder="">
        </div>
      </div>

             <div class="form-group">
        <label class="col-md-3 control-label">Endereço</label>
        <div class="col-md-9">
          <input name="endereco" type="text" class="form-control" placeholder="">
        </div>
      </div>

             <div class="form-group">
        <label class="col-md-3 control-label">Cidade</label>
        <div class="col-md-9">
          <input name="cidade" type="text" class="form-control" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Modelo Veículo</label>
        <div class="col-md-9">
          <input name="modveiculo" type="text" class="form-control" placeholder="">
        </div>
      </div>

             <div class="form-group">
        <label class="col-md-3 control-label">Placa</label>
        <div class="col-md-9">
          <input name="placa" type="text" class="form-control" placeholder="">
        </div>
      </div>

             <div class="form-group">
        <label class="col-md-3 control-label">Ano</label>
        <div class="col-md-9">
          <input name="ano" type="text" class="form-control" placeholder="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Telefone</label>
        <div class="col-md-9">
          <input name="telefone" type="text" class="form-control" placeholder="">
        </div>
      </div>



    </div>
  </div>

  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="clientes.php?id=Clientes"><button type="button" class="btn btn-default">Cancel</button></a>
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