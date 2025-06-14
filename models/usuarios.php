<?php

class usuarios
{

    public function Login($correo, $clave) {
    try {
        include 'conexion.php';
        $consultar = $conexion->prepare("SELECT email,password_user,fk_id_role FROM TB_users WHERE correo=? AND clave=?");
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
            $consultar = $conexion->prepare("SELECT * FROM TB_users");
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