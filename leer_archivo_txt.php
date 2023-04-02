<?php
$archivo = "archivos/archivo.txt";
$abrirArchivo = fopen($archivo,"r");
$leerArchivo = fread($abrirArchivo,filesize($archivo));

echo $leerArchivo;

?>