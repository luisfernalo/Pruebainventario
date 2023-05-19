<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("select * from inventario where id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c247776ef4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-md-center">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Modificar producto</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
                include "controlador/modificar_producto.php";


                while($datos=$sql->fetch_object()){?>

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value = "<?= $datos->nombre ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Referencia</label>
                        <input type="text" class="form-control" name="referencia" value = "<?= $datos->referencia ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" value = "<?= $datos->precio ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Peso</label>
                        <input type="text" class="form-control" name="peso" value = "<?= $datos->peso ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Categoria</label>
                        <input type="text" class="form-control" name="categoria" value = "<?= $datos -> categoria ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock" value = "<?= $datos -> stock ?>">
                    </div>

                    <?php
                }
            ?>

            
            <button type="submit" class=" btn btn-primary " name="btnmodificar" value="ok">Modificar</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>