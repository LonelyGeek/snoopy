<?php
// Incluir aquivo de conexão
include("conn.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql = mysql_query("SELECT * FROM clientes WHERE nome LIKE '%".$valor."%'");
 
// Exibe todos os valores encontrados
while ($busca = mysql_fetch_object($sql)) {
	echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$busca->id."')\">" . $busca->nome . "</a><br />";
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>