<?php
	include ('../pdf/mpdf.php');

     session_start();
include("conn.php");

 $vendedor = $_SESSION['vendedor'];

 $idcliente = $_SESSION['idcliente'];
 $nomecliente = $_SESSION['nomecliente'];
 $modveiculo = $_SESSION['modveiculo'];
 $placa = $_SESSION['placa'];
 $ano = $_SESSION['ano'];
 $endereco = $_SESSION['endereco'];
 $cidade = $_SESSION['cidade'];
 $telefone = $_SESSION['telefone'];

 $obs = $_SESSION['obs'];


 if($obs == ""){

 	$obs = "Nada consta.";
 }



 $valorprod = $_SESSION['valorprod'];
 $valorserv = $_SESSION['valorserv'];
 $desconto = $_SESSION['desconto'];
 $total = $_SESSION['total'];
 $gastos = $_SESSION['gastos'];





 $lucro = $total - $gastos;



 $tiposerv = $_SESSION['tiposerv'];



 if($tiposerv == ""){

 	$tiposerv = "Nada consta.";
 }

 $pagamento = $_SESSION['pagamento'];

 date_default_timezone_set('America/Sao_Paulo');
 $data = date('d-m-Y');
 $hora = date('H:i');

          












$arquivo = "Nota Fiscal.pdf";

$mpdf = new mPDF();  



	$pagina = 
		"
		";





$topo = '

<table style="undefined;table-layout: fixed; width: 727px" border="1"> 
<colgroup>
<col style="width: 144px">
<col style="width: 492px">
<col style="width: 91px">
</colgroup>
  <tr>
    <th colspan="2">Snoopy Sound Car LTDA. Nota Fiscal</th>
    <th rowspan="2"  width="20%">NF</th>
  </tr>
  <tr>
    <td width="20%"><font size="2">Data de Recebimento</font><br>____/____/______ </td>
    <td><font size="2">Identificação e assinatura do recebedor</font><br>______________________________________________________</td>
  </tr>
</table>

<h3>Loja</h3>

<table style="undefined;table-layout: fixed; width: 727px" border="1">
<colgroup>
<col style="width: 216px">
<col style="width: 109px">
<col style="width: 192px">
</colgroup>
  <tr>
    <td><font size="3">Nome / Razão social</font><br>Snoopy Sound Car</td>
    <td colspan="2"><font size="3">CNPJ</font><br>26.645.427/0001-30</td>
  </tr>
  <tr>
    <td colspan="2"><font size="3">Endereço</font><br>Av. Alameda Conj. 1HI Rua 35 Casa 20 Loja 01</td>
    <td><font size="3">Email</font><br>snoopysoundcar@gmail.com</td>
  </tr>
  <tr>
    <td><font size="3">Cidade</font><br>Novo Gama</td>
    <td><font size="3">UF</font><br>GO</td>
    <td><font size="3">Telefone</font><br>61 99285-2770</td>
    
  </tr>
</table>


<h3>Cliente</h3>

<table style="undefined;table-layout: fixed; width: 727px" border="1">
<colgroup>
<col style="width: 220px">
<col style="width: 259px">
<col style="width: 216px">
</colgroup>
  <tr>
    <td colspan="3"><font size="3">Nome</font><br>'.$nomecliente.'</td>
  </tr>
  <tr>
    <td><font size="3">Endereço</font><br>'.$endereco.'</td>
    <td><font size="3">Cidade</font><br>'.$cidade.'</td>
    <td><font size="3">Telefone</font><br>'.$telefone.'</td>
  </tr>
</table>

<h3>Venda</h3>

<table style="undefined;table-layout: fixed; width: 727px" border="1">
<colgroup>
<col style="width: 222px">
<col style="width: 101px">
<col style="width: 130px">
<col style="width: 130px">
</colgroup>
  <tr>
    <td colspan="4"><font size="3">Vendedor</font><br>'.$vendedor.'</td>
  </tr>
  <tr>
    <td><font size="3">Serviço</font><br>'.$tiposerv.'</td>
    <td colspan="2"><font size="3">Valor do serviço</font><br>R$ '.$valorserv.'</td>
    <td><font size="3">Desconto</font><br>R$ '.$desconto.'</td>
  </tr>
  <tr>
    <td><font size="3">Data de emissão</font><br>'.$data.'</td>
    <td><font size="3">Hora de saída</font><br>'.$hora.'</td>
    <td><font size="3">Forma de pagamento</font><br>'.$pagamento.'</td>
    <td><font size="3">Total da venda</font><br>R$ '.$total.'</td>
  </tr>
</table>


<h3>Lista de Produtos</h3>

<table style="undefined;table-layout: fixed; width: 727px" border="1">
  <tr>
    <th width="15%">id</th>
    <th width="20%">Produto</th>
    <th width="20%">Quantidade</th>
    <th width="22%">Valor Produto</th>
    <th>Sub Total</th>
  </tr>
</table>

  ';






 $mpdf->WriteHTML($topo);
                      

 

 $mpdf->WriteHTML($pagina);
 

    
                    

 
       

                         require("conexao.php");
                    foreach($_SESSION['lista'] as $id=> $qtd){
                        $sql = "SELECT * FROM produtos WHERE id= '$id'";
                           mysql_query("SET NAMES 'utf8'");
                       $qr = mysql_query($sql) or die(mysql_error());

                       $ln = mysql_fetch_assoc($qr);
                    
                   

                        $id3 = $ln['id'];
                       $nome = $ln['nome'];
                       $valor = number_format($ln['valorfinal'],2,',','.');
                       $sub = number_format($ln['valorfinal'] * $qtd ,2,',','.');
                      
                
              
   $sa = "

   
   
   

<table style='undefined;table-layout: fixed; width: 727px' border='1'>
  <tr>
    <td>$id3</td>
    <td>$nome </td>
    <td width='20%'>$qtd </td>
    <td>R$ $valor</td>
   <td>R$ $sub</td>
  </tr>
</table>

                             
                               ";


$mpdf->WriteHTML($sa);
}

 $sa2 = "

   
   
   

<table style='undefined;table-layout: fixed; width: 727px' border='1'>
  <tr>
    <td><b>Total</b></td>
    <td width='22%'>R$ $total </td>
  </tr>
</table>


<h3>Observação</h3>

<table style='undefined;table-layout: fixed; width: 727px' border='1'>
  <tr>
    
    <td >$obs </td>
  </tr>
</table>

                             
                               ";


$mpdf->WriteHTML($sa2);









$mpdf->Output($arquivo, 'I');

// I - Abre no navegador
// F - Salva o arquivo no servido
// D - Salva o arquivo no computador do usuário
?>
