<?php
echo "<form id='formu' action='../controllers/actualizar_usuarios.php' method='post'><table class='table table-hover'><tr>
        <th>CODIGO</th>
        <th>DOCUMENTO</th>
        <th>NOMBRE</th>
        <th>TELEFONO</th>
        <th>CORREO</th>
        <th>PERFIL</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
        </tr>";

foreach($respuesta as $fila){
    //Cada celda tiene un id para que el dato sea almacenado desde JS
    //Al dar clic en el link Editar, se ejecuta la función JS llamada editarFila
    //Al dar clic en el link Eliminar se comunica el id del usuario para realizar el cambio de estado
    echo "<tr><td class='id'>$fila[0]</td>
        <td class='documento'>$fila[1]</td>
        <td class='nombre'>$fila[2]</td>
        <td class='telefono'>$fila[3]</td>
        <td class='correo'>$fila[4]</td>
        <td class='perfil'>$fila[6]</td>
        <td><a href='#' onclick='editarFila(this);'>Editar</a></td>
        <td><a href='../controllers/eliminar_usuarios.php?codigo=$fila[0]'>Eliminar</a></td>
        </tr>";
}
echo "</table></form>";
?>