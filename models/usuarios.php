<?php

class usuarios
{

    public function Login($email, $password_user) {
    try {
        include "conexion.php";
        $fk_id_role = 2;
        $consultar = $conexion->prepare("SELECT fk_id_role, email, password_user FROM TB_users WHERE email=? AND password_user=?");
        $consultar->execute([$fk_id_role, $email, $password_user]);
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
            echo "Error: ". $e->getMessage();
        }
    }

    public function ActualizarUsuario() {
        try{
        include "conexion.php";
      
        $ActualizarU = $conexion-> prepare("update TB_users set name_user = ?, password_user= ? ");
        $ActualizarU-> execute([ ]);
        $conexion = null;
        return true;
        }
        catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }
   

    public function ConsultaGeneral(){
        try{
            include "conexion.php";
            $validar = $conexion->prepare(" SELECT id_user, name_user, email, password_user FROM TB_users");
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
            $validar = $conexion->prepare("select id_user, name_user, email, password_user from Tb_users where $dato = ? ");
            $validar->execute([$valor]);
            $lista = $validar->fetchAll(PDO::FETCH_NUM); 
            return $lista;
        }
        catch(Exception $e){
            return $e;
        }
    }

    public function Eliminar($id){
        try{
            include "conexion.php";
            $validar = $conexion->prepare("update TB_users set  where id_product=?");
            $validar->execute([$id]);
            return true;
        }
        catch(Exception $e){
            return $e;
        }
    }
    /*
     public function ObtenerPorEmail($email) {
        try{
        include "conexion.php";
      
        $ActualizarU = $conexion-> prepare("update usuario set name_product=?, price=?, category=?, description_product where id_product=?");
        $ActualizarU-> execute([ $email]);
        $conexion = null;
        return true;
        }
        catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }*/
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