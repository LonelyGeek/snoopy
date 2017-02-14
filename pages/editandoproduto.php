<?php

   require("conexao.php");
   require('../classes/updates.class.php');

   $updates = new Updates();

   $id = $_GET['id2'];
   $nome= $_POST['nome'];
   $quantidade = $_POST['quantidade'];
   $valorinicial = $_POST['valorinicial'];
   $valorfinal = $_POST['valorfinal'];


   $updates->alterarProduto($id, $nome, $quantidade, $valorinicial, $valorfinal);

   header("Location:controledeestoque.php?id=Controle de Estoque"); 


?>