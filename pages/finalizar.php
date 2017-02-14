<?php
session_start();


  
 require("conexao.php");

 require_once('../classes/insert.class.php');
 require_once('../classes/updates.class.php');

   $insert = new Insert();
   $updates = new Updates();





 $vendedor = $_SESSION['vendedor'];

 $idcliente = $_SESSION['idcliente'];
 $nomecliente = $_SESSION['nomecliente'];
 $modveiculo = $_SESSION['modveiculo'];
 $placa = $_SESSION['placa'];
 $ano = $_SESSION['ano'];
 $endereco = $_SESSION['endereco'];
 $cidade = $_SESSION['cidade'];
 $telefone = $_SESSION['telefone'];



 $valorprod = $_SESSION['valorprod'];
 $valorserv = $_SESSION['valorserv'];
 $desconto = $_SESSION['desconto'];
 $total = $_SESSION['total'];
 $gastos = $_SESSION['gastos'];

 $lucro = $total - $gastos;



 $tiposerv = $_SESSION['tiposerv'];
 $pagamento = $_SESSION['pagamento'];

 date_default_timezone_set('America/Sao_Paulo');
 $data = date('Y-m-d');
 $hora = date('H:i');





 $insert->insertVenda($vendedor, $idcliente, $gastos, $total, $desconto, $valorserv, $lucro, $pagamento, $tiposerv, $data, $hora);



?>


<?php
                  require("conexao.php");
                  require("conn.php");
                     
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                           mysql_query("SET NAMES 'utf8'");
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                    
                   
                        $quant = $ln['quantidade'];
                        $id3 = $ln['id'];
                       $nome = $ln['nome'];
                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                    
                    
              
  
 $updates ->alterarQuantidade($id3, $quant, $qtd);





                   

} 
 

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
<center>
  <h1>Venda Concluída com Sucesso!</h1>
            
    <br><br><br><br>
  <a href="notafiscal.php" target="_blank"><button type="button" class="btn btn-primary">Gerar Nota Fiscal</button></a>
            
   </center>       


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





