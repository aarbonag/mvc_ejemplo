<?php

class Conexion{
    public static function conectar(){
        $conexion = new mysqli("localhost","testphp","t2stphp","mvc_lab");
        if ($conexion->connect_error){
            die("Error de conexion: " . $conexion->connect_error);
        }
        return $conexion;
    }
}
?>
