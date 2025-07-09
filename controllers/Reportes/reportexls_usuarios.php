<?php
session_start();
include "../../models/usuarios.php";
$usuario = new usuarios();

if (isset($_SESSION["respuesta"])) {
    $respuesta = $_SESSION["respuesta"];
} else {
    $respuesta = $usuario->ConsultaGeneral();
}

// exporta como Excel
header("Content-Type: application/vnd.ms-excel; charset=ISO-8859-1");
header("Content-Disposition: attachment; filename=reporte_usuarios.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>";
echo "<table>
<tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CORREO</th>
    <th>".utf8_decode("CONTRASEÑA")."</th>
</tr>";

foreach ($respuesta as $fila) {
    echo "<tr>
        <td>".utf8_decode($fila[0])."</td>
        <td>".utf8_decode($fila[1])."</td>
        <td>".utf8_decode($fila[2])."</td>
        <td>".utf8_decode($fila[3])."</td>
    </tr>";
}
echo "</table>";
