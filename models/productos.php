 <?php

//var_dump($_POST);

class productos
{

    public function Registrar($name_product, $price, $category, $image_product, $description_product) {
    try {
        include "conexion.php";
        $registrar = $conexion->prepare("INSERT INTO TB_products (name_product, price, category, image_product, description_product) VALUES (?, ?, ?, ?, ?)");
        $resultado = $registrar->execute([$name_product, $price, $category, $image_product, $description_product]);
        return $resultado;
    } catch (Exception $e) {
        return false;
    }
 }

public function ObtenerTodos() {
    include "conexion.php";
    $consultar = $conexion->prepare("SELECT * FROM TB_products ORDER BY id_product DESC");
    $consultar->execute();
    return $consultar->fetchAll(PDO::FETCH_ASSOC);
}

public function Eliminar($id) {
    try {
        include "conexion.php";
        $Eliminar = $conexion->prepare("DELETE FROM TB_products WHERE id_product = ?");
        $Eliminar->execute([$id]);
        return true;
    } catch (Exception $e) {
        return $e;
    }
}

  public function ActualizarProducto($id_product, $name_product, $price, $category, $description_product) {
        try{
        include "conexion.php";
      
        $ActualizarU = $conexion-> prepare("update TB_products set name_product=?, price=?, category=?, description_product = ? where id_product=?");
        $ActualizarU-> execute([ $name_product, $price, $category, $description_product, $id_product,]);
        $conexion = null;
        return true;
        }
        catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }



  public function ConsultaEspecifica($campo, $valor) {
    try {
        include "conexion.php";
        $sql = "SELECT * FROM TB_products WHERE $campo = ?";
        $Cespecifica = $conexion->prepare($sql);
        $Cespecifica->execute([$valor]);
        $resultado = $Cespecifica->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}
    
/*
public function ConsultaEspecificaxls($campo, $valor) {
    try {
        include "conexion.php";

        // ✅ Solo permitimos estos campos para consultar
        $permitidos = ['name_product', 'category', 'price'];
        if (!in_array($campo, $permitidos)) {
            throw new Exception("Campo no permitido");
        }

        $sql = "SELECT * FROM TB_products WHERE $campo LIKE ?";
        $Cespecifica = $conexion->prepare($sql);
        $Cespecifica->execute(["%$valor%"]);
        $resultado = $Cespecifica->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}
*/
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
           
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
*/
?>