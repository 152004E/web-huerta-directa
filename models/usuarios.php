<?php

class usuarios
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
    public function Registrar($correo, $clave, $perfil_usuario, $estado) {}
   

    public function ConsultaGeneral() {}

    public function ConsultaEspecifica($dato, $valor) {}

    public function Eliminar($id) {}
}

class Administrador extends usuarios
{
    public function ConsultaGeneral() {
        try {
            include 'conexion.php';
            $consultar = $conexion->prepare("SELECT * FROM usuarios");
            $consultar->execute();
            $lista = $consultar->fetchAll(PDO::FETCH_NUM);
            $conexion = null;
            return $lista;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>