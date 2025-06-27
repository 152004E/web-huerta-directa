 <?php

//var_dump($_POST);

class productos
{

    public function Registrar($name_product, $price, $category, $image_product, $description_product) {
    try {
        include "conexion.php";

        $registrar = $conexion->prepare("INSERT INTO TB_products (name_product, price, category, image_product, description_product) VALUES (?, ?, ?, ?, ?)");
        $resultado = $registrar->execute([$name_product, $price, $category, $image_product, $description_product]);

        if ($resultado) {
            return true;
        } else {
            // 🔴 Aquí vemos el error real
            print_r($registrar->errorInfo());
            return false;
        }

    } catch (PDOException $e) {
        echo "Error PDO: " . $e->getMessage();
        return false;
    }
}
    
/*
    public function ConsultaGeneral() {}

    public function ConsultaEspecifica($dato, $valor) {}

    public function Eliminar($id) {}
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
            return $lista;
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
*/
?>