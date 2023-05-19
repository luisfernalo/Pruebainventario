<?php
//include("..\modelo\conexion.php");

if(!empty($_POST["btnmodificar"])){
    
  
    if( !empty($_POST["nombre"]) and   
        !empty($_POST["referencia"]) and
        !empty($_POST["precio"]) and     
        !empty($_POST["peso"]) and   
        !empty($_POST["categoria"] ) and
        !empty($_POST["stock"]) 
        ){    
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];
            $referencia=$_POST["referencia"];
            $precio=$_POST["precio"];
            $peso=$_POST["peso"];
            $categoria=$_POST["categoria"];
            $stock=$_POST["stock"];

            $insert = "UPDATE inventario SET  nombre='$nombre' , referencia='$referencia', precio='$precio', peso='$peso', categoria='$categoria', stock='$stock' where id=$id ";
            
          
           //$resultado = mysqli_connect($conexion, $insert);
            $resultado = $conexion->query($insert);
            
                if($resultado){
                    header("location:index.php");
                }else{
                    echo '<div class="alert alert-danger">Error al modificar</div>';
                }
        }else{
            echo '<div class="alert alert-warning">campos vacios</div>';
        }
    }  
?>