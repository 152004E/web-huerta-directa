<?php
session_start();
include "../../models/productos.php";
$producto = new productos();

$productos = $_SESSION["productos_filtrados"] ?? $producto->ObtenerTodos();

header("Content-Type: application/vnd.ms-excel; charset=ISO-8859-1");
header("Content-Disposition: attachment; filename=reporte_productos.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>";
echo "<table>
        <tr>
            <th>PRODUCTO</th>
            <th>CATEGORiA</th>
            <th>PRECIO</th>
            <th>DESCRIPCION</th>
            </tr>";

foreach ($productos as $fila) {
    echo "<tr>
        <td>" . utf8_decode($fila["name_product"]) . "</td>
        <td>" . utf8_decode($fila["category"]) . "</td>
        <td>" . utf8_decode($fila["price"]) . "</td>
        <td>" . utf8_decode($fila["description_product"]) . "</td>
    </tr>";
}

echo "</table>";