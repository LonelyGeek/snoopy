

<?php

include("conn.php");
  session_start();


  if(!isset($_SESSION['lista'])){
       
    $_SESSION['lista'] = array();
  }

  //adiciona produto


   if(isset($_GET['acao'])){

     //ADICIONAR CARRINHO
     
     if($_GET['acao'] == 'add'){
      $id = intval($_GET['id']);
      if(!isset($_SESSION['lista'][$id])){



        $_SESSION['lista'][$id] = 1;
      }else{

        $_SESSION['lista'][$id] += 1;
      }
     }

      //REMOVER LISTA


     if($_GET['acao'] == 'del'){
       $id = intval($_GET['id']);
           if(isset($_SESSION['lista'][$id])){
                unset($_SESSION['lista'][$id]);
             }

     }


     //ALTERAR QUANTIDADE

           //ALTERAR QUANTIDADE
         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['lista'][$id] = $qtd;
                  }else{
                     unset($_SESSION['lista'][$id]);
                  }
               }
            }
         }

   }


 




?>


<?php

 require("conexao.php");
 require_once('../classes/busca.class.php');
 require_once('../classes/delete.class.php');
  
  $busca = new Busca(); 
  $delete = new Delete();

     $titulo = "Caixa";
    
  
   

?>

<!DOCTYPE html>

<html>
<head>
  <title>Snoopy Sound Car</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/yellow.css">


</head>
<body>


  <div class="app app-red">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
  <br>
  <center> <img src="../assets/images/logo.jpg" width="150" height="85"></center>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <?php
   if($titulo == 'Painel'){
     echo "<li class='active'>";
   }else{
     echo "<li class='dropdown'>";
   }
  ?>
        <a href="painel.php?id=Painel">
          <div class="icon">
            <i class="fa fa-dashboard" aria-hidden="true"></i>
          </div>
          <div class="title">Painel</div>
        </a>
      </li>
  <?php
   if($titulo == 'Clientes'){
     echo "<li class='active'>";
   }else{
     echo "<li class='dropdown'>";
   }
  ?>
      
        <a href="clientes.php?id=Clientes">
          <div class="icon">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
          <div class="title">Clientes</div>
        </a>
      </li>



      <li  class='active'>
        <a href="caixa.php?id=Caixa">
          <div class="icon">
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
          <div class="title">Caixa</div>
        </a>
      </li>







      <?php
   if($titulo == 'Orçamento'){
     echo "<li class='active'>";
   }else{
     echo "<li class='dropdown'>";
   }
  ?>
        <a href="#" >
          <div class="icon">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
          </div>
          <div class="title">Orçamento</div>
        </a>
        
      </li>




        <?php
   if($titulo == 'Controle de Estoque'){
     echo "<li class='active'>";
   }else{
     echo "<li class='dropdown'>";
   }
  ?>
        <a href="controledeestoque.php?id=Controle de Estoque" >
          <div class="icon">
            <i class="fa fa-cubes" aria-hidden="true"></i>
          </div>
          <div class="title">Controle de Estoque</div>
        </a>

      </li>



    </ul>
  </div>
  
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-red" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> dAdmin2</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="../assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">

              Caixa

        </li>
        <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Buscar...">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
            <div class="title">New Orders</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Ordering</li>
              <li class="dropdown-empty">No New Ordered</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li> -->
        <li class="dropdown notification warning">
        <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
            <div class="title">Unread Messages</div>
            <div class="count">99</div>
          </a>  -->
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Payment Confirmation.."</div>
                      <div class="description">Alan Anderson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">5</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Hello World"</div>
                      <div class="description">Marco  Harmon</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">2</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Order Confirmation.."</div>
                      <div class="description">Brenda Lawson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="title">System Notifications</div>
            <div class="count">5</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Notification</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">8</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">New Order</div>
                      <div class="description">$400 total</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">14</span>
                  Inbox
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Issues Report
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
           
            
          </a>

        </li>
      </ul>
    </div>
  </div>
</nav>

 <!-- <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="#">Website</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Issues</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </div>
</div>  -->


  <div class="row">
    <div class="col-xs-12">
      <div class="card">
    
       

            <div class="card-body ">
          




<div class="step">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="step" >
            <a href= "caixa.php?id=Caixa ">
                <div class="icon fa fa-cube"></div>
                <div class="heading">
                    <div class="title">Produto</div>
                    <div class="description">Passo 1</div>
                </div>
            </a>
        </li>
        <li role="step" class="active">
            <a href="#" role="tab" id="step2-tab" data-toggle="tab" aria-controls="profile">
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






      <table class="table">

 

    <thead> 

           <tr >
            <th >ID</th>
            <th >Produto</th>
            <th >Quantidade</th>
            <th >Pre&ccedil;o</th>
            <th >SubTotal</th>
            <th >Opção</th>

          </tr>
     





    </thead>

      <form action="?acao=up" method="post">
    

      <tfoot>
         <tr>
            <td colspan="5"><input type="submit"  class="btn btn-info" value="Atualizar Lista" /></td>
             
            <tr>
               <td colspan="5"><a href="caixa.php?id=Caixa"><button type="button" class="btn btn-primary"><< Voltar</button></td></a></td>
               <td colspan="5"><a href="caixa3.php?id=Caixa"><button type="button" class="btn btn-success">Continuar >></button></td></a></td>
      </tfoot>

      <tbody>
                  <?php
                  if(count($_SESSION['lista']) == 0){
                       echo '<tr><td colspan="5">Não 
                       há protudo na lista</td></tr>';

                  }else{
                         require("conexao.php");
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                        mysql_query("SET NAMES 'utf8'");
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                  
                   

                       $id3 = $ln['id'];
                       $nome = $ln['nome'];
  ini_set( 'display_errors', 0 );

                       $valor2 = number_format($ln['valorinicial'],2,',','.');
                       $sub2 = number_format($ln['valorinicial'] * $qtd ,2,',','.');

                       $sub2 = ereg_replace( ",", ".", $sub2);

                     
                       $total2 += $sub2;
       

                       $_SESSION['gastos'] = $total2;


                      




                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                    
                   


                     $sub = ereg_replace( ",", ".", $sub);

                        $total += $sub;
                     
                  

                      $_SESSION['total'] = $total;
                      
              

                      echo '


                             <tr>
                                <th>'.$id3.'</th>
                                <th>'.$nome.'</th>
                                <th><input type="text" size="3" name="prod['.$id.']"value="'.$qtd.'"</th>
                             <th>R$ '.$valor.'</th>
                             <th>R$ '.$sub.'</th>
                              <th><a href="?acao=del&id='.$id.'"><button type="button" class="btn btn-danger">Remover</button></a></th>
                                </tr>';







                    } 

                    $total = number_format($total ,2,',','.');
                      echo '<tr>
                                     <td colspan="4"><b>TOTAL</b></td>
                                     <td>R$ <font size="5" color="green">'.$total.'</font></td>

                            <tr>
                           ';


                  }


            ?>

          </tbody>


         




      </form>




  </table>
</center>











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