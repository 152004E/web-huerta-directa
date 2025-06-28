 <?php
include "../models/productos.php";

$producto = new productos();
$respuesta = $producto->Actualizar(
    $_POST['id_product'],
    
    $_POST['price'],
    
    $_POST['description_product']
);

if ($respuesta) {
    header("Location: ../views/DashBoard/dashboard.php");
} else {
    echo "Error al actualizar producto.";
}