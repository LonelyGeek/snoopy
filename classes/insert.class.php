<?php


require_once('../classes/db.class.php');
 
class Insert extends DB{
  



    public function insertProduto($nome, $quantidade, $valorinicial, $valorfinal){
      
       $sql = "INSERT INTO produtos (nome, quantidade, valorinicial, valorfinal)
VALUES ('$nome', '$quantidade', '$valorinicial', '$valorfinal')";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }
   



    public function insertVenda($vendedor, $nomecliente, $gastos, $total, $desconto, $valorserv, $lucro, $pagamento, $tiposerv, $data, $hora){
      
       $sql = "INSERT INTO vendas (vendedor, cliente, gastos, valorfinal, desconto, valor_serviço, lucrofinal, forma_pagamento, tipo_servico, data, hora)
VALUES ('$vendedor', '$nomecliente', '$gastos', '$total', '$desconto', '$valorserv', '$lucro', '$pagamento', '$tiposerv', '$data', '$hora')";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }





}

?>