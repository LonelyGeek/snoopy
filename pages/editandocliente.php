<?php

   require("conexao.php");
   require('../classes/updates.class.php');

   $updates = new Updates();

   $id = $_GET['id2'];
   $nome= $_POST['nome'];
   $cpf = $_POST['cpf'];
   $endereco = $_POST['endereco'];
   $cidade = $_POST['cidade'];
   $modveiculo = $_POST['modveiculo'];
   $placa = $_POST['placa'];
   $ano = $_POST['ano'];
   $telefone = $_POST['telefone'];


   echo $id.'<br>';
   echo $nome.'<br>';
   echo $cpf.'<br>';
   echo $endereco.'<br>';
   echo $cidade.'<br>';
   echo $modveiculo.'<br>';
   echo $placa.'<br>';
   echo $ano.'<br>';
   echo $telefone.'<br>';


   $updates->alterarCliente($id, $nome, $cpf, $endereco, $cidade, $modveiculo, $placa, $ano, $telefone);

   header("Location:clientes.php?id=Clientes"); 


?>