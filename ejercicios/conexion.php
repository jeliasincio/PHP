<?php
    $servidor="localhost";
    $usuario="root";
    $contrasenia="";
try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion -> setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_EXCEPTION);
    
    //$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Aprendiendo Php con Mysql', 'fot.jpg')";
    $sql="SELECT * FROM `fotos`";
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    foreach($resultado as $xxx){
        echo $xxx['nombre']."<br />";
    }
    echo "Conexión establecida correctamente";
}catch(PDOException $error){
    echo "Error de conexión ".$error;
}
?>