<?php
    if($_POST){
        //print_r($_POST);
        print_r($_FILES['archivo']);
        $origen_archivo = $_FILES['archivo']['tmp_name'];
        $destino_archivo = $_FILES['archivo']['name'];
        move_uploaded_file($origen_archivo,$destino_archivo);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo en el mismo directorio</title>
</head>
<body>
    <form action="#" enctype="multipart/form-data" method="post">
       <div><input type="file" name="archivo" id=""></div>
       <div>&nbsp;</div>
       <div><input type="submit" name="enviar" value="Enviar Información"></div>
    </form>
</body>
</html>