<?php
//El contenido será Excel y acepta caracteres especiales
header("Content-Type: application/vnd.ms-excel; charset=ISO-8859-1");
//Se comporta descargando un archivo y lo nombre usuarios.xls
header("Content-Disposition: attachment; filename=reporte_usuarios.xls");
header("Pragma: no-cache");
header("Expires: 0");

ob_start();

//Carga los datos de la ruta específica, para este caso desde los datos de sesión
//session_start();
//$respuesta = $_SESSION["respuesta"];

include "../../models/usuarios.php";
$usuario = new usuarios();
$respuesta = $usuario->ConsultaGeneral();
//Crea una tabla, el Excel asumirá esta disposición
//Los datos pueden asumir caracteres especiales
echo "<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1'>";
echo "<table>
        <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>CONTRASEÑA</th>
        </tr>";

foreach($respuesta as $fila){
    echo "<tr>
                
                <td>".utf8_decode($fila[0])."</td>
                <td>".utf8_decode($fila[1])."</td>
                <td>".utf8_decode($fila[2])."</td>
                <td>".utf8_decode($fila[3])."</td>
        </tr>";
}
echo "</table>";

?>