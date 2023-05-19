<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c247776ef4.js" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta = confirm("Esta seguro de eliminar el registro");
            return respuesta;
        }

    </script>
    <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_producto.php";

    ?>

    <h1 class="text-center p-3">Inventario</h1>
    <div class="row justify-content-md-center">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de producto</h3>
            <?php
                
                include "controlador/registro.php";
            ?>
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Peso</label>
                <input type="text" class="form-control" name="peso">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stock</label>
                <input type="text" class="form-control" name="stock">
            </div>
            <button type="submit" class=" btn btn-primary " name="btnregistrar" value="ok">Registrar</button>
        </form>
    </div>
    <br><br><br><br>

    <div class="container-fluid">
            <h3 class="text-center text-secondary">Listado de productos</h3>        
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">F Creacion</th>
                    <th scope="col">F U venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query("select * from inventario");
                        while($datos=$sql->fetch_object()){?>
                            <tr>
                                <td><?= $datos-> id?></td>
                                <td><?= $datos-> nombre?></td>
                                <td><?= $datos-> referencia?></td>
                                <td><?= $datos-> precio?></td>
                                <td><?= $datos-> peso?></td>
                                <td><?= $datos-> categoria?></td>
                                <td><?= $datos-> stock?></td>
                                <td><?= $datos-> fechacreacion?></td>
                                <td><?= $datos-> fechauventa?></td>
                                <td>
                                    <a href="modificar_producto.php?id=<?= $datos-> id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square" ></i></a> 
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos-> id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left" ></i></a>
                                </td>
                            </tr>
                            <?php
                        }

                    ?>
                    
                </tbody>
            </table>
        </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>