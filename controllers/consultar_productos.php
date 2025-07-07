<?php
include "../models/productos.php";
$producto = new productos();
$productos = $producto->ObtenerTodos();
?>
