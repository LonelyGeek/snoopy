<?php


require_once('../classes/db.class.php');

 
class Busca extends DB{
  
    public function selecionarCliente(){
  	  
  	   $sql = "SELECT * FROM clientes";
        
       self::conn()->query('SET NAMES utf8');
        
  	   return self::conn()->query($sql);
    }



    public function selecionarCliente2($id){
  	  
  	   $sql = "SELECT * FROM clientes where id = $id ";
        
       self::conn()->query('SET NAMES utf8');
        
  	   return self::conn()->query($sql);
    }




    public function selecionarProduto(){
      
       $sql = "SELECT * FROM produtos";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


       public function selecionarProduto2($id){
      
       $sql = "SELECT * FROM produtos where id = $id ";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


    public function selecionarAdmin($usuario, $senha){
      
       $sql = "SELECT * FROM administrador where usuario = '$usuario' and senha = '$senha'  LIMIT 1";
        
       self::conn()->query('SET NAMES utf8');
        
        $buscarusuario = self::conn()->prepare($sql);
        $buscarusuario->execute();
    
        $resultado = $buscarusuario->fetch(PDO::FETCH_ASSOC);

        return $resultado;
    }




       public function selecionarVendaDia($data){
      
       $sql = "SELECT * FROM vendas Where data = '$data'";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }




       public function contarClientes(){
      
       $sql = "SELECT COUNT(*) FROM clientes";
      
        
       self::conn()->query('SET NAMES utf8');
        
       $stmt = self::conn()->query($sql);


       while($row = $stmt->fetch()) {
         echo $row[0];
       } 
   
        
    }


        public function selecionarVendaMes($mes){
      
       $sql = "SELECT * FROM vendas  WHERE MONTH(data)='$mes'";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }



            public function selecionarVendaSemana($semana){
      
       $sql = "SELECT * from vendas where WEEK('$semana')";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }








}

?>