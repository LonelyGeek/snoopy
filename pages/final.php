<?php
  session_start();



 $total = $_SESSION['total'];
 $nomeCliente = $_SESSION['nomecliente'];
 $modveiculo = $_SESSION['modveiculo'];
 $placa = $_SESSION['placa'];
 $ano = $_SESSION['ano'];
 $endereco = $_SESSION['endereco'];
 $cidade = $_SESSION['cidade'];
 $telefone = $_SESSION['telefone'];










 $pagamento = $_POST['radio2'];
$tiposerv = $_POST['tiposerv'];
$valorserv = $_POST['valorserv'];
$desconto = $_POST['desconto'];
$obs = $_POST['obs'];
$vendedor = $_POST['select2'];


$_SESSION['obs'] = $obs;
if($desconto == ""){
	$desconto = 0;
}

if($valorserv == ""){
	$valorserv = 0;
}



include("conn.php");


                
                         require("conexao.php");
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                    
                   


                       $nome = $ln['nome'];
                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                    
                    
              


} 

                $valortotal = number_format($total ,2,',','.');
               
                

                 $valors = number_format($valorserv ,2,',','.');

                  $desconto2 = number_format($desconto ,2,',','.');
              
                $valorserv2 = number_format($valorserv ,2,',','.');
                  
  
            ?>


 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Caixa</title>
<script type="text/javascript" src="../assets/js/funcs.js"></script>


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
            <a href="#" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                <div class="icon fa fa-cube"></div>
                <div class="heading">
                    <div class="title">Produto</div>
                    <div class="description">Passo 1</div>
                </div>
            </a>
        </li>
        <li role="step" >
            <a href= "caixa2.php?id=Caixa ">
                <div class="icon fa fa-shopping-cart"></div>
                <div class="heading">
                    <div class="title">Lista</div>
                    <div class="description">Passo 2</div>
                </div>
            </a>
        </li>
        <li role="step">
            <a href="#" role="tab" id="step3-tab" data-toggle="tab" aria-controls="profile">
                <div class="icon fa fa-user"></div>
                <div class="heading">
                    <div class="title">Detalhes</div>
                    <div class="description">Passo 3</div>
                </div>
            </a>
        </li>
        <li role="step" class="active">
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

<h1>Resumo da venda</h1>
<br><br>


<?php ;

 $_SESSION['vendedor'] = $vendedor;

 ?>

<h2> <font color='#095077'>Vendedor </font> </h2>
<h4><b>Nome:</b> <?php echo $vendedor ?></h4>
<hr>

<h2> <font color='#095077'>Dados do Cliente </font></h2>
<h4><b>Nome:</b> <?php echo $nomeCliente ?></h4>
<h4><b>Modelo Veículo:</b> <?php echo $modveiculo ?></h4>
<h4><b>Placa:</b> <?php echo $placa ?></h4>
<h4><b>Ano:</b> <?php echo $ano ?></h4>
<h4><b>Endereço:</b> <?php echo $endereco ?></h4>
<h4><b>Cidade:</b> <?php echo $cidade ?></h4>
<h4><b>Telefone:</b> <?php echo $telefone ?></h4>

<hr>
<h2><font color='#095077'> Valores </font></h2>
<h4><b>Valor Produtos:</b> R$ <?php echo $valortotal ?></h4>
<h4><b>Valor Serviço:</b> R$ <?php echo $valorserv2 ?></h4>
<h4><b>Desconto:</b> R$ <?php echo $desconto2 ?></h4>

<?php

$_SESSION['valorserv'] = $valorserv2;
$_SESSION['valorprod'] = $valortotal;

 $valortotal = ereg_replace( ",", ".", $valortotal);
 $valorserv2 = ereg_replace( ",", ".", $valorserv2);

 $total = $valortotal + $valorserv2; 

 $desconto2 = ereg_replace( ",", ".", $desconto2);

 $total = $total - $desconto2;

 ?>

<?php  $total2 = number_format($total ,2,',','.');  ?>
<h4><b>Valor Total:</b> R$ <?php echo $total2 ?></h4>



<?php 



$_SESSION['total'] = $total2;
$_SESSION['tiposerv'] = $tiposerv;
$_SESSION['pagamento'] = $pagamento;
$_SESSION['desconto'] = $desconto2;




?>

<hr>

<h2> <font color='#095077'>Extra </font></h2>
<h4><b>Tipo de serviço:</b> <?php echo $tiposerv ?></h4>
<h4><b>Forma de pagamento:</b> <?php echo $pagamento ?></h4>
<h4><b>Observação:</b> <?php echo $obs ?></h4>


<hr>


<h2> <font color='#095077'>Lista de produtos </font> </h2>
     <table class="table">
     <thead>
        <tr>
           <th>Id</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor Unidade</th>
          <th>Sub Total</th>
        </tr>
      </thead>

      <tfoot>
         <tr>
            
             
            <tr>
               <td colspan="5"><a href="caixa3.php?id=Caixa"><button type="button" class="btn btn-primary"><< Voltar</button></td></a></td>
               <td colspan="5"><a href="finalizar.php?id=Caixa"><button type="button" class="btn btn-success">Concluir venda >></button></td></a></td>
      </tfoot>

<?php

                         require("conexao.php");
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                           mysql_query("SET NAMES 'utf8'");
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                    
                   

                        $id3 = $ln['id'];
                       $nome = $ln['nome'];
                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                    
                    
              
   echo '





                             <tr>
                               <th>'.$id3.'</th>
                                <th>'.$nome.'</th>
                                <th>'.$qtd.'</th>
                             <th>R$ '.$valor.'</th>
                             <th>R$ '.$sub.'</th>
                             
                                </tr>';







                   

} 
 

?>


            
    
  
            
          


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





