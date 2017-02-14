<?php

 require("conexao.php");
 require_once('../classes/busca.class.php');
 require_once('../classes/delete.class.php');
  
  $busca = new Busca(); 
  $delete = new Delete();

     $titulo = $_GET['id'];
    
  
   

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



      <li class="dropdown">
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
        <a href="orcamento.php?id=Orçamento" >
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

              <?php
                $titulo = $_GET['id'];
                 echo $titulo;

              ?>

        </li>
       <!-- <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Buscar...">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li> -->
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
            <div class="count">0</div>
          </a>
       <!--   <div class="dropdown-menu">
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
          </div> -->
        </li>
        <li class="dropdown profile">
          <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
            <!--   <img class="profile-img" src="../assets/images/profile2.png"> -->
            <div class="title">Profile</div>
          </a>
       <!--   <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Scott White</h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Perfil
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Notificações
                </a>
              </li>
              <li>
                <a href="#">
                  Ajuda
                </a>
              </li>
              <li>
                <a href="#">
                  Sair
                </a>
              </li>
            </ul>
          </div>-->
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