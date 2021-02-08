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
    
   <?php
            include_once ('pedidos_services.php');
            $pedidos = pegarPedidos();
            $estilos = array ("Pop", "Rock", "Jazz", "Bolero");

            if($_SERVER['REQUEST_METHOD'] === 'GET'){

            
                
                $pedido = acharPorId($_GET['id']);
            
                
    
                        $id = $pedido['id'];
                        $name = $pedido['name'];
                        $email = $pedido['email'];
                        $duracao = $pedido['duracao'];
                        $estilo = $pedido['estilos'];
                        $comentario = $pedido['ref'];

                
                echo "<form action = 'editar_pedido.php' method='post'>
                        
                                 <input type='hidden' name='id' value='$id'><br>
                        Name:    <input type='text' name='name' value='$name'><br>
                        E-mail:  <input type='text' name='email' value='$email'><br>
                        Duração: <input type='number' name='duracao' value='$duracao'><br>
                        Estilos:  <select name='estilos'>
                                   
                        <option></option>";

                        foreach ($estilos as $value){ 
                            
                            if($value === $estilo){
                                    echo "<option name=\"$value\" selected '$estilo'>$value</option>"; 
                                }else{
                                    echo "<option name=\"$value\">$value</option>";
                                }
                            }
                echo      "</select><br>
                        Referências: <textarea name='ref' rows='5' cols='40' >$comentario</textarea><br>
                        <input type='submit'>
                    </form>";
                    
                    return;
            } 
                
                        
            
            
                        $i = acharIndexPorId($_POST['id']);
                       
                        $pedidos[$i] = $_POST; 
                        
                        
                        salvarPedidos($pedidos);
                        echo "Pedido editado com sucesso";



                        
            
           
    ?>
    
    <a href="/">Voltar para lista</a>
        
    
    
</body>
</html>
