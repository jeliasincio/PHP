<?php
class conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contrasenia="";
    private $conexion;

    public function __construct(){

        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e ){
            return "Error en la conexión".$e;
        }
    }

    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }
}

?>