<h2> <font color='#095077'>Lista de produtos </font> </h2>
     <table class="table">
     <thead>
        <tr>
           <th>Id</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor Unidade</th>
          <th>Sub Total</th>
        </tr>
      </thead>



<?php

     session_start();
include("conn.php");

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
                      
                
              
   $sa = '

                  
                             <tr>
                               <th>'.$id3.'</th>
                                <th>'.$nome.'</th>
                                <th>'.$qtd.'</th>
                             <th>R$ '.$valor.'</th>
                             <th>R$ '.$sub.'</th>
                             
                                </tr>';





 echo $sa;

                   

} 
 

?>