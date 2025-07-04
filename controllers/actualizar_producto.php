 <?php
include "../models/productos.php";

$producto = new productos();
$respuesta = $producto->ActualizarProducto($_POST['id_product'],$_POST['name_product'], $_POST['price'] , $_POST['category'],$_POST['description_product']
);

if ($respuesta) {
    header("Location: ../views/DashBoard/Dashboardd.php");
} else {
    echo "Error al actualizar producto.";
}