<?php
//include("..\modelo\conexion.php");

if(!empty($_POST["btnregistrar"])){
    
  
    if( !empty($_POST["nombre"]) and   
        !empty($_POST["referencia"]) and
        !empty($_POST["precio"]) and     
        !empty($_POST["peso"]) and   
        !empty($_POST["categoria"] ) and
        !empty($_POST["stock"]) 
        ){    
            
            $nombre=$_POST["nombre"];
            $referencia=$_POST["referencia"];
            $precio=$_POST["precio"];
            $peso=$_POST["peso"];
            $categoria=$_POST["categoria"];
            $stock=$_POST["stock"];
            $fcreacion = date("Y-m-d ");
            $fuventa = date("Y-m-d ");

            $insert = "INSERT INTO inventario ( nombre, referencia, precio, peso, categoria, stock, fechacreacion, fechauventa) 
                        VALUES ('$nombre','$referencia','$precio','$peso','$categoria','$stock','$fcreacion','$fuventa')";
            
          
           //$resultado = mysqli_connect($conexion, $insert);
            $resultado = $conexion->query($insert);
            
                if($resultado){
                    echo '<div class="alert alert-success">Registro correcto</div>';
                }else{
                    echo '<div class="alert alert-danger">Error de registro</div>';
                }
        }else{
            echo '<div class="alert alert-warning">Error de registro</div>';
        }
    }  
?>