<?php

class usuarios
{

    public function Login($email, $password_user) {
    try {
        include 'conexion.php';
        $consultar = $conexion->prepare("SELECT fk_id_role, email, password_user FROM TB_users WHERE email=? AND password_user=?");
        $consultar->execute([$email, $password_user]);
        $lista = $consultar->fetchAll(PDO::FETCH_ASSOC);
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
            $lista = $consultar->fetchAll(PDO::FETCH_ASSOC);
            $conexion = null;
            return $lista;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

?>