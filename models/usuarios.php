<?php

class usuario
{

    public function Login($correo, $clave) {
    try {
        include 'conexion.php';
        $consultar = $conexion->prepare("SELECT correo,clave,perfil_usuario,estado FROM usuario WHERE correo=? AND clave=?");
        $consultar->execute([$correo, $clave]);
        $lista = $consultar->fetchAll(PDO::FETCH_NUM);
        $conexion = null;
        return $lista;
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    }

    public function ConsultaGeneral() {}

    public function ConsultaEspecifica($dato, $valor) {}

    public function Eliminar($id) {}
}
?>