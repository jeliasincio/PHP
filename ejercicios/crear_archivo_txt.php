<?php
$directorioArchivo = "archivos/archivo2.txt";
$contenido = "Hola mundo, saludos desde Perú";
$archivoACrear = fopen($directorioArchivo,"w");

fwrite($archivoACrear,$contenido);

fclose($archivoACrear);

?>