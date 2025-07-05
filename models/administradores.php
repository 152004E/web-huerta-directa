<?php
class administradores {
    public function ObtenerAdministradores() {
        try {
            include "conexion.php";
            $sql = "SELECT * FROM TB_users WHERE fk_id_role = 1";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $administradores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $conexion = null;
            return $administradores;
        } catch (PDOException $e) {
            echo "Error al obtener administradores: " . $e->getMessage();
            return [];
        }
    }

    public function RegistrarAdmin($name_user, $email, $password_user) {
        try {
            include "conexion.php";
            $fk_id_role = 1; // Rol fijo de administrador
            $stmt = $conexion->prepare("INSERT INTO TB_users (fk_id_role, name_user, email, password_user) VALUES (?, ?, ?, ?)");
            $stmt->execute([$fk_id_role, $name_user, $email, $password_user]);
            $conexion = null;
            return true;
        } catch (PDOException $e) {
            echo "Error al registrar administrador: " . $e->getMessage();
            return false;
        }
    }

   
   
}
?>