<?php
   include '../pages/topo.php';



   $id2 = $_GET['cod'];

 
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
      
        <div class="card-body">
          <form action="editandoproduto.php?id2=<?php echo $id2 ?>" method="post" class="form form-horizontal">
  <div class="section">
    

<?php foreach($busca->selecionarProduto2($id2) as $linha){   ?>

    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Produto</label>
        <div class="col-md-9">
          <input type="text" name="nome" class="form-control" value="<?php  echo $linha['nome'] ?>" >
        </div>
      </div>

       <div class="form-group">
        <label class="col-md-3 control-label">Quantidade</label>
        <div class="col-md-9">
          <input type="text" name="quantidade" class="form-control" value="<?php  echo $linha['quantidade'] ?>">
        </div>
      </div>



            <div class="form-group">
        <label class="col-md-3 control-label">Valor inicial</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input type="text" name="valorinicial" class="form-control" value="<?php  echo $linha['valorinicial'] ?>">
          </div>
        </div>
      </div>


            <div class="form-group">
        <label class="col-md-3 control-label">Valor final</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input type="text" name="valorfinal" class="form-control" value="<?php  echo $linha['valorfinal'] ?>">
          </div>
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