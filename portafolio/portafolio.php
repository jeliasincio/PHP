<?php 
    include('cabecera.php');
    include('conexion.php');
   
    if($_POST){ 
        //print_r($_POST);
        $txtNombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $fecha = new DateTime();
        $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];        
        $imagen_temporal = $_FILES['archivo']['tmp_name'];
        
        move_uploaded_file($imagen_temporal,"img/".$imagen);

        $objConexion = new conexion();
        $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$txtNombre', '$imagen', '$descripcion')";
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");
    }

    if($_GET){ 
        $id = $_GET['borrar'];
        $objConexion = new conexion();

        $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
        unlink("img/".$imagen[0]['imagen']);

        $sql = "DELETE FROM `proyectos` WHERE id =". $id;
        $objConexion->ejecutar($sql);
        header("location:portafolio.php");
    }
    $objConexion = new conexion();
    $resultados = $objConexion-> consultar("SELECT * FROM `proyectos`");
    //print_r($resultados);
?>

<br />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" enctype="multipart/form-data" method="post">
                        Nombre del proyecto: <input class="form-control" type="text" name="nombre" required>
                        <br />
                        Imagen del proyecto: <input class="form-control" type="file" name="archivo" required>
                        <br />
                        Descripción:
                        <textarea class="form-control" name="descripcion" cols="30" rows="5" required> </textarea>
                        <br />
                        <input class="btn btn-success" type="submit" value="Grabar">
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultados as $columna){ ?>
                            <tr>
                            <td scope="row"><?php echo $columna['id'];?></td>
                            <td><?php echo $columna['nombre'];?></td>
                            <td><img width="100" src="img/<?php echo $columna['imagen'];?>" alt="Portafolio"></td>
                            <td><?php echo $columna['descripcion'];?></td>
                            <td><a class="btn btn-danger" href="?borrar=<?php echo $columna['id'];?>">X</a>&nbsp;
                                <!-- <a class="btn btn-success" href="?editar=<?php echo $columna['id'];?>">E</a> -->
                            </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


<?php include('cerrar.php'); ?>