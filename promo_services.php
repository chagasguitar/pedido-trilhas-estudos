<?php
    
    function pegarPromocoes(){
        $promocoes = file_get_contents("./promo.json");
        $promocoes = json_decode($promocoes,true);
        return $promocoes;
    }

    function verificarCodigo($cod){
      
       $promocoes = pegarPromocoes();
    
       for($i = 0; $i < count($promocoes); $i++){
        

              if ($cod["codpromo"] === $promocoes[$i]["promocional"]){
                 $promocao = $promocoes[$i]; 
               
                return $promocao;
                
              }  
        }
            
        return  false;
       
    }
    
?>
