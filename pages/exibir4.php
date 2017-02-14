<?php
// Incluir aquivo de conexão
session_start();
include("conn.php");
 
// Recebe a id enviada no método GET
$id = $_GET['id'];
 
// Seleciona a noticia que tem essa ID
$sql = mysql_query("SELECT * FROM clientes WHERE id = '".$id."'");
 
// Pega os dados e armazena em uma variável
$busca = mysql_fetch_object($sql);
 
// Exibe o conteúdo da notica

echo "<h2><font color='#095077'> Informa&ccedil&otildees do Cliente:</font></h2>";

echo "<font size='4'><b>Nome:</b> ".$busca->nome."</font><br>";
echo "<font size='4'><b>Modelo do ve&iacuteculo:</b> ".$busca->modveiculo."</font><br>";
echo "<font size='4'><b>Placa:</b> ".$busca->placa."</font><br>";
echo "<font size='4'><b>Ano:</b> ".$busca->ano."</font><br>";
echo "<font size='4'><b>Endere&ccedilo:</b> ".$busca->endereco."</font><br>";
echo "<font size='4'><b>Cidade:</b> ".$busca->cidade."</font><br>";
echo "<font size='4'><b>Telefone:</b> ".$busca->telefone."</font><br>";


$_SESSION['idcliente'] = $busca->id;
$_SESSION['nomecliente'] = $busca->nome;
$_SESSION['modveiculo'] = $busca->modveiculo;
$_SESSION['placa'] = $busca->placa;
$_SESSION['ano'] = $busca->ano;
$_SESSION['endereco'] = $busca->endereco;
$_SESSION['cidade'] = $busca->cidade;
$_SESSION['telefone'] = $busca->telefone;






echo '








';

echo '





<form action="finalo.php?id=Orçamento" method="POST" class="form form-horizontal"> 



<h2><font color="#095077">Vendedor: </font></h2>



 <div class="form-group">
        
        <div class="col-md-3">
          
<select name="select2" class="select2">
      <option value="Alisson">Alisson</option>
      <option value="Higor">Higor</option>
      <option value="Henrique">Henrique</option>
      <option value="Micaela">Micaela</option>
      <option value="Outros 1">Outros 1</option>
      <option value="Outros 2">Outros 2</option>
</select>


            
          </div>
        </div>
      </div>




<h2><font color="#095077">Forma de pagamento: </font></h2>
     
<div class="radio radio-inline">
          <input type="radio" name="radio2" id="radio5" value="Dinheiro">
          <label for="radio5">
              <font size="4"> Dinheiro </font>
          </label>
      </div>
      <div class="radio radio-inline">
          <input type="radio" name="radio2" id="radio6" value="Cartão de Crédito" checked>
          <label for="radio6">
             <font size="4"> Cart&atildeo </font>
          </label>
      </div>
    </div>





<h2><font color="#095077">Servi&ccedilo: </font></h2>



 <div class="form-group">
        <label class="col-md-1 control-label">Servi&ccedilo</label>
        <div class="col-md-3">
          <input type="text" name="tiposerv" class="form-control" aria-label="Amount (to the nearest dollar)">
            
          </div>
        </div>
      </div>







 <div class="form-group">
        <label class="col-md-1 control-label">Valor</label>
        <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input type="text" name="valorserv" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>



<h2><font color="#095077">Desconto: </font></h2>



<div class="form-group">
        
        <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon">R$ -</span>
            <input type="text" name="desconto" class="form-control" aria-label="Amount (to the nearest dollar)">
          </div>
        </div>
      </div>


<h2><font color="#095077">Observa&ccedil&atildeo: </font></h2>

 <div class="form-group">
        
        <div class="col-md-12">
          <input type="textarea" name="obs" class="form-control" aria-label="Amount (to the nearest dollar)">
            
          </div>
        </div>
      </div>







<br><br>


 <button type="submit" class="btn btn-success">Continuar >></button>
</form>

';


 
// Acentuação
header("Content-Type: text/html; charset=ISO-8859-1",true);
?>