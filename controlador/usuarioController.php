<?php

require_once "./modelo/conexion.php";

class UsuarioController {
    public function mostrarUsuarios(){
        $conexion = Conexion::conectar();
        $sql = "SELECT * FROM usuarios";
        $resultado = $conexion->query($sql);

        include "./vista/usuarios.php";
    }
}
?>
