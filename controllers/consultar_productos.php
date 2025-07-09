

session_start();
include "../../models/productos.php";
$producto = new productos();

if (isset($_POST["dato"]) && isset($_POST["valor"])) {
    $productos = $producto->ConsultaEspecificaxls($_POST["dato"], $_POST["valor"]);
} else {
    $productos = $producto->ObtenerTodos();
}

$_SESSION["productos_filtrados"] = $productos;
