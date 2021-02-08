<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adicionar Pedido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="/">Voltar para lista</a> 
   <?php
            include_once ('pedidos_services.php');
            $pedidos = pegarPedidos();

            if($_SERVER['REQUEST_METHOD'] === 'GET'){

                
                excluirPedidoPorId($_GET['id']);
                
    
                
            }

                        
        
            
                     
            
           
    ?>
    
    
     
    
    
</body>
</html>
