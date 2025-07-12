<?php
include "../../models/productos.php";
$producto = new productos();

$campo = '';
$valor = '';

// Revisar si se envió búsqueda por nombre o por categoría (desde POST o GET por compatibilidad)
if (!empty($_GET['buscar'])) {
    $campo = 'name_product';
    $valor = $_GET['buscar'];
} elseif (!empty($_GET['categoria']) && $_GET['categoria'] != "Por categoría") {
    $campo = 'category';
    $valor = $_GET['categoria'];
}

if ($campo && $valor) {
    $productos = $producto->ConsultaEspecifica($campo, $valor);
} else {
    $productos = $producto->ObtenerTodos();
}

// Encabezados para forzar descarga como archivo Excel
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reporte_productos.xls");

// Crear tabla
echo "<table border='1'>";
echo "<tr>
        <th>Producto</th>
        <th>".utf8_decode("Categoria")."</th>
        <th>Precio</th>
        <th>Unidad</th>
        <th>".utf8_decode("Descripción")."</th>
      </tr>";

foreach ($productos as $p) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($p['name_product']) . "</td>";
    echo "<td>" . htmlspecialchars($p['category']) . "</td>";
    echo "<td>" . number_format($p['price'], 0, ',', '.') . "</td>";
    echo "<td>" . htmlspecialchars($p['unidad']) . "</td>";
    echo "<td>" . htmlspecialchars($p['description_product']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
