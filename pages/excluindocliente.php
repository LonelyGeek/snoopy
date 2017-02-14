<?php

 require("conexao.php");
 require_once('../classes/delete.class.php');
 
  $delete = new Delete();

  $id = $_GET['cod'];


  $delete->deleteCliente($id);

  header("Location:clientes.php?id=Clientes"); 
  
   

?>