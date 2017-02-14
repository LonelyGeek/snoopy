<?php


require_once('../classes/db.class.php');
 
class Delete extends DB{
  
    

    public function deleteCliente($id){
 
       $sql = "DELETE FROM clientes WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }




    public function deleteProduto($id){

       $sql = "DELETE FROM produtos WHERE id = $id";
        
       self::conn()->query('SET NAMES utf8');
        
       return self::conn()->query($sql);
    }


}

?>