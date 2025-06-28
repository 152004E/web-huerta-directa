 <?php
include "../models/productos.php";

if (isset($_GET['id'])) {
    $producto = new productos();
    $producto->Eliminar($_GET['id']);

    // Redirigir de vuelta al dashboard
    header("Location: ../views/DashBoard/dashboard.php");
    exit;
} else {
    echo "ID de producto no válido.";
}