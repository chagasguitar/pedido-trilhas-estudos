<?php

    function pegarPedidos(){
        $pedidos = file_get_contents("./pedidos.json");
        $pedidos = json_decode($pedidos,true);
        return $pedidos;
    }

    function salvarPedidos($pedidos){
    
        file_put_contents ('pedidos.json', json_encode($pedidos, JSON_UNESCAPED_UNICODE));
        
    }
    
    function acharPorId($id){
        $pedidos = pegarPedidos();
        foreach($pedidos as $pedido){
                    
            if($id === $pedido['id']){

                return $pedido;
            }
        }
    }

    function acharIndexPorId($id){
        $pedidos = pegarPedidos();
        for ($i = 0; $i < count($pedidos); $i++){
            if($pedidos[$i]['id']=== $id){
              
                return $i;
            }
        }
    }

    function excluirPedidoPorId($id){
        $pedidos = pegarPedidos();
        $i = acharIndexPorId($id);

            
            if($pedidos[$i]['id'] === $id){
                array_splice($pedidos,$i, 1);
                salvarPedidos($pedidos);
            return;
            }
                
                       
    }
        
     
        



?>