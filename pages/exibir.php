<?php
// Incluir aquivo de conex�o
include("conn.php");
 
// Recebe a id enviada no m�todo GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysql_query("SELECT * FROM produtos WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma vari�vel
$noticia = mysql_fetch_object($sql);
 
// Exibe o conte�do da notica


echo "<h2> Informa��es do produto:</h2>";

echo "<font size='4'><b>Produto:</b> ".$noticia->nome."</font><br>";
echo "<font size='4'><b>Quantidade:</b> ".$noticia->quantidade."</font><br>";
echo "<font size='4'><b>Valor: </b>R$ ".$noticia->valorfinal."</font><br>";
echo "<br>";
echo '<a href="caixa2.php?acao=add&id='.$noticia->id.'"><button type="button" class="btn btn-primary">Adicionar na lista</button></a>';
 
// Acentua��o
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>