<?php
// Incluir aquivo de conexão
include("conn.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$sql = mysql_query("SELECT * FROM produtos WHERE nome LIKE '%".$valor."%'");
 
// Exibe todos os valores encontrados
while ($noticias = mysql_fetch_object($sql)) {
	echo "<a href=\"javascript:func()\" onclick=\"exibirConteudo('".$noticias->id."')\">" . $noticias->nome . "</a><br />";
}
 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>