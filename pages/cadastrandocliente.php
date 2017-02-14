<?php


 require("conexao.php");


 $nome = $_POST['nome'];
 $cpf = $_POST['cpf']; 
 $endereco = $_POST['endereco'];
 $cidade = $_POST['cidade'];
 $modveiculo = $_POST['modveiculo'];
 $placa = $_POST['placa'];
 $ano = $_POST['ano'];
 $telefone = $_POST['telefone'];


$sql = "INSERT INTO clientes (nome, cpf, endereco, cidade, modveiculo, placa, ano, telefone)
VALUES ('$nome', '$cpf', '$endereco', '$cidade', '$modveiculo', '$placa', '$ano', '$telefone')";



$conn->query('SET NAMES utf8');
$conn->query($sql);


header("Location:clientes.php?id=Clientes"); 

?>