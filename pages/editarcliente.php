<?php
   include '../pages/topo.php';



   $id2 = $_GET['id2'];

 
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-body">
          <form action="editandocliente.php?id2=<?php echo $id2 ?>" method="post" class="form form-horizontal">
  <div class="section">
    

<?php foreach($busca->selecionarCliente2($id2) as $linha){   ?>

    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Nome</label>
        <div class="col-md-9">
          <input type="text" name="nome" class="form-control" value="<?php  echo $linha['nome'] ?>" >
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-3 control-label">CPF</label>
        <div class="col-md-9">
          <input type="text" name="cpf" class="form-control" value="<?php  echo $linha['cpf'] ?>">
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-3 control-label">Endereço</label>
        <div class="col-md-9">
          <input type="text" name="endereco" class="form-control" value="<?php  echo $linha['endereco'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Cidade</label>
        <div class="col-md-9">
          <input type="text" name="cidade" class="form-control" value="<?php  echo $linha['cidade'] ?>">
        </div>
      </div>



      <div class="form-group">
        <label class="col-md-3 control-label">Modelo Veículo</label>
        <div class="col-md-9">
          <input type="text" name="modveiculo" class="form-control" value="<?php  echo $linha['modveiculo'] ?>">
        </div>
      </div>

           <div class="form-group">
        <label class="col-md-3 control-label">Placa</label>
        <div class="col-md-9">
          <input type="text" name="placa" class="form-control" value="<?php  echo $linha['placa'] ?>">
        </div>
      </div>

           <div class="form-group">
        <label class="col-md-3 control-label">Ano</label>
        <div class="col-md-9">
          <input type="text" name="ano" class="form-control" value="<?php  echo $linha['ano'] ?>">
        </div>
      </div>



      <div class="form-group">
        <label class="col-md-3 control-label">Telefone</label>
        <div class="col-md-9">
          <input type="text" name="telefone" class="form-control" value="<?php  echo $linha['telefone'] ?>">
        </div>
      </div>



    </div>
  </div>
<?php } ?>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-success">Editar</button>
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