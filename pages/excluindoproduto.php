<?php

 require("conexao.php");
 require_once('../classes/delete.class.php');
 
  $delete = new Delete();

  $id = $_GET['cod'];


  $delete->deleteProduto($id);

  header("Location:controledeestoque.php?id=Controle de Estoque"); 
  
   

?>