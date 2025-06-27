 <?php

class productos
{

    public function Registrar($id_product, $name_product, $price, $category, $image_product, $description_product) {
    try {
        include "conexion.php";
        $consultar = $conexion->prepare("SELECT id_product, name_product, price, category, image_product, description_product FROM TB_products WHERE name_product=? AND price=? AND category=? AND image_product=? AND description_product=?");
        $consultar->execute([$id_product, $name_product, $price, $category, $image_product, $description_product]);
        $lista = $consultar->fetchAll(PDO::FETCH_ASSOC);
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