<?php


 require("conexao.php");

 require_once('../classes/insert.class.php');
 
  $insert = new Insert();


 $nome = $_POST['produto'];
 $quantidade = $_POST['quantidade']; 
 $valorinicial = $_POST['valorinicial'];
 $valorfinal = $_POST['valorfinal'];

 $insert->insertProduto($nome, $quantidade, $valorinicial, $valorfinal);


header("Location:controledeestoque.php?id=Controle de Estoque"); 

?>