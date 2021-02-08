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
            include_once('pedidos_services.php');
            include_once('promo_services.php');
            $estilos = array ("Pop", "Rock", "Jazz", "Bolero");
            
        
            if($_SERVER['REQUEST_METHOD'] === 'GET'){
               

               If (empty($_GET)){
                    $desc = "";
                    echo "<form action = 'adicionar_pedido.php' method='post'>
                                <input type = 'hidden' name='desc' value=$desc><br>
                                Name:    <input type='text' name='name'><br>
                                E-mail:  <input type='text' name='email'><br>
                                Duração: <input type='number' name='duracao'><br>
                                Estilos:  <select name='estilos'>
                                
                                            
                                <option></option>";
                                foreach ($estilos as  $value){ 
                                    echo "<option value=\"$value\" >$value</option>"; 
                                    }
                        echo      "</select><br>
                                Referências: <textarea name='ref' rows='5' cols='40'></textarea><br>
                                <input type='submit'>
                            </form>";
                            return;
                    
               }else {
                
                $promocao = verificarCodigo($_GET);
                $promonome = $promocao["promocional"];
                $desc = $promocao["promocional"];
                $estilo = "<option></option>";

                foreach ($estilos as  $value){ 
                                        $estilo .= "<option value=\"$value\" >$value</option>"; 
                                        }

                    if($promocao){
                
                
                                echo "Você recebeu $desc desconto pelo código promocional $promonome!" ;
                                
                                echo "<form action = 'adicionar_pedido.php' method='post'>
                                Desconto: <input type = 'text' name='desc' value= '$desc'><br>
                                Name:    <input type='text' name='name'><br>
                                E-mail:  <input type='text' name='email'><br>
                                Duração: <input type='number' name='duracao'><br>
                                Estilos:  <select name='estilos'>
                                 $estilo           
                                </select><br>
                                Referências: <textarea name='ref' rows='5' cols='40'></textarea><br>
                                <input type='submit'><br>
                                
                            </form>";
                                
                                
                                
                            return;
                    }else {
                        echo "Código promocional inválido!";
                        return;
                    }
                            
                return;
               }
                
            }  
            $pedidos = pegarPedidos();
            $_POST["id"] = md5(uniqid());
            $pedidos[] = $_POST;
            
            
        
            salvarPedidos($pedidos);
            echo "Pedido realizado com sucesso!"

            
           
    ?>
    
    <a href="/">Voltar para lista</a>
        
    
    
</body>
</html>
