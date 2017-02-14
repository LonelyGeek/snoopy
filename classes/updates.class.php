<?php


require_once('../classes/db.class.php');
 
class Updates extends DB{
  
    

    public function alterarCliente($id, $nome, $cpf, $endereco, $cidade, $modveiculo, $placa, $ano, $telefone){
      
       $sql = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', endereco = '$endereco', cidade = '$cidade', modveiculo = '$modveiculo', placa = '$placa', ano = '$ano', telefone = '$telefone' WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }




        public function alterarProduto($id, $nome, $quantidade, $valorinicial, $valorfinal){
      
       $sql = "UPDATE produtos SET nome = '$nome', quantidade = '$quantidade', valorinicial = '$valorinicial', valorfinal = '$valorfinal' WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


      public function alterarQuantidade($id, $quantidade, $retirada){
       
      



       $quantidade2 = $quantidade - $retirada;
      
       $sql = "UPDATE produtos SET quantidade = '$quantidade2' WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


}

?>