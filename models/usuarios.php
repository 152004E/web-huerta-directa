<?php

class usuarios
{

    public function Login($email, $password_user) {
    try {
        include "conexion.php";
       
        $consultar = $conexion->prepare("SELECT  id_user, fk_id_role, email, password_user FROM TB_users WHERE email=? AND password_user=?");
        $consultar->execute([ $email, $password_user]);
        $lista = $consultar->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $lista;
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    }
    public function Registrar($name_user, $email, $password_user) {
        try{
        include "conexion.php";
        $fk_id_role = 2;
        $RegistrarU = $conexion-> prepare("INSERT INTO TB_users(fk_id_role, name_user, email, password_user) VALUES (?,?,?,?)");
        $RegistrarU-> execute([$fk_id_role, $name_user, $email, $password_user]);
        $conexion = null;
        return true;
        }
        catch(PDOException $e){
            return $e;
        }
    }

   

    public function ConsultaGeneral(){
        try{
            include "conexion.php";
            $validar = $conexion->prepare("SELECT id_user, name_user, email, password_user FROM TB_users");
            $validar->execute();
            $lista = $validar->fetchAll(PDO::FETCH_NUM); 
            return $lista;
        }
        catch(Exception $e){
            return $e;
        }
    }


    public function ConsultaEspecifica($dato,$valor){
        try{
            include "conexion.php";
            $validar = $conexion->prepare("SELECT id_user, name_user, email, password_user from Tb_users where $dato = ? ");   
            $validar->execute([$valor]);
            $lista = $validar->fetchAll(PDO::FETCH_NUM); 
            return $lista;
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function ActualizarUsuario($id_user, $name_user,  $password_user) {
        try{
        include "conexion.php";
        $ActualizarU = $conexion-> prepare("UPDATE TB_users SET name_user = ?,  password_user = ? WHERE id_user = ? ");
        $ActualizarU-> execute([$name_user, $password_user, $id_user]);
        if ($ActualizarU->rowCount() > 0) {
            return true;
        } else {
            return "No se actualizó ninguna fila. ¿El ID existe?";
        }
        $conexion = null;
        return true;
        }
        catch(PDOException $e){
           return $e;
        }
    }

    public function Eliminar($id_user){
        try{
            include "conexion.php";
            $validar = $conexion->prepare("DELETE FROM TB_users  where id_user=?");
            $validar->execute([$id_user]);
            return true;
        }
        catch(Exception $e){
            return $e;
        }
    }
}


/*
class Administrador extends usuarios
{
    public function ConsultaGeneral() {
        try {
            include "conexion.php";
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
*/
?>