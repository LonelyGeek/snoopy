<?php
   include '../pages/topo.php';
?>

  <div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          <a href="./cadastrarcliente.php?id=Clientes"><button type="button" class="btn btn-primary">Novo Cliente</button></a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Modelo Veículo</th>
            <th>Placa</th>
            <th>Telefone</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($busca->selecionarCliente() as $linha){   ?>
        <tr>

        
           
            <td><?php  echo $linha['id'] ?></td>
            <td><?php  echo $linha['nome'] ?></td>
            <td><?php  echo $linha['modveiculo'] ?></td>
            <td><?php  echo $linha['placa'] ?></td>
            <td><?php  echo $linha['telefone'] ?></td>
          <td>
          
            <a href="visualizarcliente.php?id=Clientes&id2=<?php  echo $linha['id'] ?>"><button type="button" class="btn btn-success btn-xs">Visualizar</button></a> 
            <a href="editarcliente.php?id=Clientes&id2=<?php  echo $linha['id'] ?>"><button type="button" class="btn btn-warning btn-xs">Editar</button></a> 
            
         <a href="excluindocliente.php?cod=<?php  echo $linha['id'] ?>"> <button type="button" class="btn btn-danger btn-xs" >
      Excluir
      </button></a>

    </div>
   
</td>
  </tr>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Excluindo</h4>
          </div>
          <div class="modal-body">
            <p>Deseja realmente excluir?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
            <a href="excluindocliente.php?cod=<?php  echo $linha['id'] ?>"><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
          </div>
        </div>
      </div>
    </div>


                  

        
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