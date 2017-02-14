<?php
  session_start();



 $total = $_SESSION['total'];






include("conn.php");


                
                         require("conexao.php");
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                    
                   


                       $nome = $ln['nome'];
                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                    
                    
              
/*
                      echo '


                             <tr>
                                <th>Produto: '.$nome.'</th><br>
                                <th>Quantidade: '.$qtd.'</th><br>
                                <th>Valor Unidade: R$ '.$valor.'</th><br>
                                <th>Valor: R$ '.$sub.'</th><br>
                             
                                </tr><br><br><br><br>'; */

} 

                //$valortotal = number_format($total ,2,',','.');
                //echo "Valor Total R$: $valortotal";


                 

            ?>






<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orçamento</title>
<script type="text/javascript" src="funcs4.js"></script>


<body>

</body>
</html>


<?php
   include '../pages/topo.php';
?>

  <div class="row">
    <div class="col-xs-12">
      <div class="card">
    
       

            <div class="card-body ">
          




<div class="step">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="step" >
            <a href= "orcamento.php?id=Orçamento ">
                <div class="icon fa fa-cube"></div>
                <div class="heading">
                    <div class="title">Produto</div>
                    <div class="description">Passo 1</div>
                </div>
            </a>
        </li>
        <li role="step" >
           <a href= "caixa2o.php?id=Orçamento ">
                <div class="icon fa fa-shopping-cart"></div>
                <div class="heading">
                    <div class="title">Lista</div>
                    <div class="description">Passo 2</div>
                </div>
            </a>
        </li>
        <li role="step" class="active">
            <a href="#" role="tab" id="step3-tab" data-toggle="tab" aria-controls="profile">
                <div class="icon fa fa-user"></div>
                <div class="heading">
                    <div class="title">Detalhes</div>
                    <div class="description">Passo 3</div>
                </div>
            </a>
        </li>
        <li role="step">
            <a href="#" role="tab" id="step4-tab" data-toggle="tab" aria-controls="profile">
                <div class="icon fa fa-check "></div>
                <div class="heading">
                    <div class="title">Finalizar Venda</div>
                    <div class="description">Passo 4</div>
                </div>
            </a>
        </li>
                
    </ul>
    <!-- Tab panes -->

</div>










     
<br />
<h1>Buscar Cliente:</h1><br />
<input type="text" id="busca" class="form-control" onkeyup="buscarNoticias(this.value)" />
<div id="resultado"></div>
<br /><br />
<div id="conteudo"></div>


        </div>
      </div>
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>


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