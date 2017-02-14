<?php
   include '../pages/topo.php';
?>

  <div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          <a href="./cadastrarproduto.php?id=Controle de Estoque"><button type="button" class="btn btn-primary">Novo Produto</button></a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor Inicial</th>
            <th>Valor Final</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
       
    <?php foreach($busca->selecionarProduto() as $linha){   ?>
        <tr>
            <td><?php  echo $linha['id'] ?></td>
            <td><?php  echo $linha['nome'] ?></td>
            <td><?php  echo $linha['quantidade'] ?></td>
            <td>R$ <?php  echo $linha['valorinicial'] ?></td>
            <td>R$ <?php  echo $linha['valorfinal'] ?></td>
            <td><a href="editarproduto.php?id=Editar Produto&cod=<?php  echo $linha['id'] ?>"><button type="button" class="btn btn-warning btn-xs">Editar</button></a> 
                <a href="excluindoproduto.php?cod=<?php  echo $linha['id'] ?>"><button type="button" class="btn btn-danger btn-xs">Excluir</button></a></td>
        </tr>
        
    <?php } ?>  


        
    </tbody>
</table>
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

  <footer class="app-footer"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        <center>Copyright © 2016 Snoopy Sound Car - Created by: Ricardo Lima.</center>
      </div>
    </div>
  </div>
</footer>
</div>

  </div>
  
  <script type="text/javascript" src="./assets/js/vendor.js"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>