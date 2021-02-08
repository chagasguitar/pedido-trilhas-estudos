<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://use.fontawesome.com/919a1a97de.js"></script>
    
</head>
<body>
        <?php 
                    include_once 'pedidos_services.php';
                    
                    $pedidos = pegarPedidos();
                    
                    $qtdpedidos= count($pedidos);
                    $divcard='';

                    foreach ($pedidos as $value){
                        $id = $value["id"];
                        $nome = $value["name"];
                        $email = $value["email"];
                        $duracao = $value["duracao"];
                        $estilo  = $value["estilos"];
                        $ref = $value["ref"];
                        $desc = $value["desc"];

                    
                        $divcard .= 
                        "<div class='divcard'>
                            <div class='divinfo'>

                               <div class='divcampoinfo'> <h1 class='divinfo'>$estilo</h1>
                                    <p class='divinfo'>$desc</p>
                                    <p class='divinfor'>$duracao - segundos</p><br></div><br>

                               <div class='divcampoinfo'> 
                                    <p class='divinfo'>$nome</p>
                                    <p class='divinfo'>$email</p></div>

                                    <div class = 'icon'>
                                        <a href='/excluir_pedido.php?id=$id'>
                                        <i class='fa fa-times' aria-hidden='true'></i>
                                        </a>
                                    </div>
                                    <div class = 'icon'>
                                        <a href='editar_pedido.php?id=$id'>
                                        <i class='fa fa-pencil' aria-hidden='true'></i>
                                        </a>
                                    </div><br>
                                <p class='divinfo'>$ref</p>
                            </div>

                        </div>"; 
                        
                    }

                    
                    
         echo "<div class='headdiv'> 

                    <div class='headelement'>
                        <p class='headelement'>$qtdpedidos</p>
                        <h1>Pedidos de Trilhas</h1> 
                        <button><a href='/adicionar_pedido.php'>Adicionar</a></button>
                    </div>

                </div>

                <div class='divcards'>$divcard</div>";
                
               
                

        ?>
    
</body>
</html>
