<?php
session_start();
include("conn.php");

 require_once('../classes/busca.class.php');
 $busca = new Busca(); 


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


  if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
    

     $resultado = $busca->selecionarAdmin($usuario, $senha);

 

    if(empty($resultado)){
    	$_SESSION['loginErro'] = "Usuario ou senha inválido";
    	header('Location: ../index.php');
    }else{

    	header('Location: ../pages/painel.php?id=Painel');
    }
    


  }else{
    $_SESSION['loginErro'] = "<b>Usuário ou senha inválido.</b>";
  	header('Location: ../index.php');
  }








 

?>