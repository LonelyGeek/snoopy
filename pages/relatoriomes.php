<?php
   include '../pages/topo.php';
?>

<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-green-light">
  <div class="card-body">
    <i class="icon fa fa-shopping-basket fa-4x"></i>
    <div class="content">
      <div class="title">Vendas Hoje</div>
      <div class="value"><span class="sign">R$</span>





               <?php 

 date_default_timezone_set('America/Sao_Paulo');
 $data = date('Y-m-d');


               foreach($busca->selecionarVendaDia($data) as $linha){  
                ini_set( 'display_errors', 0 ); ?>
        
            
         
             <?php  
              $valorfinal5 = $valorfinal5 +  $linha['valorfinal'];
              $valorfinal5 = number_format($valorfinal5 ,2,',','.');
            ?>


          
            
        
        
    <?php } 

         ini_set( 'display_errors', 0 );
        echo $valorfinal5;

    ?>  








      </div>
    </div>
  </div>
</a>

  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-orange-light">
  <div class="card-body">
    <i class="icon fa fa-exclamation-circle fa-4x"></i>
    <div class="content">
      <div class="title">Produtos em falta</div>
      <div class="value"><span class="sign"></span>0</div>
    </div>
  </div>
</a>

  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-blue-light">
  <div class="card-body">
    <i class="icon fa fa-user-plus fa-4x"></i>
    <div class="content">
      <div class="title">Clientes Cadastrados</div>
      <div class="value"><span class="sign"></span><?php $busca->contarClientes(); ?></div>
    </div>
  </div>
</a>

  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title"><h1>Relatório de vendas do mês
        </h1> </div>
        <ul class="card-action">
          <li>
            <a href="#">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">


<center>
<table class="datatable table table-striped primary" cellspacing="0" width="100%">
        <thead>
        <tr>
            
            <th>Vendedor</th>
            <th>Valor da Venda</th>
            <th>Gastos</th>
            <th>Lucro</th>
        </tr>
        </thead>
        <tbody>


               <?php 

 date_default_timezone_set('America/Sao_Paulo');
 $mes = date('m');



               foreach($busca->selecionarVendaMes($mes) as $linha){  
                ini_set( 'display_errors', 0 ); ?>
        <tr>
            
            <td><?php  echo $linha['vendedor'] ?></td>
            <td>R$ <?php  echo $linha['valorfinal'] ;
              $valorfinal2 = $valorfinal2 +  $linha['valorfinal'];
              $valorfinal2 = number_format($valorfinal2 ,2,',','.');
            ?></td>


            <td>R$ <?php  echo $linha['gastos'] ;
              $gastos2 = $gastos2 +  $linha['gastos'];
              $gastos2 = number_format($gastos2 ,2,',','.');

            ?></td>
            <td>R$ <?php  echo $linha['lucrofinal'] ;
             $lucro2 = $lucro2 +  $linha['lucrofinal'];
             $lucro2 = number_format($lucro2 ,2,',','.');
            ?></td>
            
        </tr>
        
    <?php } ?>  
 
        <tr>  
        
         <th></th>


  


        <th><h3>Total final: R$ <font color="green"> <?php 

        ini_set( 'display_errors', 0 );

        echo $valorfinal2 ?></font></h3></th>
              <th><h3>Gasto final: R$ <font color="red"><?php echo $gastos2 ?></font></h3></th>
              <th><h3>Lucro final: R$ <font color="green"><?php echo $lucro2 ?></font></h3></th>
              
        </tr>

     </tbody>
</table>  
<a href="painel.php?id=Painel"><button type="button" class="btn btn-primary">Relatório Dia</button></a> <a href="relatoriosemana.php?id=Relatório da Semana"><button type="button" class="btn btn-success">Relatório Semana</button></a>
</center>



      </div>
    </div>
  </div>

<!-- 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title"><h1>Relatório de vendas da Semana</h1></div>
        <ul class="card-action">
          <li>
            <a href="#">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">


<center>
<table class="datatable table table-striped primary" cellspacing="0" width="100%">
        <thead>
        <tr>
            
            <th>Vendedor</th>
            <th>Valor da Venda</th>
            <th>Gastos</th>
            <th>Lucro</th>
        </tr>
        </thead>
        <tbody>


               <?php 

 /*date_default_timezone_set('America/Sao_Paulo');
 $data = date('Y-m-d');


               foreach($busca->selecionarVendaDia($data) as $linha){  
                ini_set( 'display_errors', 0 ); ?>
        <tr>
            
            <td><?php  echo $linha['vendedor'] ?></td>
            <td>R$ <?php  echo $linha['valorfinal'] ;
              $valorfinal1 = $valorfinal1 +  $linha['valorfinal'];
              $valorfinal1 = number_format($valorfinal1 ,2,',','.');
            ?></td>


            <td>R$ <?php  echo $linha['gastos'] ;
              $gastos1 = $gastos1 +  $linha['gastos'];
              $gastos1 = number_format($gastos1 ,2,',','.');

            ?></td>
            <td>R$ <?php  echo $linha['lucrofinal'] ;
             $lucro1 = $lucro1 +  $linha['lucrofinal'];
             $lucro1 = number_format($lucro1 ,2,',','.');
            ?></td>
            
        </tr>
        
    <?php } ?>  
 
        <tr>  
        
         <th></th>
        <th><h3>Total final: R$ <font color="green"> <?php echo $valorfinal1 ?></font></h3></th>
              <th><h3>Gasto final: R$ <font color="red"><?php echo $gastos1 ?></font></h3></th>
              <th><h3>Lucro final: R$ <font color="green"><?php echo $lucro1 ?></font></h3></th>
              
        </tr>

     </tbody>
</table>  

</center>



      </div>
    </div>
  </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title"><h1>Relatório de vendas do Mês</h1></div>
        <ul class="card-action">
          <li>
            <a href="#">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">


<center>
<table class="datatable table table-striped primary" cellspacing="0" width="100%">
        <thead>
        <tr>
            
            <th>Vendedor</th>
            <th>Valor da Venda</th>
            <th>Gastos</th>
            <th>Lucro</th>
        </tr>
        </thead>
        <tbody>


               <?php 

 date_default_timezone_set('America/Sao_Paulo');
 $data = date('Y-m-d');


               foreach($busca->selecionarVendaDia($data) as $linha){  
                ini_set( 'display_errors', 0 ); ?>
        <tr>
            
            <td><?php  echo $linha['vendedor'] ?></td>
            <td>R$ <?php  echo $linha['valorfinal'] ;
              $valorfinal3 = $valorfinal3 +  $linha['valorfinal'];
              $valorfinal3 = number_format($valorfinal3 ,2,',','.');
            ?></td>


            <td>R$ <?php  echo $linha['gastos'] ;
              $gastos3 = $gastos3 +  $linha['gastos'];
              $gastos3 = number_format($gastos3 ,2,',','.');

            ?></td>
            <td>R$ <?php  echo $linha['lucrofinal'] ;
             $lucro3 = $lucro3 +  $linha['lucrofinal'];
             $lucro3 = number_format($lucro3 ,2,',','.');
            ?></td>
            
        </tr>
        
    <?php } ?>  
 
        <tr>  
        
         <th></th>
        <th><h3>Total final: R$ <font color="green"> <?php echo $valorfinal3 ?></font></h3></th>
              <th><h3>Gasto final: R$ <font color="red"><?php echo $gastos3 ?></font></h3></th>
              <th><h3>Lucro final: R$ <font color="green"><?php echo $lucro3 */?></font></h3></th>
              
        </tr>

     </tbody>
</table>  

</center>



      </div>
    </div>
  </div>
-->






      </div>
    </div>
  </div>


</div>






  <footer class="app-footer"> 
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
       <center> Copyright © 2016 Snoopy Sound Car - Created by: Ricardo Lima. </center>
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